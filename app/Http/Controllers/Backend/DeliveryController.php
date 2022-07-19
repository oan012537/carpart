<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Deliverys;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use File;
use Nette\Utils\Image;
use Datatables;

class DeliveryController extends Controller
{
    public function index(){
        return view('backend.delivery.index');
    }

    public function datatables(){
        
        $data = Deliverys::select(DB::raw("*"))->where('grouptypecpn','การจัดส่งที่รองรับโดย CPN');
        $search = request('search');
        // $radiodate = request('radiodate');
        // $date = request('date');
        if($search != ''){
            $data->where(function ($query) use ($search){
                $query->where('name','LIKE','%'.$search.'%')
                ->orwhere('startdate','LIKE','%'.$search.'%')
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
        // $data->groupBy('id');
		$sQuery	= Datatables::of($data)
        ->setRowClass(function ($data) {
            // return 'suppliers'.$data->id;
        })
		->editColumn('updated_at',function($data){
			return date('d/m/Y H:i',strtotime($data->updated_at));
		})
        ->editColumn('created_at',function($data){
			return date('d/m/Y H:i',strtotime($data->created_at));
		})
        ->editColumn('image',function($data){
            if($data->image){
                if(File::exists(public_path().'/delivery/'.$data->image)){
                    return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('delivery').'/'.$data->image.'" > <img src="'.asset('delivery').'/'.$data->image.'" class="img-delivery"> </a>';
                }else{
                    return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('delivery/ImageNotFound.png').'/'.$data->image.'" > <img src="'.asset('delivery/ImageNotFound.png').'" class="img-delivery"> </a>';
                }
                
            }else{
                return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('delivery/ImageNotFound.png').'/'.$data->image.'" > <img src="'.asset('delivery/ImageNotFound.png').'" class="img-delivery"> </a>';
            }
		})
        ->editColumn('timeinbkk',function($data){
            return 'กทม. '.$data->timeinbkk.'/ ตจว. '.$data->timeoutbkk;
		})
        ->editColumn('weight',function($data){
            return $data->weight.''.$data->weightunit;
		})
		->editColumn('is_active',function($data){
            if($data->is_active == '1'){
                return '<small class="status-success"><i class="fa fa-check-circle"></i>กำลังใช้งาน</small>';
            }
		})
		->editColumn('warranty',function($data){
            if($data->warranty == '1'){
                return 'มี';
            }else{
                return '-';
            }
		})
        ->editColumn('switchstatus',function($data){
            $checked = '';
            if($data->is_active == '1'){
                $checked = 'checked';
            }
            return '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked'.$data->id.'" '.$checked.' onclick="switchstatus('.$data->id.')"></div>';
		})
		->addColumn('btnaction',function($data){
			return '<a class="btn btn-table-edit" href="'.url('backend/delivery/edit').'/'.$data->id.'"><i class="fas fa-pencil-alt"></i></a>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function datatableslarge(){
        
        $data = Deliverys::select(DB::raw("*"))->where('grouptypecpn','บริษัทขนส่งเอกชนชิ้นใหญ่');
        $search = request('search');
        // $radiodate = request('radiodate');
        // $date = request('date');
        if($search != ''){
            $data->where(function ($query) use ($search){
                $query->where('name','LIKE','%'.$search.'%')
                ->orwhere('startdate','LIKE','%'.$search.'%')
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
        // $data->groupBy('id');
		$sQuery	= Datatables::of($data)
        ->setRowClass(function ($data) {
            // return 'suppliers'.$data->id;
        })
		->editColumn('updated_at',function($data){
			return date('d/m/Y H:i',strtotime($data->updated_at));
		})
        ->editColumn('created_at',function($data){
			return date('d/m/Y H:i',strtotime($data->created_at));
		})
        ->editColumn('image',function($data){
            if($data->image){
                if(File::exists(public_path().'/delivery/'.$data->image)){
                    return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('delivery').'/'.$data->image.'" > <img src="'.asset('delivery').'/'.$data->image.'" class="img-product"> </a>';
                }else{
                    return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('delivery/ImageNotFound.png').'/'.$data->image.'" > <img src="'.asset('delivery/ImageNotFound.png').'" class="img-product"> </a>';
                }
                
            }else{
                return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('delivery/ImageNotFound.png').'/'.$data->image.'" > <img src="'.asset('delivery/ImageNotFound.png').'" class="img-product"> </a>';
            }
		})
        ->editColumn('timeinbkk',function($data){
            return 'กทม. '.$data->timeinbkk.'/ ตจว. '.$data->timeoutbkk;
		})
        ->editColumn('weight',function($data){
            return $data->weight.''.$data->weightunit;
		})
		->editColumn('is_active',function($data){
            if($data->is_active == '1'){
                return '<small class="status-success"><i class="fa fa-check-circle"></i>กำลังใช้งาน</small>';
            }
		})
		->editColumn('warranty',function($data){
            if($data->warranty == '1'){
                return 'มี';
            }else{
                return '-';
            }
		})
        ->editColumn('switchstatus',function($data){
            $checked = '';
            if($data->is_active == '1'){
                $checked = 'checked';
            }
            return '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked'.$data->id.'" '.$checked.' onclick="switchstatus('.$data->id.')"></div>';
		})
		->addColumn('btnaction',function($data){
			return '<a class="btn btn-table-edit" href="'.url('backend/delivery/edit').'/'.$data->id.'"><i class="fas fa-pencil-alt"></i></a>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function datatablescustomseller(){
        
        $data = Deliverys::select(DB::raw("*"))->where('grouptypecpn','ผู้ขายกำหนดเอง');
        $search = request('search');
        // $radiodate = request('radiodate');
        // $date = request('date');
        if($search != ''){
            $data->where(function ($query) use ($search){
                $query->where('name','LIKE','%'.$search.'%')
                ->orwhere('startdate','LIKE','%'.$search.'%')
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
        // $data->groupBy('id');
		$sQuery	= Datatables::of($data)
        ->setRowClass(function ($data) {
            // return 'suppliers'.$data->id;
        })
		->editColumn('updated_at',function($data){
			return date('d/m/Y H:i',strtotime($data->updated_at));
		})
        ->editColumn('created_at',function($data){
			return date('d/m/Y H:i',strtotime($data->created_at));
		})
        ->editColumn('image',function($data){
            if($data->image){
                if(File::exists(public_path().'/delivery/'.$data->image)){
                    return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('delivery').'/'.$data->image.'" > <img src="'.asset('delivery').'/'.$data->image.'" class="img-product"> </a>';
                }else{
                    return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('delivery/ImageNotFound.png').'/'.$data->image.'" > <img src="'.asset('delivery/ImageNotFound.png').'" class="img-product"> </a>';
                }
                
            }else{
                return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('delivery/ImageNotFound.png').'/'.$data->image.'" > <img src="'.asset('delivery/ImageNotFound.png').'" class="img-product"> </a>';
            }
		})
        ->editColumn('timeinbkk',function($data){
            return 'กทม. '.$data->timeinbkk.'/ ตจว. '.$data->timeoutbkk;
		})
        ->editColumn('weight',function($data){
            return $data->weight.''.$data->weightunit;
		})
		->editColumn('is_active',function($data){
            if($data->is_active == '1'){
                return '<small class="status-success"><i class="fa fa-check-circle"></i>กำลังใช้งาน</small>';
            }
		})
		->editColumn('warranty',function($data){
            if($data->warranty == '1'){
                return 'มี';
            }else{
                return '-';
            }
		})
        ->editColumn('switchstatus',function($data){
            $checked = '';
            if($data->is_active == '1'){
                $checked = 'checked';
            }
            return '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked'.$data->id.'" '.$checked.' onclick="switchstatus('.$data->id.')"></div>';
		})
		->addColumn('btnaction',function($data){
			return '<a class="btn btn-table-edit" href="'.url('backend/delivery/edit').'/'.$data->id.'"><i class="fas fa-pencil-alt"></i></a>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function add(){
        return view('backend.delivery.add');
    }

    public function store(Request $request){
        // dd($request->all());
        DB::beginTransaction();
        try {
            $imgcover1 = '';
            // DB::transaction();
            if($request->hasFile('myFile')){
                $files = $request->file('myFile');
                $filename 	= $files->getClientOriginalName();
                $extension 	= $files->getClientOriginalExtension();
                $size		= $files->getSize();
                $imgcover1 	= date('His').$filename;
                $destinationPath = public_path()."/delivery";
                // dd($destinationPath);
                if(!File::exists(public_path().'/delivery')){
                    File::makeDirectory(public_path().'/delivery');
                }
                if(File::exists($destinationPath)){
                    $files->move($destinationPath, $imgcover1);
                }else{
                    if(!File::exists(public_path().'/delivery')){

                        File::makeDirectory(public_path().'/delivery');
                    }
                    
                    $files->move($destinationPath, $imgcover1);
                    $imgcover1 = '/delivery'.'/'.$imgcover1;
                }
                
            }
            $insers = new Deliverys;
            $insers->name = $request->name;
            $insers->image = $imgcover1;
            $insers->type = $request->type;
            $insers->grouptypecpn = $request->grouptypecpn;
            $insers->timeinbkk = $request->timeinbkk;
            $insers->timeoutbkk = $request->timeoutbkk;
            $insers->weight = $request->weight;
            $insers->weightunit = $request->weightunit;
            $insers->wide = $request->wide;
            $insers->long = $request->long;
            $insers->high = $request->high;
            $insers->unit = $request->unit;
            $insers->warranty = $request->warranty;
            $insers->trackingnumber = $request->trackingnumber;
            $insers->warrantyterms = (!empty($request->warrantyterms)?$request->warrantyterms:'');
            $insers->is_active = 1;
            $insers->created_by = Auth::user()->name;
            $insers->updated_by = '';
            $insers->save();
            DB::commit();
            return redirect()->route('backend.delivery');
        } catch (\Exception $e) {
            DB::rollback();
            if(File::exists($imgcover1)){
                unlink($imgcover1);
            }
            dd($e);
            return redirect()->back();
            
        }
        return view('backend.delivery.add');
    }

    public function edit($id){
        $Deliverys = Deliverys::find($id);
        return view('backend.delivery.update',['delivery'=>$Deliverys]);
    }

    public function update(Request $request){
        // dd($request->all(),$request);
        DB::beginTransaction();
        try {
            // $imgcover1 = '';
            // DB::transaction();
            if($request->hasFile('myFile')){
                $files = $request->file('myFile');
                $filename 	= $files->getClientOriginalName();
                $extension 	= $files->getClientOriginalExtension();
                $size		= $files->getSize();
                $imgcover1 	= date('His').$filename;
                $destinationPath = public_path()."/delivery";
                // dd($destinationPath);
                if(!File::exists(public_path().'/delivery')){
                    File::makeDirectory(public_path().'/delivery');
                }
                if(File::exists($destinationPath)){
                    $files->move($destinationPath, $imgcover1);
                }else{
                    if(!File::exists(public_path().'/delivery')){

                        File::makeDirectory(public_path().'/delivery');
                    }
                    
                    $files->move($destinationPath, $imgcover1);
                    $imgcover1 = '/delivery'.'/'.$imgcover1;
                }
                
            }
            $update = Deliverys::find($request->id);
            $update->name = $request->name;
            if($request->hasFile('myFile')){
                $update->image = $imgcover1;
            }
            $update->type = $request->type;
            $update->grouptypecpn = $request->grouptypecpn;
            $update->timeinbkk = $request->timeinbkk;
            $update->timeoutbkk = $request->timeoutbkk;
            $update->weight = $request->weight;
            $update->weightunit = $request->weightunit;
            $update->wide = $request->wide;
            $update->long = $request->long;
            $update->high = $request->high;
            $update->unit = $request->unit;
            $update->warranty = $request->warranty;
            $update->trackingnumber = $request->trackingnumber;
            $update->warrantyterms = (!empty($request->warrantyterms)?$request->warrantyterms:'');
            $update->is_active = 1;
            $update->created_by = Auth::user()->name;
            $update->updated_by = '';
            $update->save();
            DB::commit();
            return redirect()->route('backend.delivery');
        } catch (\Exception $e) {
            DB::rollback();
            if(File::exists($imgcover1)){
                unlink($imgcover1);
            }
            dd($e);
            return redirect()->back();
            
        }
        return view('backend.delivery.add');
    }



    public function changestatus(Request $request){
        $update = Deliverys::find($request->id);
        $update->is_active = $request->status;
        $update->save();
    }
}
