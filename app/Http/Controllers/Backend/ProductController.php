<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use File;
use App\Models\ProductImage;
use App\Models\Warranty;
use App\Models\Brand;
use App\Models\Transportation;
use App\Models\Backend\Deliverys;
use App\Models\Supplier;

class ProductController extends Controller
{
    public function index(){
        // $brand = Brand::all();
        // $category = Category::all();
        // $dataopen = [];
        // $dataclose = [];
        // ->paginate(4)
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.product.index');
        // return view('backend.product.index',['brands'=>$brand,'categorys'=>$category,'dataopen'=>$dataopen,'dataclose'=>$dataclose]);
    }

    public function datatables(){
        
        $data = Product::leftjoin('brands','brands.id','products.brand_id')->leftjoin('models','models.id','products.model_id')->leftjoin('sub_models','sub_models.id','products.sub_model_id')->leftjoin('issue_years','issue_years.id','products.issue_year_id')->leftjoin('categories','categories.id','products.category_id')->leftjoin('sub_categories','sub_categories.id','products.sub_category_id')->leftjoin('sub_sub_categories','sub_sub_categories.id','products.sub_sub_category_id')->leftjoin('product_images','product_images.id','products.id')->select(DB::raw("products.*,brands.name_th as brandname,models.name_th as modelname,sub_models.name_th as sub_modelname,issue_years.from_year as year,categories.name_th as categoryname,sub_categories.name_th as sub_categoryname,sub_sub_categories.name_th as sub_sub_categoryname,product_images.image"));
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
		->editColumn('status_code',function($data){
            if($data->status_code == 'Sold'){
                return '<small class="status-success">?????????????????????</small>';
            }else if($data->status_code == 'Selling'){
                return '<small class="status-process">????????????????????????</small>';
            }else if($data->Cancel == 'Cancel'){
                return '<small class="status-cancle">??????????????????</small>';
            }else if($data->Cancel == 'Suspended'){
                return '<small class="status-suspended">????????????????????????</small>';
            }else{
                return '';
            }
		})
		->addColumn('images',function($data){
            if($data->image){
                if(File::exists(public_path().'/products/images/'.$data->image)){
                    return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('products/images').'/'.$data->image.'" > <img src="'.asset('products/images').'/'.$data->image.'" class="img-product"> </a>';
                }else{
                    return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('product/images/ImageNotFound.png').'" > <img src="'.asset('product/images/ImageNotFound.png').'" class="img-product"> </a>';
                }
                
            }else{
                return '<a class="btn btn__pdf fancybox" data-fancybox href="'.asset('product/images/ImageNotFound.png').'" > <img src="'.asset('product/images/ImageNotFound.png').'" class="img-product"> </a>';
            }
            
		})
        ->addColumn('checkboxs',function($data){
			return '<input type="checkbox" class="form-check-input" id="productall'.$data->id.'" name="productall[]" value="'.$data->id.'">';
		})
        ->addColumn('btnview',function($data){
			// return '<button class="btn btn-table-search"><i class="fas fa-search"></i></button>';
			return '<a class="btn btn-table-search" href="'.url('backend/manageproduct/view').'/'.$data->id.'"><i class="fas fa-search"></i></a>';
		})
		->addColumn('btnaction',function($data){
			return '<a class="btn btn-table-edit" href="'.url('backend/manageproduct/edit').'/'.$data->id.'"><i class="fas fa-pencil-alt"></i></a>';
		});
		return $sQuery->escapeColumns([])->make(true);
	}

    public function edit($id){
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.product.update');
    }

    public function details($id){
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.product.details');
    }

    public function view($id){
        $data = Product::find($id);
        $brand_list_data = Brand::where('is_active', true)->get();
        $product_image = ProductImage::where('product_id', $id)->pluck('image', 'line_item_no');
        $warranty = Warranty::where('product_id', $id)->first();
        $transport = Transportation::where('product_id', $id)->first();
        $transport_type_ids = Transportation::where('product_id', $id)->pluck('transport_type_id', 'id')->toArray();

        $product_qualities = ['Excellent','Good','Fair','Poor','repairable'];
        $day_month_year = ['Day', 'Month', 'Year'];
        $units = ['KG', 'G'];
        $uoms = ['CM', 'M', 'MM'];

        $deliverys = Deliverys::where('is_active', 1)->get();
        $supplier = Supplier::find($data->supplier_id);


        $transport_type_array = array(
            [
                'id' => 1,
                'name' => 'Laramove Thailand',
                'estimate_fee' => 29.00
            ],
            [
                'id' => 2,
                'name' => 'J&T Express',
                'estimate_fee' => 40.00
            ]
        );

        return view('backend.product.view', 
                compact('data', 'brand_list_data', 'product_image',
                    'warranty', 'transport', 'transport_type_array',
                    'product_qualities', 'day_month_year', 'units',
                    'uoms', 'transport_type_ids','deliverys','supplier'));
    }
}
