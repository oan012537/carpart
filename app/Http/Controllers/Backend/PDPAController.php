<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Datatables;
use App\Models\UserSupplier;
use App\Models\Backend\Pdpa;
use Illuminate\Support\Facades\Auth;
use DB;

class PDPAController extends Controller
{
    public function index(){
        return view('backend.pdpa.index');
    }

    public function datatables(){
        
        $data = Pdpa::where('is_active','1');
		$sQuery	= Datatables::of($data)
		->editColumn('created_at',function($data){
			return date('d/m/Y H:i',strtotime($data->created_at));
		})
		->editColumn('is_active',function($data){
            if($data->is_active == '1'){
                return '<small class="status-success"><i class="fas fa-check-circle"></i> กำลังใช้งาน</small>';
            }else if($data->is_active == '0'){
                return '<small class="status-danger"><i class="fas fa-cancel"></i> ยกเลิก</small>';
            }else{
                return '';
            }
		})
		->addColumn('btnaction',function($data){
            $checked = '';
			if($data->is_active == '1'){
                $checked = 'checked';
            }
			return '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="mySwitch'.$data->id.'" name="darkmode" value="yes" '.$checked.' onclick="switchstatus('.$data->id.')"></div>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function datatablesexpired(){
        
        $data = Pdpa::where('is_active','0');
		$sQuery	= Datatables::of($data)
		->editColumn('created_at',function($data){
			return date('d/m/Y H:i',strtotime($data->created_at));
		})
		->editColumn('is_active',function($data){
            if($data->is_active == '1'){
                return '<small class="status-success"><i class="fas fa-check-circle"></i> กำลังใช้งาน</small>';
            }else if($data->is_active == '0'){
                return '<small class="status-danger"><i class="fas fa-cancel"></i> ยกเลิก</small>';
            }else{
                return '';
            }
		})
		->addColumn('btnaction',function($data){
            $checked = '';
			if($data->is_active == '1'){
                $checked = 'checked';
            }
			return '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="mySwitch'.$data->id.'" name="darkmode" value="yes" '.$checked.' onclick="switchstatus('.$data->id.')"></div>';
		});
        return $sQuery->escapeColumns([])->make(true);
	}

    public function store(Request $request){
        // dd($request->all());
        DB::beginTransaction();
        try {
            $request->validate([
                'title' => ['required', 'string', 'max:100'],
            ]);
            $lastcode = Pdpa::latest()->first();
            $code = 1;
            if(!empty($lastcode)){
                if($lastcode->code != ''){
                    $code = $lastcode->code+1;
                }
                
            }
            
            $code = str_pad($code,6,'0',STR_PAD_LEFT );
            $user = Pdpa::create([
                'code' => $code,
                'title' => $request->title,
                'type' => $request->type,
                'grouptypecpn' => $request->grouptypecpn,
                'datestart' => $request->datestart,
                'details' => $request->details,
                'created_by' => Auth::user()->name,
            ]);
            DB::commit();
            return redirect()->route('backend.pdpa');
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return redirect()->route('backend.pdpa');
            
        }

    }

    public function consentlist(){
        return view('backend.pdpa.consentlist');
    }

    public function datatablesconsent(){
        
        $data = UserSupplier::where('supplier_type','personal');
		$sQuery	= Datatables::of($data)
		
		->editColumn('created_at',function($data){
			return date('d/m/Y',strtotime($data->created_at));
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

    public function datatablesconsentexpired(){
        
        $data = UserSupplier::where('supplier_type','personal');
		$sQuery	= Datatables::of($data)
		
		->editColumn('created_at',function($data){
			return date('d/m/Y',strtotime($data->created_at));
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

    public function changestatus(Request $request){
        $update = Pdpa::find($request->id);
        $update->is_active = $request->status;
        $update->save();
    }
}
