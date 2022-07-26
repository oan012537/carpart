<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Datatables;
use App\Models\Backend\Role;
use App\Models\UserSupplier;
use App\Models\Supplier;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ApprovalRequestIndividualController extends Controller
{
    public function index(){
        return view('backend.approvalrequestindividual.index',[]);
    }

    public function datatables(){
        
        $data = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->leftjoin('stores','suppliers.id','stores.supplier_id')->where('suppliers.supplier_type','personal')->select(DB::raw("store_name,if(suppliers.supplier_type = 'personal', concat(suppliers.personal_first_name,' ', suppliers.personal_last_name), suppliers.company_name) as supplir_name,if(suppliers.supplier_type = 'personal', suppliers.personal_card_id, suppliers.vat_registration_number) as card_id,comment,code,user_suppliers.updated_at,status_code,user_suppliers.id,user_suppliers.created_at,approve_at"));
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if($search != ''){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere('store_name','LIKE','%'.$search.'%')
                ->orwhere(DB::raw("concat(suppliers.personal_first_name,' ', suppliers.personal_last_name)"),'LIKE','%'.$search.'%')
                ->orwhere('personal_card_id','LIKE','%'.$search.'%')
                ->orwhere('comment','LIKE','%'.$search.'%')
                ;
            });
        }
        if($date!= ''){
            $dates = explode(',',$date);
            $sdate = $dates[0];
            $edate = $dates[1];
            if($radiodate == '1'){
                $data->whereBetween('user_suppliers.created_at',[$sdate.' 00:00',$edate.' 23:59']);
            }else{
                $data->whereBetween('suppliers.approve_at',[$sdate.' 00:00',$edate.' 23:59']);
            }
        }
        $data->groupby('user_suppliers.id');
		$sQuery	= Datatables::of($data)
		// ->filter(function ($query) use ($dataserch){
		// 	$explodesearch = explode(',',$dataserch);
		// 	// dd($explodesearch);
			
		// 	$query->where(function($querys) use ($explodesearch){  //เพิ่มใหม่
		// 		$countwhere = 0;
		// 		foreach ($explodesearch as $key => $value) {
		// 			if($value != ''){
		// 				if($countwhere == 0){
		// 					// $query->where(function($querys) use ($value){
		// 						$querys->where('export_inv','like','%'.$value.'%')
		// 						->orwhere('export_date','like','%'.$value.'%')
		// 						->orwhere('customer_name','like','%'.$value.'%')
		// 						->orwhere('export_totalpayment','like','%'.$value.'%')
		// 						->orwhere('area_name','like','%'.$value.'%');
		// 					// });
		// 				}else{
		// 					// $query->orwhere(function($querys) use ($value){
		// 						$querys->where('export_inv','like','%'.$value.'%')
		// 						->orwhere('export_date','like','%'.$value.'%')
		// 						->orwhere('customer_name','like','%'.$value.'%')
		// 						->orwhere('export_totalpayment','like','%'.$value.'%')
		// 						->orwhere('area_name','like','%'.$value.'%');
		// 					// });
		// 				}
		// 				$countwhere++;
		// 			}
		// 		}
		// 	});
		// })
        ->setRowClass(function ($data) {
            return 'suppliers'.$data->id;
        })
        ->setRowAttr([
            'data-id' => function($data) {
                return $data->id;
            },
            'data-status' => function($data) {
                return $data->status_code;
            },
            'data-comment' => function($data) {
                return $data->comment;
            },
        ])
        ->setRowData([
            'data-id' => function($data) {
                return $data->id;
            },
            'data-status' => function($data) {
                return $data->status_code;
            },
            'data-comment' => function($data) {
                return $data->comment;
            },
        ])
		->editColumn('updated_at',function($data){
			return date('d/m/Y H:i',strtotime($data->updated_at));
		})
        ->editColumn('created_at',function($data){
			return date('d/m/Y H:i',strtotime($data->created_at));
		})
		->editColumn('status_code',function($data){
            if($data->status_code == 'approved'){
                return '<div class="approvel ap-success"><p>อนุมัติ</p></div>';
            }else if($data->status_code == 'request_approval'){
                return '<div class="approvel ap-wait"><p>รออนุมัติ</p></div>';
            }else if($data->status_code == 'un_approve'){
                return '<div class="approvel ap-no"><p>ไม่อนุมัติ</p></div>';
            }else{
                return '';
            }
		})
		->addColumn('btnview',function($data){
			return '<a href="javascript:void(0)" class="btn btn__viewdetail"   onclick="approval('.$data->id.')">ดูรายละเอียด</a>';
		})
		->addColumn('btnaction',function($data){
            $btn__approval = '';
            $btn__waitapproval = '';
            $btn__noapproval = '';
			if($data->status_code == 'approved'){
                $btn__approval = 'btn__approval';
                return '<div class="box__btn"><button class="btn btn__app btn__approval">อนุมัติ</button></div>';
            }else if($data->status_code == 'request_approval'){
                $btn__waitapproval = 'btn__waitapproval';
                return '<div class="box__btn"><button class="btn btn__app btn__waitapproval">รออนุมัติ</button></div>';
            }else if($data->status_code == 'un_approve'){
                $btn__noapproval = 'btn__noapproval';
                return '<div class="box__btn"><button class="btn btn__app btn__noapproval">ไม่อนุมัติ</button></div>';
            }
			// return '<div class="box__btn">
            //         <button class="btn btn__app '.$btn__approval.'" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
            //         <button class="btn btn__app '.$btn__waitapproval.'">รออนุมัติ</button>
            //         <button class="btn btn__app '.$btn__noapproval.'">ไม่อนุมัติ</button>
            //         </div>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function datatables_wait(){

        $data = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->leftjoin('stores','suppliers.id','stores.supplier_id')->where('suppliers.supplier_type','personal')->where('suppliers.status_code','request_approval')->select(DB::raw("store_name,if(suppliers.supplier_type = 'personal', concat(suppliers.personal_first_name,' ', suppliers.personal_last_name), suppliers.company_name) as supplir_name,if(suppliers.supplier_type = 'personal', suppliers.personal_card_id, suppliers.vat_registration_number) as card_id,comment,code,user_suppliers.updated_at,status_code,user_suppliers.id,user_suppliers.created_at,approve_at"));
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if($search != ''){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere('store_name','LIKE','%'.$search.'%')
                ->orwhere(DB::raw("concat(suppliers.personal_first_name,' ', suppliers.personal_last_name)"),'LIKE','%'.$search.'%')
                ->orwhere('personal_card_id','LIKE','%'.$search.'%')
                ->orwhere('comment','LIKE','%'.$search.'%')
                ;
            });
        }
        if($date!= ''){
            $dates = explode(',',$date);
            $sdate = $dates[0];
            $edate = $dates[1];
            if($radiodate == '1'){
                $data->whereBetween('user_suppliers.created_at',[$sdate.' 00:00',$edate.' 23:59']);
            }else{
                $data->whereBetween('suppliers.approve_at',[$sdate.' 00:00',$edate.' 23:59']);
            }
        }
        $data->groupby('user_suppliers.id');
		$sQuery	= Datatables::of($data)
		->editColumn('updated_at',function($data){
			return date('d/m/Y H:i',strtotime($data->updated_at));
		})
        ->editColumn('created_at',function($data){
			return date('d/m/Y H:i',strtotime($data->created_at));
		})
		->editColumn('status_code',function($data){
            if($data->status_code == 'approved'){
                return '<div class="approvel ap-success"><p>อนุมัติ</p></div>';
            }else if($data->status_code == 'request_approval'){
                return '<div class="approvel ap-wait"><p>รออนุมัติ</p></div>';
            }else if($data->status_code == 'un_approve'){
                return '<div class="approvel ap-no"><p>ไม่อนุมัติ</p></div>';
            }else{
                return '';
            }
		})
		->addColumn('btnview',function($data){
			return '<a href="javascript:void(0)" class="btn btn__viewdetail"   onclick="viewdetail('.$data->id.')">ดูรายละเอียด</a>';
		})
		->addColumn('btnaction',function($data){
            $btn__approval = '';
            $btn__waitapproval = '';
            $btn__noapproval = '';
			if($data->status_code == 'approved'){
                $btn__approval = 'btn__approval';
                return '<div class="box__btn"><button class="btn btn__app btn__approval">อนุมัติ</button></div>';
            }else if($data->status_code == 'request_approval'){
                $btn__waitapproval = 'btn__waitapproval';
                return '<div class="box__btn"><button class="btn btn__app btn__waitapproval">รออนุมัติ</button></div>';
            }else if($data->status_code == 'un_approve'){
                $btn__noapproval = 'btn__noapproval';
                return '<div class="box__btn"><button class="btn btn__app btn__noapproval">ไม่อนุมัติ</button></div>';
            }
			// return '<div class="box__btn">
            //         <button class="btn btn__app '.$btn__approval.'" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
            //         <button class="btn btn__app '.$btn__waitapproval.'">รออนุมัติ</button>
            //         <button class="btn btn__app '.$btn__noapproval.'">ไม่อนุมัติ</button>
            //         </div>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function datatables_approval(){

        $data = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->leftjoin('stores','suppliers.id','stores.supplier_id')->where('suppliers.supplier_type','personal')->where('suppliers.status_code','approved')->select(DB::raw("store_name,if(suppliers.supplier_type = 'personal', concat(suppliers.personal_first_name,' ', suppliers.personal_last_name), suppliers.company_name) as supplir_name,if(suppliers.supplier_type = 'personal', suppliers.personal_card_id, suppliers.vat_registration_number) as card_id,comment,code,user_suppliers.updated_at,status_code,user_suppliers.id,user_suppliers.created_at,approve_at"));
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if($search != ''){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere('store_name','LIKE','%'.$search.'%')
                ->orwhere(DB::raw("concat(suppliers.personal_first_name,' ', suppliers.personal_last_name)"),'LIKE','%'.$search.'%')
                ->orwhere('personal_card_id','LIKE','%'.$search.'%')
                ->orwhere('comment','LIKE','%'.$search.'%')
                ;
            });
        }
        if($date!= ''){
            $dates = explode(',',$date);
            $sdate = $dates[0];
            $edate = $dates[1];
            if($radiodate == '1'){
                $data->whereBetween('user_suppliers.created_at',[$sdate.' 00:00',$edate.' 23:59']);
            }else{
                $data->whereBetween('suppliers.approve_at',[$sdate.' 00:00',$edate.' 23:59']);
            }
        }
        $data->groupby('user_suppliers.id');
		$sQuery	= Datatables::of($data)
		->editColumn('updated_at',function($data){
			return date('d/m/Y H:i',strtotime($data->updated_at));
		})
        ->editColumn('created_at',function($data){
			return date('d/m/Y H:i',strtotime($data->created_at));
		})
		->editColumn('status_code',function($data){
            if($data->status_code == 'approved'){
                return '<div class="approvel ap-success"><p>อนุมัติ</p></div>';
            }else if($data->status_code == 'request_approval'){
                return '<div class="approvel ap-wait"><p>รออนุมัติ</p></div>';
            }else if($data->status_code == 'un_approve'){
                return '<div class="approvel ap-no"><p>ไม่อนุมัติ</p></div>';
            }else{
                return '';
            }
		})
		->addColumn('btnview',function($data){
			return '<a href="javascript:void(0)" class="btn btn__viewdetail"   onclick="viewdetail('.$data->id.')">ดูรายละเอียด</a>';
		})
		->addColumn('btnaction',function($data){
            $btn__approval = '';
            $btn__waitapproval = '';
            $btn__noapproval = '';
			if($data->status_code == 'approved'){
                $btn__approval = 'btn__approval';
                return '<div class="box__btn"><button class="btn btn__app btn__approval">อนุมัติ</button></div>';
            }else if($data->status_code == 'request_approval'){
                $btn__waitapproval = 'btn__waitapproval';
                return '<div class="box__btn"><button class="btn btn__app btn__waitapproval">รออนุมัติ</button></div>';
            }else if($data->status_code == 'un_approve'){
                $btn__noapproval = 'btn__noapproval';
                return '<div class="box__btn"><button class="btn btn__app btn__noapproval">ไม่อนุมัติ</button></div>';
            }
			// return '<div class="box__btn">
            //         <button class="btn btn__app '.$btn__approval.'" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
            //         <button class="btn btn__app '.$btn__waitapproval.'">รออนุมัติ</button>
            //         <button class="btn btn__app '.$btn__noapproval.'">ไม่อนุมัติ</button>
            //         </div>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

	public function datatables_disapproved(){

        $data = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->leftjoin('stores','suppliers.id','stores.supplier_id')->where('suppliers.supplier_type','personal')->where('suppliers.status_code','un_approve')->select(DB::raw("store_name,if(suppliers.supplier_type = 'personal', concat(suppliers.personal_first_name,' ', suppliers.personal_last_name), suppliers.company_name) as supplir_name,if(suppliers.supplier_type = 'personal', suppliers.personal_card_id, suppliers.vat_registration_number) as card_id,comment,code,user_suppliers.updated_at,status_code,user_suppliers.id,user_suppliers.created_at,approve_at"));
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if($search != ''){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere('store_name','LIKE','%'.$search.'%')
                ->orwhere(DB::raw("concat(suppliers.personal_first_name,' ', suppliers.personal_last_name)"),'LIKE','%'.$search.'%')
                ->orwhere('personal_card_id','LIKE','%'.$search.'%')
                ->orwhere('comment','LIKE','%'.$search.'%')
                ;
            });
        }
        if($date!= ''){
            $dates = explode(',',$date);
            $sdate = $dates[0];
            $edate = $dates[1];
            if($radiodate == '1'){
                $data->whereBetween('user_suppliers.created_at',[$sdate.' 00:00',$edate.' 23:59']);
            }else{
                $data->whereBetween('suppliers.approve_at',[$sdate.' 00:00',$edate.' 23:59']);
            }
        }
        $data->groupby('user_suppliers.id');
		$sQuery	= Datatables::of($data)
		->editColumn('updated_at',function($data){
			return date('d/m/Y H:i',strtotime($data->updated_at));
		})
        ->editColumn('created_at',function($data){
			return date('d/m/Y H:i',strtotime($data->created_at));
		})
		->editColumn('status_code',function($data){
            if($data->status_code == 'approved'){
                return '<div class="approvel ap-success"><p>อนุมัติ</p></div>';
            }else if($data->status_code == 'request_approval'){
                return '<div class="approvel ap-wait"><p>รออนุมัติ</p></div>';
            }else if($data->status_code == 'un_approve'){
                return '<div class="approvel ap-no"><p>ไม่อนุมัติ</p></div>';
            }else{
                return '';
            }
		})
		->addColumn('btnview',function($data){
			return '<a href="javascript:void(0)" class="btn btn__viewdetail"   onclick="viewdetail('.$data->id.')">ดูรายละเอียด</a>';
		})
		->addColumn('btnaction',function($data){
            $btn__approval = '';
            $btn__waitapproval = '';
            $btn__noapproval = '';
			if($data->status_code == 'approved'){
                $btn__approval = 'btn__approval';
                return '<div class="box__btn"><button class="btn btn__app btn__approval">อนุมัติ</button></div>';
            }else if($data->status_code == 'request_approval'){
                $btn__waitapproval = 'btn__waitapproval';
                return '<div class="box__btn"><button class="btn btn__app btn__waitapproval">รออนุมัติ</button></div>';
            }else if($data->status_code == 'un_approve'){
                $btn__noapproval = 'btn__noapproval';
                return '<div class="box__btn"><button class="btn btn__app btn__noapproval">ไม่อนุมัติ</button></div>';
            }
			// return '<div class="box__btn">
            //         <button class="btn btn__app '.$btn__approval.'" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
            //         <button class="btn btn__app '.$btn__waitapproval.'">รออนุมัติ</button>
            //         <button class="btn btn__app '.$btn__noapproval.'">ไม่อนุมัติ</button>
            //         </div>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function getdetails(Request $request){
        $result = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->leftjoin('stores','suppliers.id','stores.supplier_id')->where('user_suppliers.id',$request->id)->select('*','user_suppliers.id as id')->first();
        $getaddress = Store::where('supplier_id',$result->supplier_id)->first();
        $result->addressfull = $result->address.' ตำบล/แขวง '.$getaddress->District->name_th.' อำเภอ/เขต '.$getaddress->Amphure->name_th.' จังหวัด '.$getaddress->Province->name_th.' '.$getaddress->District->zip_code;
        
        $getaddress = Supplier::where('user_id',$request->id)->first();
        $result->addressidcard = $result->address.' ตำบล/แขวง '.$getaddress->District->name_th.' อำเภอ/เขต '.$getaddress->Amphure->name_th.' จังหวัด '.$getaddress->Province->name_th.' '.$getaddress->District->zip_code;
        return Response::json($result);
    }

    public function update(Request $request){
        // dd($request->all());
        $supplier = Supplier::where('user_id',$request->supplierid)->first();
        $supplier->status_code = $request->approvestatus;
        $supplier->approve_at = date('Y-m-d H:i:s');
        $supplier->approve_by = Auth::user()->name;
        $supplier->comment = !empty($request->txt__note)?$request->txt__note:'';
        $supplier->save();
        $user = UserSupplier::find($supplier->user_id);
        if($request->approved == ''){
            if($supplier->code == ''){
                $lastcode = Supplier::where('suppliers.supplier_type','personal')->where('code','!=','')->latest()->first();
                $code = 1;
                if(!empty($lastcode)){
                    if($lastcode->code != ''){
                        $code = str_replace('CPNI','',$lastcode->code)+1;
                    }
                }
                $code = 'CPNI'.str_pad($code,6,'0',STR_PAD_LEFT );
                $checked = Supplier::where('suppliers.supplier_type','personal')->where('code','!=',$code)->count();
                if($checked > 0){
                    DB::transaction(function () use ($code,$supplier) {
                    
                        $supplier = Supplier::lockForUpdate()->find($supplier->id);
                        $supplier->code = $code;
                        $supplier->save();
                    });
                }
                
            }
            $text = 'CPN
            อนุมัติการสมัครสมาชิกของท่านเรียบร้อยแล้ว
            โปรดใช้รหัสผ่านต่อไปนี้ในการเข้าสู่ระบบ
            หมายเลขโทรศัพท์ : '.$user->phone.'
            รหัสผ่าน : 12345678';
        }else if($request->request_approval == ''){
            $text = 'รออนุมัติ';
        }else if($request->un_approve == ''){
            $text = 'ไม่อนุมัติ';
        }else{
            $text = '';
        }
        // $send = $this->mails($user);
        // dd($send);
        $sms = smstext($text,$user->phone);
        if($sms['code'] == '000'){

        }else{
            $this->mails($user);
        }
        return redirect()->route('backend.approval.individual');
    }

    public function approval(Request $request){
        // dd($request->all());
        $supplier = Supplier::where('user_id',$request->supplierid)->first();
        $supplier->status_code = $request->approvestatus;
        $supplier->approve_at = date('Y-m-d H:i:s');
        $supplier->approve_by = Auth::user()->name;
        $supplier->comment = !empty($request->txt__note)?$request->txt__note:'';
        $supplier->save();
        $user = UserSupplier::find($supplier->user_id);
        if($request->approved == ''){
            if($supplier->code == ''){
                $lastcode = Supplier::where('suppliers.supplier_type','personal')->where('code','!=','')->latest()->first();
                $code = 1;
                if(!empty($lastcode)){
                    if($lastcode->code != ''){
                        $code = str_replace('CPNI','',$lastcode->code)+1;
                    }
                }
                $code = 'CPNI'.str_pad($code,6,'0',STR_PAD_LEFT );
                $checked = Supplier::where('suppliers.supplier_type','personal')->where('code','!=',$code)->count();
                if($checked > 0){
                    DB::transaction(function () use ($code,$supplier) {
                    
                        $supplier = Supplier::lockForUpdate()->find($supplier->id);
                        $supplier->code = $code;
                        $supplier->save();
                    });
                }
                
            }
            $text = 'CPN
            อนุมัติการสมัครสมาชิกของท่านเรียบร้อยแล้ว
            โปรดใช้รหัสผ่านต่อไปนี้ในการเข้าสู่ระบบ
            หมายเลขโทรศัพท์ : '.$user->phone.'
            รหัสผ่าน : 12345678';
        }else if($request->request_approval == ''){
            $text = 'รออนุมัติ';
        }else if($request->un_approve == ''){
            $text = 'ไม่อนุมัติ';
        }else{
            $text = '';
        }
        // $send = $this->mails($user);
        // dd($send);
        $sms = smstext($text,$user->phone);
        if($sms['code'] == '000'){

        }else{
            $send = $this->mails($user);
        }
        return redirect()->route('backend.approval.individual');

    }

    function mails($data){
        $subject = 'อนุมัติ';
        $email = $data->email;
        // $content = 'Panuwat Mumthong';
        // dd($file);
        Mail::send('backend.approvalrequestindividual.mails', ['content' => $data], function ($m) use($email,$subject){
            $m->from('carparts@oan.orangeworkshop.info', 'CARPARTSNAVI');
            $m->to($email)->subject($subject);
            // $m->attachData($pdf->output(),'pdffile.pdf');
        });
        if (Mail::failures()) {
            return 'x';
        }else{
            return 'y';
        }
    }
}
