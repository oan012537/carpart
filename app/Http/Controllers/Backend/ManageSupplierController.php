<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Datatables;
use App\Models\UserSupplier;
use App\Models\Supplier;
use App\Models\Store;
use Illuminate\Support\Facades\DB;

class ManageSupplierController extends Controller
{
    public function individualindex(){
        return view('backend.managesupplier.individual.index');
    }

    public function individualdatatables(){
        $data = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->leftjoin('stores','user_suppliers.id','stores.supplier_id')->where('suppliers.supplier_type','personal')->select(DB::raw("store_name,concat(suppliers.personal_first_name,' ', suppliers.personal_last_name) as supplir_name,if(suppliers.supplier_type = 'personal', suppliers.personal_card_id, suppliers.vat_registration_number) as card_id,comment,code,user_suppliers.updated_at,supplier_type,suppliers.is_active,user_suppliers.id,user_suppliers.created_at,approve_at,suppliers.id as supplierid"));
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if($search != ''){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere(DB::raw("concat(suppliers.personal_first_name,' ', suppliers.personal_last_name)"),'LIKE','%'.$search.'%')
                ->orwhere('personal_card_id','LIKE','%'.$search.'%')
                ->orwhere('supplier_type','LIKE','%'.$search.'%')
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
		->editColumn('is_active',function($data){
            if($data->is_active == '0'){
                return '<div class="approvel ap-no"><p>ระงับการใช้งาน</p></div>';
            }else if($data->is_active == '1'){
                return '<div class="approvel ap-success"><p> <i class="fa fa-check-circle"></i> ใช้งาน</p></div>';
            }else{
                return '';
            }
		})
        ->addColumn('usertype',function($data){
			return 'ผู้ขาย';
		})
		->addColumn('switchstatus',function($data){
			return '<div class="form-check form-switch" onclick="switchsfn('."'".$data->supplierid."'".')"><input class="form-check-input" type="checkbox"
                id="flexSwitch'.$data->supplierid.'" '.(($data->is_active == '1')?'checked':'').'></div>';
		})
		->addColumn('btnaction',function($data){
			return '<div class="bux-bb-but"><a class="btn btn-table-edit" href="'.url('backend/manage/supplier/individual/profile').'/'.$data->id.'"><i class="fas fa-pencil-alt"></i> </a></div>';
		});
		return $sQuery->escapeColumns([])->make(true);
    }

    public function individualprofile($id){
        $user = UserSupplier::find($id);
        $supplier = Supplier::where('user_id',$id)->first();
        $store = Store::where('supplier_id',$id)->first();
        $store->addressfull = $store->address.' ตำบล/แขวง '.$store->District->name_th.' อำเภอ/เขต '.$store->Amphure->name_th.' จังหวัด '.$store->Province->name_th.' '.$store->District->zip_code;
        
        $supplier->addressidcard = $supplier->address.' ตำบล/แขวง '.$supplier->District->name_th.' อำเภอ/เขต '.$supplier->Amphure->name_th.' จังหวัด '.$supplier->Province->name_th.' '.$supplier->District->zip_code;
        $banks = Supplier::where('user_id',$id)->get();
        return view('backend.managesupplier.individual.profile.index',['id'=>$id,'user'=>$user,'supplier'=>$supplier,'store'=>$store,'banks'=>$banks]);
    }

    public function individualprofileedit($id){
        return view('backend.managesupplier.individual.profile.update',['id'=>$id]);
    }

    public function individualprofileupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managesupplier.individual.update',['id'=>$id]);
    }

    public function individualprofileaddressedit($id){
        return view('backend.managesupplier.individual.profile.update_address',['id'=>$id]);
    }

