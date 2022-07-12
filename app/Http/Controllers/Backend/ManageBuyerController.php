<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Datatables;
use App\Models\Buyer\mUsers_buyer;
use App\Models\Supplier;
use App\Models\Store;
use Illuminate\Support\Facades\DB;

class ManageBuyerController extends Controller
{
    public function individualindex(){
        return view('backend.managebuyer.individual.index');
    }

    public function individualdatatables(){
        $data = mUsers_buyer::select(DB::raw("*,concat(first_name,' ', last_name) as name"))->where('type','normal');
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if($search != ''){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere(DB::raw("concat(first_name,' ', last_name)"),'LIKE','%'.$search.'%')
                // ->orwhere('name','LIKE','%'.$search.'%')
                ->orwhere('email','LIKE','%'.$search.'%')
                ->orwhere('phone','LIKE','%'.$search.'%')
                ->orwhere('type','LIKE','%'.$search.'%')
                ->orwhere('comment','LIKE','%'.$search.'%')
                ;
            });
        }
        // if($date!= ''){
        //     $dates = explode(',',$date);
        //     $sdate = $dates[0];
        //     $edate = $dates[1];
        //     if($radiodate == '1'){
        //         $data->whereBetween('user_suppliers.created_at',[$sdate.' 00:00',$edate.' 23:59']);
        //     }else{
        //         $data->whereBetween('suppliers.approve_at',[$sdate.' 00:00',$edate.' 23:59']);
        //     }
        // }
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
			return 'ผู้ซื้อ';
		})
		->addColumn('switchstatus',function($data){
			return '<div class="form-check form-switch" onclick="switchsfn('."'".$data->id."'".')"><input class="form-check-input" type="checkbox"
                id="flexSwitch'.$data->id.'" '.(($data->is_active == '1')?'checked':'').'></div>';
		})
		->addColumn('btnaction',function($data){
			return '<div class="bux-bb-but"><a class="btn btn-table-edit" href="'.url('backend/manage/buyer/individual/profile').'/'.$data->id.'"><i class="fas fa-pencil-alt"></i> </a></div>';
		});
		return $sQuery->escapeColumns([])->make(true);
    }

    public function individualprofile($id){
        $user = mUsers_buyer::find($id);
        return view('backend.managebuyer.individual.profile.index',['id'=>$id,'user'=>$user]);
    }

    public function individualprofileedit($id){
        return view('backend.managebuyer.individual.profile.update',['id'=>$id]);
    }

    public function individualprofileupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managebuyer.individual.update',['id'=>$id]);
    }

    public function individualprofileaddressedit($id){
        return view('backend.managebuyer.individual.profile.update_address',['id'=>$id]);
    }

    public function individualprofileaddressupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managebuyer.individual.update',['id'=>$id]);
    }

    public function individualprofilestoreedit($id){
        return view('backend.managebuyer.individual.profile.update_store',['id'=>$id]);
    }

    public function individualprofilestoreupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managebuyer.individual.update',['id'=>$id]);
    }

    public function individualhistoryparts($id){
        return view('backend.managebuyer.individual.historyparts.index',['id'=>$id]);
    }

    public function individualpendinglist($id){
        return view('backend.managebuyer.individual.pendinglist.index',['id'=>$id]);
    }

    public function individualhistorysales($id){
        return view('backend.managebuyer.individual.historysales.index',['id'=>$id]);
    }

    public function individualclaimlist($id){
        return view('backend.managebuyer.individual.claimlist.index',['id'=>$id]);
    }

    public function individualproductlist($id){
        return view('backend.managebuyer.individual.productlist.index',['id'=>$id]);
    }

    public function legalindex(){
        return view('backend.managebuyer.legal.index');
    }

    public function legaldatatables(){
        $data = mUsers_buyer::select(DB::raw("*,concat(first_name,' ', last_name) as name"))->where('type','niti');
        $search = request('search');
        $radiodate = request('radiodate');
        $date = request('date');
        if($search != ''){
            $data->where(function ($query) use ($search){
                $query->where('code','LIKE','%'.$search.'%')
                ->orwhere(DB::raw("concat(first_name,' ', last_name)"),'LIKE','%'.$search.'%')
                // ->orwhere('name','LIKE','%'.$search.'%')
                ->orwhere('email','LIKE','%'.$search.'%')
                ->orwhere('phone','LIKE','%'.$search.'%')
                ->orwhere('type','LIKE','%'.$search.'%')
                ->orwhere('comment','LIKE','%'.$search.'%')
                ;
            });
        }
        // if($date!= ''){
        //     $dates = explode(',',$date);
        //     $sdate = $dates[0];
        //     $edate = $dates[1];
        //     if($radiodate == '1'){
        //         $data->whereBetween('user_suppliers.created_at',[$sdate.' 00:00',$edate.' 23:59']);
        //     }else{
        //         $data->whereBetween('suppliers.approve_at',[$sdate.' 00:00',$edate.' 23:59']);
        //     }
        // }
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
			return 'ผู้ซื้อ';
		})
        ->addColumn('approve_at',function($data){
			return '';
		})
		->addColumn('switchstatus',function($data){
			return '<div class="form-check form-switch" onclick="switchsfn('."'".$data->id."'".')"><input class="form-check-input" type="checkbox"
                id="flexSwitch'.$data->id.'" '.(($data->is_active == '1')?'checked':'').'></div>';
		})
		->addColumn('btnaction',function($data){
			return '<div class="bux-bb-but"><a class="btn btn-table-edit" href="'.url('backend/manage/buyer/legal/profile').'/'.$data->id.'"><i class="fas fa-pencil-alt"></i> </a></div>';
		});
		return $sQuery->escapeColumns([])->make(true);
    }
    
    public function legalprofile ($id){
        $user = mUsers_buyer::find($id);
        return view('backend.managebuyer.legal.profile.index',['id'=>$id,'user'=>$user]);
    }

    public function legalprofileedit($id){
        return view('backend.managebuyer.legal.profile.update',['id'=>$id]);
    }

    public function legalprofileupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managebuyer.legal.update',['id'=>$id]);
    }

    public function legalprofileaddressedit($id){
        return view('backend.managebuyer.legal.profile.update_address',['id'=>$id]);
    }

    public function legalprofileaddressupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managebuyer.legal.update',['id'=>$id]);
    }

    public function legalprofilestoreedit($id){
        return view('backend.managebuyer.legal.profile.update_store',['id'=>$id]);
    }

    public function legalprofilestoreupdate(Request $request,$id){
        dd($request->all());
        return view('backend.managebuyer.legal.update',['id'=>$id]);
    }

    public function legalhistoryparts($id){
        return view('backend.managebuyer.legal.historyparts.index',['id'=>$id]);
    }

    public function legalpendinglist($id){
        return view('backend.managebuyer.legal.pendinglist.index',['id'=>$id]);
    }

    public function legalhistorysales($id){
        return view('backend.managebuyer.legal.historysales.index',['id'=>$id]);
    }

    public function legalclaimlist($id){
        return view('backend.managebuyer.legal.claimlist.index',['id'=>$id]);
    }

    public function legalproductlist($id){
        return view('backend.managebuyer.legal.productlist.index',['id'=>$id]);
    }

    public function commissionindex(){
        return view('backend.managebuyer.commission.index');
    }

    public function changestatus(Request $request){
        $update = mUsers_buyer::find($request->id);
        $update->is_active = $request->status;
        $update->save();
    }
}
