<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use Helper;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Buyer\mUsers_buyer;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductModel;
use App\Models\SubModel;
use App\Models\IssueYear;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Response;

class SearchProductController extends Controller
{
    public function home_search()
    {
        // $data['brands'] = DB::table('brands')->get();
        return view('buyer.homesearch.home-search',[
            'brands_select' => Brand::get(),
            'category' => Category::get(),
        ]);
    }

    public function filterBrands($text)
    {
        $search_brands = Brand::where('name_en', 'like', $text . '%')->get();
        foreach($search_brands as $sb){
            $brands_id[] = $sb->id;
        }
        // dd($brands);
        $count_brands = count($search_brands);
        $checkcolumn = ceil($count_brands/5); //ไม่เอาเศษ ปัดเศษขึ้น
        $checkcount = $count_brands%5; //ค่าที่เกิน
        // dd($checkcount);

        $html = '<div class="brands-all">';
        for($i=0;$i<$checkcolumn;$i++){
            if($i==0){
                $store_id[] = '';
            }
            $brands = Brand::whereIn('id',$brands_id)->whereNotIn('id',$store_id)->limit(5)->get();
            $html .= '<div class="row">';
            if($i == $checkcolumn-1){
                if(!empty($checkcount)){
                    $check = 5 - $checkcount;
                    foreach($brands as $brand){
                        $html .= '<div class="col-sm">';
                        $html .= '<a onclick="selectBrands('.$brand->id.')">';
                        $html .= '<div class="row">';
                        $html .= '<div class="col-lg-5">';
                        $html .= '<img src="'.$brand->image.'" class="img-fluid img-circleimg" alt="shoe image">';
                        $html .= '</div>';
                        $html .= '<div class="col-lg-7">';
                        $html .= '<div class="text-detail-roon">';
                        $html .= '<p>'.$brand->name_en.'</p>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</a>';
                        $html .= '</div>';
                    }
                    for($x=0;$x<$check;$x++){
                        $html .= '<div class="col-sm"></div>';
                    }
                }
            }else{
                foreach($brands as $brand){
                    $store_id[] = $brand->id;
                    $html .= '<div class="col-sm">';
                    $html .= '<a onclick="selectBrands('.$brand->id.')">';
                    $html .= '<div class="row">';
                    $html .= '<div class="col-lg-5">';
                    $html .= '<img src="'.$brand->image.'" class="img-fluid img-circleimg" alt="shoe image">';
                    $html .= '</div>';
                    $html .= '<div class="col-lg-7">';
                    $html .= '<div class="text-detail-roon">';
                    $html .= '<p>'.$brand->name_en.'</p>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</a>';
                    $html .= '</div>';
                }
            }
            $html .= '</div>';
            $html .= '</br>';
        }
        $html .= '</div>';

        // dd($html);
        return json_encode($html);
    }

    public function searchBrands($text)
    {
        $search_brands = Brand::where('name_en', 'like', '%'. $text . '%')->get();
        foreach($search_brands as $sb){
            $brands_id[] = $sb->id;
        }
        // dd($brands);
        $count_brands = count($search_brands);
        $checkcolumn = ceil($count_brands/5); //ไม่เอาเศษ ปัดเศษขึ้น
        $checkcount = $count_brands%5; //ค่าที่เกิน
        // dd($checkcount);

        $html = '<div class="brands-all">';
        for($i=0;$i<$checkcolumn;$i++){
            if($i==0){
                $store_id[] = '';
            }
            $brands = Brand::whereIn('id',$brands_id)->whereNotIn('id',$store_id)->limit(5)->get();
            $html .= '<div class="row">';
            if($i == $checkcolumn-1){
                if(!empty($checkcount)){
                    $check = 5 - $checkcount;
                    foreach($brands as $brand){
                        $html .= '<div class="col-sm">';
                        $html .= '<a onclick="selectBrands('.$brand->id.')">';
                        $html .= '<div class="row">';
                        $html .= '<div class="col-lg-5">';
                        $html .= '<img src="'.$brand->image.'" class="img-fluid img-circleimg" alt="shoe image">';
                        $html .= '</div>';
                        $html .= '<div class="col-lg-7">';
                        $html .= '<div class="text-detail-roon">';
                        $html .= '<p>'.$brand->name_en.'</p>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</a>';
                        $html .= '</div>';
                    }
                    for($x=0;$x<$check;$x++){
                        $html .= '<div class="col-sm"></div>';
                    }
                }
            }else{
                foreach($brands as $brand){
                    $store_id[] = $brand->id;
                    $html .= '<div class="col-sm">';
                    $html .= '<a onclick="selectBrands('.$brand->id.')">';
                    $html .= '<div class="row">';
                    $html .= '<div class="col-lg-5">';
                    $html .= '<img src="'.$brand->image.'" class="img-fluid img-circleimg" alt="shoe image">';
                    $html .= '</div>';
                    $html .= '<div class="col-lg-7">';
                    $html .= '<div class="text-detail-roon">';
                    $html .= '<p>'.$brand->name_en.'</p>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</a>';
                    $html .= '</div>';
                }
            }
            $html .= '</div>';
            $html .= '</br>';
        }
        $html .= '</div>';

        // dd($html);
        return json_encode($html);
    }

