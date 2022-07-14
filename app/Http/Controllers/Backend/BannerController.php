<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Banner;
use App\Models\Backend\Bannerimage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use File;
use Nette\Utils\Image;
use Datatables;

class BannerController extends Controller
{
    public function index(){
        return view('backend.banner.index');
    }

    public function datatables(){
        
        $data = Banner::leftjoin('bannerimages','banners.id','bannerimages.banner_id')->select(DB::raw("banners.*,count(*) as countimage"));
        // $search = request('search');
        // $radiodate = request('radiodate');
        // $date = request('date');
        // if($search != ''){
        //     $data->where(function ($query) use ($search){
        //         $query->where('code','LIKE','%'.$search.'%')
        //         ->orwhere('store_name ','LIKE','%'.$search.'%')
        //         ->orwhere('supplir_name','LIKE','%'.$search.'%')
        //         ->orwhere('card_id','LIKE','%'.$search.'%')
        //         ->orwhere('comment','LIKE','%'.$search.'%')
        //         ;
        //     });
        // }
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
        $data->groupBy('id');
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
		->editColumn('is_active',function($data){
            if($data->is_active == '1'){
                return '<small class="status-success"><i class="fa fa-check-circle"></i>กำลังใช้งาน</small>';
            }else if($data->is_active == '0'){
                return '<small class="status-suspended"> <i class="fa fa-times-circle"></i> ไม่ได้ใช้งาน</small>';
            }else{
                return '';
            }
		})
		->addColumn('btnaction',function($data){
			return '<a href="'.url('backend/banner/edit').'/'.$data->id.'" class="btn btn-table-search"><i class="fa fa-minus"></i></a>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function datatablesactive(){
        
        $data = Banner::leftjoin('bannerimages','banners.id','bannerimages.banner_id')->select(DB::raw("banners.*,count(*) as countimage"))->where('banners.is_active','1');
        // $search = request('search');
        // $radiodate = request('radiodate');
        // $date = request('date');
        // if($search != ''){
        //     $data->where(function ($query) use ($search){
        //         $query->where('code','LIKE','%'.$search.'%')
        //         ->orwhere('store_name ','LIKE','%'.$search.'%')
        //         ->orwhere('supplir_name','LIKE','%'.$search.'%')
        //         ->orwhere('card_id','LIKE','%'.$search.'%')
        //         ->orwhere('comment','LIKE','%'.$search.'%')
        //         ;
        //     });
        // }
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
        $data->groupBy('id');
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
		->editColumn('is_active',function($data){
            if($data->is_active == '1'){
                return '<small class="status-success"><i class="fa fa-check-circle"></i>กำลังใช้งาน</small>';
            }
		})
		->addColumn('btnaction',function($data){
			return '<a href="'.url('backend/banner/edit').'/'.$data->id.'" class="btn btn-table-search"><i class="fa fa-minus"></i></a>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function datatablesnotactive(){
        
        $data = Banner::leftjoin('bannerimages','banners.id','bannerimages.banner_id')->select(DB::raw("banners.*,count(*) as countimage"))->where('banners.is_active','0');
        $data->groupBy('id');
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
		->editColumn('is_active',function($data){
            if($data->is_active == '0'){
                return '<small class="status-suspended"> <i class="fa fa-times-circle"></i> ไม่ได้ใช้งาน</small>';
            }
		})
		->addColumn('btnaction',function($data){
			return '<a href="'.url('backend/banner/edit').'/'.$data->id.'" class="btn btn-table-search"><i class="fa fa-minus"></i></a>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function add(){
        return view('backend.banner.add');
    }

    public function store(Request $request){
        // dd($request->all());
        DB::beginTransaction();
        try {
            // DB::transaction();
            $banner = new Banner;
            $banner->name = $request->name;
            $banner->startdate = date('Y-m-d');
            $banner->sort = $request->sort;
            $banner->created_by = Auth::user()->name;
            $banner->updated_by = '';
            // $role->created_at = date("Y-m-d H:i:s");
            // $role->updated_at = date("Y-m-d H:i:s");
            $banner->save();
            if($request->hasFile('upload')){
                foreach($request->file('upload') as $key => $files){
                    // $files = $request->file('myFile');
                    $filename 	= $files->getClientOriginalName();
                    $extension 	= $files->getClientOriginalExtension();
                    $size		= $files->getSize();
                    $imgcover1 	= date('His').$filename;
                    $destinationPath = public_path()."/banners".'/'.$banner->id;
                    // dd($destinationPath);
                    if(!File::exists(public_path().'/banners')){
                        File::makeDirectory(public_path().'/banners');
                    }
                    if(File::exists($destinationPath)){
                        $files->move($destinationPath, $imgcover1);
                    }else{
                        echo '1<br>';
                        if(!File::exists(public_path().'/banners'.'/'.$banner->id)){
                        echo '2<br>';

                            File::makeDirectory(public_path().'/banners'.'/'.$banner->id);
                        }
                        echo '3<br>';
                        
                        // $pathforder = public_path().'/banners'.'/'.$banner->id;
                        
                        // File::makeDirectory($pathforder);
                        // dd($pathforder);
                        $files->move($destinationPath, $imgcover1);
                        $imgcover1 = '/banners'.'/'.$banner->id.'/'.$imgcover1;
                    }

                    $image = new Bannerimage;
                    $image->banner_id = $banner->id;
                    $image->type = '1';
                    $image->image = $imgcover1;
                    $image->created_by = Auth::user()->name;
                    $image->updated_by = '';
                    // dd($image);
                    $image->save();
                }
                
                
            }
            foreach($request->link as $value){
                if($value != ''){
                    $image = new Bannerimage;
                    $image->banner_id = $banner->id;
                    $image->type = '2';
                    $image->image = $value;
                    $image->created_by = Auth::user()->name;
                    $image->updated_by = '';
                    $image->save();
                }
                
            }
            DB::commit();
            return redirect()->route('backend.banner');
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            return redirect()->route('backend.banner.add');
            
        }
        
    }

    public function edit($id){
        $banner = Banner::find($id);
        $images = $banner->images;
        // dd($banner,$images);
        return view('backend.banner.add');
    }
}
