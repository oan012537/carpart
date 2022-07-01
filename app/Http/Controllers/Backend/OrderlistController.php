<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Datatables;
use App\Models\Brand;

class OrderlistController extends Controller
{
    public function index()
    {
        $data = Brand::paginate(20);
        return view('backend.orderlist.index',['data'=>$data]);
    }

    public function datatables(){

		$data = Brand::all();
		$sQuery	= Datatables::of($data)
		->editColumn('updated_at',function($data){
			return date('d/m/Y',strtotime($data->updated_at));
		})
		->editColumn('is_active',function($data){
            if($data->is_active == '1'){
                return '<small class="status-success"><i class="fas fa-check-circle"></i> ใช้งาน</small>';
            }else{
                return '<small class="status-suspended">ระงับการใช้งาน</small>';
            }
		})
		->addColumn('changestatus',function($data){
            $status = '';
            if($data->is_active == '1'){
                $status = 'checked';
            }
			return '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="mySwitch'.$data->id.'" name="darkmode" value="1" '.$status.' onclick="changestatus('."'".$data->id."'".')"></div>';
		})
        ->setRowClass(function ($data) {
            return 'showtext'.$data->id;
        })
		->addColumn('btnaction',function($data){
            
			return '<a class="btn btn-table-edit" href="'.route('backend.brand.edit').'"><i class="fas fa-pencil-alt"></i></a>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}
}
