<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Datatables;
use App\Models\Backend\Role;
use App\Models\User;

class ApprovalRequestLegalController extends Controller
{
    public function index(){
        return view('backend.approvalrequestlegal.index',[]);
    }

    public function datatables(){

		$data = User::all();
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
		->editColumn('status',function($data){
            if($data->status == '1'){
                return '<div class="approvel ap-success"><p>อนุมัติ</p></div>';
            }else if($data->status == '2'){
                return '<div class="approvel ap-wait"><p>รออนุมัติ</p></div>';
            }else if($data->status == '3'){
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
            if($data->status == '2'){
                $btn__approval = 'btn__approval';
                $btn__waitapproval = 'btn__waitapproval';
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

		$data = User::all();
		$sQuery	= Datatables::of($data)
		->editColumn('updated_at',function($data){
			return date('d/m/Y',strtotime($data->updated_at));
		})
		->editColumn('status',function($data){
            if($data->status == '1'){
                return '<div class="approvel ap-success"><p>อนุมัติ</p></div>';
            }else if($data->status == '2'){
                return '<div class="approvel ap-wait"><p>รออนุมัติ</p></div>';
            }else if($data->status == '3'){
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
            if($data->status == '2'){
                $btn__approval = 'btn__approval';
                $btn__waitapproval = 'btn__waitapproval';
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

		$data = User::all();
		$sQuery	= Datatables::of($data)
		->editColumn('updated_at',function($data){
			return date('d/m/Y',strtotime($data->updated_at));
		})
		->editColumn('status',function($data){
            if($data->status == '1'){
                return '<div class="approvel ap-success"><p>อนุมัติ</p></div>';
            }else if($data->status == '2'){
                return '<div class="approvel ap-wait"><p>รออนุมัติ</p></div>';
            }else if($data->status == '3'){
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
            if($data->status == '2'){
                $btn__approval = 'btn__approval';
                $btn__waitapproval = 'btn__waitapproval';
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

    public function getdetails(Request $request){
        return Response::json($request->all());
    }
}