    public function GetModel($brand){
        $data['model'] = ProductModel::where('brand_id',$brand)->get();
        $data['brand'] = Brand::where('id',$brand)->get()->first();

        return json_encode($data);
    }

    public function GetsubModel($id){
        $data['submodel'] = SubModel::where('model_id',$id)->get();
        $data['model'] = ProductModel::where('id',$id)->get()->first();

        return json_encode($data);
    }

    public function GetYear($id){
        $data['year'] = IssueYear::where('sub_model_id',$id)->get();
        $data['submodel'] = SubModel::where('id',$id)->get()->first();

        return json_encode($data);
    }

    public function GetYearID($id){
        $data['year'] = IssueYear::where('id',$id)->get()->first();

        return json_encode($data);
    }

    public function GetsubCategory($id){
        $data['subcategory'] = SubCategory::where('category_id',$id)->get();

        return json_encode($data);
    }

    public function GetSubsubCategory($id){
        // dd($id);
        $data['subsubcategory'] = SubSubCategory::where('sub_category_id',$id)->get();
        // dd($data['subsubcategory']);

        return json_encode($data);
    }

    
    public function search_product(Request $request){
        if(!empty($request->test)){
            //
            return view('buyer.homesearch.home-search',[
                'brands_select' => Brand::get(),
                'category' => Category::get(),
            ]);
        }else{
            $request->session()->put('session_search',[
                'brand' => $request->brand,
                'model' => $request->model,
                'submodel' => $request->submodel,
                'year' => $request->year,
                'category' => $request->category,
                'subcategory' => $request->subcategory,
                'subsubcategory' => $request->subsubcategory,
                'condition' => $request->condition,
                'minprice' => $request->minprice,
                'maxprice' => $request->maxprice
            ]);

            // dd(session('search_fail'));

            return redirect()->route('buyer.requestspares');
        }
    }

    /*public function Getsearch(Request $request){
        if(!empty($request->brand)){
            $request->session()->put('search-brand',$request->brand);
        }
        if(!empty($request->model)){
            // dd($request->model);
            $request->session()->put('search-model',$request->model);
        }
    }*/

    public function searchBox(Request $request){
        // dd('ok');
        if(!empty($request->model)){
            // dd($request);
            $models = ProductModel::where('brand_id',$request->brand)->where('name_en', 'like','%'. $request->model. '%')->get();

            $html = '<div class="search-box-model row">';
            foreach($models as $model){
                $html .= '<div class="col-sm-3">
                            <a onclick="selectModel('.$model->id.')">
                            <div class="row">
                                <div class="col-lg-5">
                                </div>
                                <div class="col-lg-7">
                                    <div class="text-detail-roon">
                                        <p>
                                            '.$model->name_en.'
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>';
            }
            $html .= '</div>';

            return json_encode($html);
        }
    }

    public function home_search_brand(Request $request){
        // dd($request);
        $request->session()->put('session_search',[
            'brand' => $request->brand,
        ]);

        $products = Product::orderby('updated_at','asc')->where('brand_id',$request->brand)->limit(9)->get();
        
        return view('buyer.homesearch.home-search2',[
            'brands_select' => Brand::get(),
            'category' => Category::get(),
            'models' => ProductModel::where('brand_id',$request->brand)->get(),
            'products' => $products,
        ]);
    }

    public function home_search_model(Request $request){
        $request->session()->put('session_search',[
            'brand' => $request->brand,
            'model' => $request->model,
        ]);

        $products = Product::orderby('updated_at','asc')
        ->where('brand_id',$request->brand)
        ->where('model_id',$request->model)->limit(9)->get();
        
        return view('buyer.homesearch.home-search3',[
            'brands_select' => Brand::get(),
            'category' => Category::get(),
            'products' => $products,
            'submodels' => SubModel::where('model_id',$request->model)->get(),
        ]);
    }

}
