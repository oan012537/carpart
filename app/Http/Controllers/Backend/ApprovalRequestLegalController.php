<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Datatables;
use App\Models\Backend\Role;
use App\Models\UserSupplier;
use Response;

class ApprovalRequestLegalController extends Controller
{
    public function index(){
        return view('backend.approvalrequestlegal.index',[]);
    }

    public function datatables(){

        $data = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->where('supplier_type','นิติบุคคล');
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if(!$search){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere('store_name ','LIKE','%'.$search.'%')
                ->orwhere('name','LIKE','%'.$search.'%')
                ->orwhere('personal_card_id','LIKE','%'.$search.'%')
                ->orwhere('comment','LIKE','%'.$search.'%')
                ;
            });
        }
        if(!$date){
            $data->whereBetween($radiodate,[$date]);
        }
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
		->editColumn('updated_at',function($data){
			return date('d/m/Y',strtotime($data->updated_at));
		})
		->editColumn('active',function($data){
            if($data->active == 'approved'){
                return '<div class="approvel ap-success"><p>อนุมัติ</p></div>';
            }else if($data->active == 'request_approval'){
                return '<div class="approvel ap-wait"><p>รออนุมัติ</p></div>';
            }else if($data->active == 'un_approve'){
                return '<div class="approvel ap-no"><p>ไม่อนุมัติ</p></div>';
            }else{
                return '';
            }
		})
		->addColumn('btnview',function($data){
			return '<a href="javascript:void(0)" class="btn btn__viewdetail" data-bs-toggle="modal" data-bs-target="#modalviewdetailapp" onclick="viewdetail('.$data->id.')">ดูรายละเอียด</a>';
		})
		->addColumn('btnaction',function($data){
            $btn__approval = '';
            $btn__waitapproval = '';
            $btn__noapproval = '';
			if($data->active == 'approved'){
                $btn__approval = 'btn__approval';
            }else if($data->active == 'request_approval'){
                $btn__waitapproval = 'btn__waitapproval';
            }else if($data->active == 'un_approve'){
                $btn__noapproval = 'btn__noapproval';
            }
			return '<div class="box__btn">
                    <button class="btn btn__app '.$btn__approval.'" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
                    <button class="btn btn__app '.$btn__waitapproval.'">รออนุมัติ</button>
                    <button class="btn btn__app '.$btn__noapproval.'">ไม่อนุมัติ</button>
                    </div>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function datatables_wait(){

		$data = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->where('supplier_type','นิติบุคคล')->where('active','2');
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if(!$search){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere('store_name ','LIKE','%'.$search.'%')
                ->orwhere('name','LIKE','%'.$search.'%')
                ->orwhere('personal_card_id','LIKE','%'.$search.'%')
                ->orwhere('comment','LIKE','%'.$search.'%')
                ;
            });
        }
        if(!$date){
            $data->whereBetween($radiodate,[$date]);
        }
		$sQuery	= Datatables::of($data)
		->editColumn('updated_at',function($data){
			return date('d/m/Y',strtotime($data->updated_at));
		})
		->editColumn('active',function($data){
            if($data->active == 'approved'){
                return '<div class="approvel ap-success"><p>อนุมัติ</p></div>';
            }else if($data->active == 'request_approval'){
                return '<div class="approvel ap-wait"><p>รออนุมัติ</p></div>';
            }else if($data->active == 'un_approve'){
                return '<div class="approvel ap-no"><p>ไม่อนุมัติ</p></div>';
            }else{
                return '';
            }
		})
		->addColumn('btnview',function($data){
			return '<a href="javascript:void(0)" class="btn btn__viewdetail" data-bs-toggle="modal" data-bs-target="#modalviewdetailapp">ดูรายละเอียด</a>';
		})
		->addColumn('btnaction',function($data){
            $btn__approval = '';
            $btn__waitapproval = '';
            $btn__noapproval = '';
			if($data->active == 'approved'){
                $btn__approval = 'btn__approval';
            }else if($data->active == 'request_approval'){
                $btn__waitapproval = 'btn__waitapproval';
            }else if($data->active == 'un_approve'){
                $btn__noapproval = 'btn__noapproval';
            }
			return '<div class="box__btn">
                    <button class="btn btn__app '.$btn__approval.'" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
                    <button class="btn btn__app '.$btn__waitapproval.'">รออนุมัติ</button>
                    <button class="btn btn__app '.$btn__noapproval.'">ไม่อนุมัติ</button>
                    </div>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function datatables_approval(){

        $data = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->where('supplier_type','นิติบุคคล')->where('active','1');
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if(!$search){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere('store_name ','LIKE','%'.$search.'%')
                ->orwhere('name','LIKE','%'.$search.'%')
                ->orwhere('personal_card_id','LIKE','%'.$search.'%')
                ->orwhere('comment','LIKE','%'.$search.'%')
                ;
            });
        }
        if(!$date){
            $data->whereBetween($radiodate,[$date]);
        }
		$sQuery	= Datatables::of($data)
		->editColumn('updated_at',function($data){
			return date('d/m/Y',strtotime($data->updated_at));
		})
		->editColumn('active',function($data){
            if($data->active == 'approved'){
                return '<div class="approvel ap-success"><p>อนุมัติ</p></div>';
            }else if($data->active == 'request_approval'){
                return '<div class="approvel ap-wait"><p>รออนุมัติ</p></div>';
            }else if($data->active == 'un_approve'){
                return '<div class="approvel ap-no"><p>ไม่อนุมัติ</p></div>';
            }else{
                return '';
            }
		})
		->addColumn('btnview',function($data){
			return '<a href="javascript:void(0)" class="btn btn__viewdetail" data-bs-toggle="modal" data-bs-target="#modalviewdetailapp">ดูรายละเอียด</a>';
		})
		->addColumn('btnaction',function($data){
            $btn__approval = '';
            $btn__waitapproval = '';
            $btn__noapproval = '';
			if($data->active == 'approved'){
                $btn__approval = 'btn__approval';
            }else if($data->active == 'request_approval'){
                $btn__waitapproval = 'btn__waitapproval';
            }else if($data->active == 'un_approve'){
                $btn__noapproval = 'btn__noapproval';
            }
			return '<div class="box__btn">
                    <button class="btn btn__app '.$btn__approval.'" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
                    <button class="btn btn__app '.$btn__waitapproval.'">รออนุมัติ</button>
                    <button class="btn btn__app '.$btn__noapproval.'">ไม่อนุมัติ</button>
                    </div>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

	public function datatables_disapproved(){

        $data = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->where('supplier_type','นิติบุคคล')->where('active','0');
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if(!$search){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere('store_name ','LIKE','%'.$search.'%')
                ->orwhere('name','LIKE','%'.$search.'%')
                ->orwhere('personal_card_id','LIKE','%'.$search.'%')
                ->orwhere('comment','LIKE','%'.$search.'%')
                ;
            });
        }
        if(!$date){
            $data->whereBetween($radiodate,[$date]);
        }
		$sQuery	= Datatables::of($data)
		->editColumn('updated_at',function($data){
			return date('d/m/Y',strtotime($data->updated_at));
		})
		->editColumn('active',function($data){
            if($data->active == 'approved'){
                return '<div class="approvel ap-success"><p>อนุมัติ</p></div>';
            }else if($data->active == 'request_approval'){
                return '<div class="approvel ap-wait"><p>รออนุมัติ</p></div>';
            }else if($data->active == 'un_approve'){
                return '<div class="approvel ap-no"><p>ไม่อนุมัติ</p></div>';
            }else{
                return '';
            }
		})
		->addColumn('btnview',function($data){
			return '<a href="javascript:void(0)" class="btn btn__viewdetail" data-bs-toggle="modal" data-bs-target="#modalviewdetailapp">ดูรายละเอียด</a>';
		})
		->addColumn('btnaction',function($data){
            $btn__approval = '';
            $btn__waitapproval = '';
            $btn__noapproval = '';
			if($data->active == 'approved'){
                $btn__approval = 'btn__approval';
            }else if($data->active == 'request_approval'){
                $btn__waitapproval = 'btn__waitapproval';
            }else if($data->active == 'un_approve'){
                $btn__noapproval = 'btn__noapproval';
            }
			return '<div class="box__btn">
                    <button class="btn btn__app '.$btn__approval.'" data-bs-toggle="modal" data-bs-target="#modalapproval">อนุมัติ</button>
                    <button class="btn btn__app '.$btn__waitapproval.'">รออนุมัติ</button>
                    <button class="btn btn__app '.$btn__noapproval.'">ไม่อนุมัติ</button>
                    </div>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function update(Request $request){
        dd($request->all());

    }

    public function getdetails(Request $request){
        return Response::json($request->all());
    }

	public function approve(Request $request){
		
	}
}