    public function individualprofileaddressupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managesupplier.individual.update',['id'=>$id]);
    }

    public function individualprofilestoreedit($id){
        return view('backend.managesupplier.individual.profile.update_store',['id'=>$id]);
    }

    public function individualprofilestoreupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managesupplier.individual.update',['id'=>$id]);
    }

    public function individualhistoryparts($id){
        return view('backend.managesupplier.individual.historyparts.index',['id'=>$id]);
    }

    public function individualpendinglist($id){
        return view('backend.managesupplier.individual.pendinglist.index',['id'=>$id]);
    }

    public function individualhistorysales($id){
        return view('backend.managesupplier.individual.historysales.index',['id'=>$id]);
    }

    public function individualclaimlist($id){
        return view('backend.managesupplier.individual.claimlist.index',['id'=>$id]);
    }

    public function individualproductlist($id){
        return view('backend.managesupplier.individual.productlist.index',['id'=>$id]);
    }

    public function legalindex(){
        return view('backend.managesupplier.legal.index');
    }

    public function legaldatatables(){
        $data = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->leftjoin('stores','user_suppliers.id','stores.supplier_id')->where('suppliers.supplier_type','corporate')->select(DB::raw("store_name,concat(suppliers.personal_first_name,' ', suppliers.personal_last_name) as supplir_name,if(suppliers.supplier_type = 'personal', suppliers.personal_card_id, suppliers.vat_registration_number) as card_id,comment,code,user_suppliers.updated_at,supplier_type,suppliers.is_active,user_suppliers.id,user_suppliers.created_at,approve_at,suppliers.id as supplierid"));
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if($search != ''){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere(DB::raw("concat(suppliers.personal_first_name,' ', suppliers.personal_last_name)"),'LIKE','%'.$search.'%')
                ->orwhere('card_id','LIKE','%'.$search.'%')
                ->orwhere('vat_registration_number','LIKE','%'.$search.'%')
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
		->editColumn('is_active',function($data){
            if($data->is_active == '0'){
                return '<div class="approvel ap-no"><p>ระงับการใช้งาน</p></div>';
            }else if($data->is_active == '1'){
                return '<div class="approvel ap-success"><p> <i class="fa fa-check-circle"></i> ใช้งาน</p></div>';
            }else{
                return '';
            }
		})
        ->addColumn('usertype',function($data){
			return 'ผู้ขาย';
		})
		->addColumn('switchstatus',function($data){
			return '<div class="form-check form-switch" onclick="switchsfn('."'".$data->supplierid."'".')"><input class="form-check-input" type="checkbox"
                id="flexSwitch'.$data->supplierid.'" '.(($data->is_active == '1')?'checked':'').'></div>';
		})
		->addColumn('btnaction',function($data){
			return '<div class="bux-bb-but"><a class="btn btn-table-edit" href="'.url('backend/manage/supplier/legal/profile').'/'.$data->id.'"><i class="fas fa-pencil-alt"></i> </a></div>';
		});
		return $sQuery->escapeColumns([])->make(true);
    }

    public function legalprofile ($id){
        $user = UserSupplier::find($id);
        $supplier = Supplier::where('user_id',$id)->first();
        // $store = Store::where('supplier_id',$id)->first();
        // $store->addressfull = $store->address.' ตำบล/แขวง '.$store->District->name_th.' อำเภอ/เขต '.$store->Amphure->name_th.' จังหวัด '.$store->Province->name_th.' '.$store->District->zip_code;
        
        $supplier->addressidcard = $supplier->address.' ตำบล/แขวง '.$supplier->District->name_th.' อำเภอ/เขต '.$supplier->Amphure->name_th.' จังหวัด '.$supplier->Province->name_th.' '.$supplier->District->zip_code;
        $banks = Supplier::where('user_id',$id)->get();
        return view('backend.managesupplier.legal.profile.index',['id'=>$id,'user'=>$user,'supplier'=>$supplier,'banks'=>$banks]);
    }

    public function legalprofileedit($id){
        return view('backend.managesupplier.legal.profile.update',['id'=>$id]);
    }

    public function legalprofileupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managesupplier.legal.update',['id'=>$id]);
    }

    public function legalprofileaddressedit($id){
        return view('backend.managesupplier.legal.profile.update_address',['id'=>$id]);
    }

    public function legalprofileaddressupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managesupplier.legal.update',['id'=>$id]);
    }

    public function legalprofilestoreedit($id){
        return view('backend.managesupplier.legal.profile.update_store',['id'=>$id]);
    }

    public function legalprofilestoreupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managesupplier.legal.update',['id'=>$id]);
    }

    public function legalhistoryparts($id){
        return view('backend.managesupplier.legal.historyparts.index',['id'=>$id]);
    }

    public function legalpendinglist($id){
        return view('backend.managesupplier.legal.pendinglist.index',['id'=>$id]);
    }

    public function legalhistorysales($id){
        return view('backend.managesupplier.legal.historysales.index',['id'=>$id]);
    }

    public function legalclaimlist($id){
        return view('backend.managesupplier.legal.claimlist.index',['id'=>$id]);
    }

    public function legalproductlist($id){
        return view('backend.managesupplier.legal.productlist.index',['id'=>$id]);
    }

    public function commissionindex(){
        return view('backend.managesupplier.commission.index');
    }

    public function changestatus(Request $request){
        $update = Supplier::find($request->id);
        $update->is_active = $request->status;
        $update->save();
        if($request->status == "0"){
            $user = UserSupplier::find($update->user_id);
            $sms = smstext('บัญชีร้านค้าของท่าน ถูกระงับการใช้งาน กรุณาติดต่อ โทร.02-136-5255 หรือ 061-423-9585',$user->phone);
            if($sms['code'] == '000'){
                return "Y";
            }else{
                return "X";
            }
        }
        return '';
        
    }
}
