<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Brandmodel;
use App\Models\Brandmodels;
use App\Models\Brandyear;
use Response;
use Datatables;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    public function index(){
        $brand = Brand::all();
        // $brandmodel = Brandmodel::all();
        // $brandmodels = Brandmodels::all();
        // $brandyear = Brandyear::all();
        $databrandmodal = [];
        // foreach($brandmodel as $item){
        //     $databrandmodal[$item->model_brandid][] = $item;
        // }
        $databrandmodelsubs = [];
        // foreach($brandmodels as $item){
        //     $databrandmodelsubs[$item->models_modelid][] = $item;
        // }
        $databrandyear = [];
        // foreach($brandyear as $item){
        //     $databrandyear[$item->year_modelid][] = $item;
        // }

        // ->paginate(4)
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.brand.index',['brands'=>$brand,'brandmodel'=>$databrandmodal,'brandmodelsub'=>$databrandmodelsubs,'brandyear'=>$databrandyear]);
    }

    public function update(Request $request){
        // dd($request->all());
        $brand = Brand::find($request->brandid);
        $brand->brand_name_th = $request->editbrand;
        // $brand->brand_name_en = $request->editnameen;
        $brand->updated_for = Auth::user()->name;
        $brand->save();
        return redirect()->round('backend.brand');
    }

    public function updatemodel(Request $request){
        // dd($request->all());
        $brandsub = Brandmodel::find($request->modelid);
        $brandsub->name_th = $request->editmodel;
        // $brandsub->model_name_en = $request->editbrandsubth;
        $brandsub->created_for = Auth::user()->name;
        $brandsub->save();
        return redirect()->round('backend.brand');
    }

    public function updatemodelsub(Request $request){
        // dd($request->all());
        $brandsubs = Brandmodels::find($request->modelsubid);
        $brandsubs->name_th = $request->editmodelsub;
        // $brandsubs->models_name_en = $request->editbrandsubth;
        $brandsubs->updated_for = Auth::user()->name;
        $brandsubs->save();
        return redirect()->round('backend.brand');

    }
    
    public function updateyear(Request $request){
        // dd($request->all());
        $brandsubs = Brandyear::find($request->yearid);
        $brandsubs->from_year = $request->edityear;
        // $brandsubs->year_year_to = $request->editbrandsubth;
        $brandsubs->updated_for = Auth::user()->name;
        $brandsubs->save();
        return redirect()->round('backend.brand');

    }

    public function getbrandmodel(Request $request){
        $data = Brandmodel::where('brand_id',$request->id)->get();
        $result = [];
        foreach($data as $value){
            $result[] = '<li class="nav-item edit-items-product">
                <div class="nav-link brandmodels brandmodel'.$value->id.'" data-id="'.$value->id.'" data-bs-toggle="pill" href="#brandmodel'.$value->id.'">
                    <div id="box1" class="brandmodel_'.$value->id.'">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="mb-2">'.$value->name_th.'<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement('.$value->id.')"><i class="fas fa-pencil-alt"></i></span></p>
                            </div>
                            <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                            <span id="delete-brand"><i class="fas fa-trash"></i></span>

                        </div>
                    </div>
                    <div id="box2">
                        <form method="POST" action="'. route('backend.brandmodel.update') .'" enctype="multipart/form-data"  id="formupdatebrandmodel'.$value->id.'">
                            <input type="hidden" name="_token" value="'.csrf_token().'">
                            <input type="hidden" name="modelid" value="'.$value->id.'">
                            <div class="row">
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" class="form-control mb-2" id="editmodel" name="editmodel" placeholder="รุ่น" value="'.$value->name_th.'" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 d-flex align-items-center">
                                    <button type="submit" class="btn btn__app btn__waitapproval px-4"  onclick="saveElement('."'formupdatebrandmodel".$value->id."'".')">บันทึก</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </li>';
        }
        return Response::json($result);

    }

    public function getbrandmodelsub(Request $request){
        $data = Brandmodels::where('model_id',$request->id)->get();
        $result = [];
        foreach($data as $value){
            $result[] ='<li class="nav-item edit-items-product">
            <div class="nav-link brandmodelsubs brandmodelsub'.$value->id.'" data-id="'.$value->id.'" data-bs-toggle="pill" href="#brandmodelsub'.$value->id.'">
                <div id="box1" class="brandmodelsub_'.$value->id.'">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="mb-2">'.$value->name_th.'<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement('.$value->id.')"><i class="fas fa-pencil-alt"></i></span></p>
                        </div>
                        <span id="next-brand"><i class="fas fa-angle-right"></i></span>
                        <span id="delete-brand"><i class="fas fa-trash"></i></span>

                    </div>
                </div>
                <div id="box2">
                    <form method="POST" action="'. route('backend.brandmodelsub.update') .'" enctype="multipart/form-data" id="formupdatebrandmodelsub'.$value->id.'">
                        <input type="hidden" name="_token" value="'.csrf_token().'">
                        <input type="hidden" name="modelsubid" value="'.$value->id.'">
                        <div class="row">
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control mb-2" id="editmodelsub" name="editmodelsub" placeholder="รุ่น" value="'.$value->name_th.'" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-flex align-items-center">
                                <button type="submit" class="btn btn__app btn__waitapproval px-4"  onclick="saveElement('."'formupdatebrandmodelsub".$value->id."'".')">บันทึก</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </li>';
        }
        return Response::json($result);

    }

    public function getbrandmodelyear(Request $request){
        $data = Brandyear::where('sub_model_id',$request->id)->get();
        $result = [];
        foreach($data as $value){
            $result[] ='<li class="edit-items-product2">
            <div class="nav-link brandyears brandyear'.$value->id.'"  data-id="'.$value->id.'" data-bs-toggle="pill" >
                <div id="box1" class="brandyear_'.$value->id.'">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="mb-2">'.$value->from_year.'<span class="btn-shot ms-1" id="edit-brand" onclick="changeElement('.$value->id.')"><i class="fas fa-pencil-alt"></i></span></p>
                        </div>
                        <span id="delete-brand"><i class="fas fa-trash"></i></span>

                    </div>
                </div>
                <div id="box2" style="display:none;">
                    <form method="POST" action="'. route('backend.brandyear.update') .'" enctype="multipart/form-data"  id="formupdatebrandyear'.$value->id.'">
                        <input type="hidden" name="_token" value="'.csrf_token().'">
                        <input type="hidden" name="yearid" value="'.$value->id.'">
                        <div class="row">
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control mb-2" id="edityear" placeholder="ปี" value="'.$value->from_year.'" name="edityear">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-flex align-items-center">
                                <button type="submit" class="btn btn__app btn__waitapproval px-4"  onclick="saveElement('."'formupdatebrandyear".$value->id."'".')">บันทึก</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </li>';
        }
        return Response::json($result);

    }

    public function show(){
        return view('backend.brand.settingmanufac');
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

    public function changeactive(Request $request){
        try {
            $brand = Brand::find($request->id);
            $brand->is_active = $request->status;
            $brand->updated_by = Auth::user()->name;
            $brand->save();
            $json['status'] = 'success';
            $json['msg'] = 'บันทึกเรียบร้อย';
            if($request->status == 1){
                $json['statustext'] = '<small class="status-success"><i class="fas fa-check-circle"></i> ใช้งาน</small>';
            }else{
                $json['statustext'] = '<small class="status-suspended">ระงับการใช้งาน</small>';
            }
            
            return Response::json($json);
        } catch (\Illuminate\Database\QueryException $e) {
            $json['status'] = 'error';
            $json['msg'] = 'เกิดข้อผิดพลาด';
            $json['statustext'] = '';
            return Response::json($json);
        }
        
    }
}
