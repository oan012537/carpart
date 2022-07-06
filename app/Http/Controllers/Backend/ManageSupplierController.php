<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Datatables;

class ManageSupplierController extends Controller
{
    public function individualindex(){
        return view('backend.managesupplier.individual.index');
    }

    public function individualdatatables(){
        $data = users_supplier::where('type','บุคคลธรรมดา');
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
			return '<a href="javascript:void(0)" class="btn btn__viewdetail" data-bs-toggle="modal" data-bs-target="#modalviewdetailapp"  onclick="viewdetail('.$data->id.')">ดูรายละเอียด</a>';
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

    public function individualprofile($id){
        return view('backend.managesupplier.individual.profile.index',['id'=>$id]);
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

    public function legalprofile ($id){
        return view('backend.managesupplier.legal.profile.index',['id'=>$id]);
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
}
