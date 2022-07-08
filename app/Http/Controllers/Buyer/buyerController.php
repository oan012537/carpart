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
use App\Models\Buyer\mUsers_buyer;

use App\Models\Brand;
use App\Models\BrandModel;
use App\Models\SubModel;
use App\Models\IssueYear;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;

class BuyerController extends Controller
{
    public function login_buyer()
    {
        return view('buyer.login-buy');
    }
 
    public function login_buyer_post(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if (Auth::guard('buyer')->attempt(['profile_name' => $username, 'password' => $password]) )
        {
            return redirect('buyer/home-search');
        }
        elseif (Auth::guard('buyer')->attempt(['email' => $username, 'password' => $password]) )
        {
            return redirect('buyer/home-search');
        }else{

            // dd("username หรือ password ผิด");
            return redirect('backend\login')->with(['error' => 'ชื่อผู้ใช้งาน หรือรหัสผ่านผิด !']);
        }
    }

    public function logout_buyer()
    {
        if (!Auth::guard('buyer')->logout()) {
            return redirect('/');
        }
    }

    //Register

    public function regis()
    {
        return view('buyer.register.regis');
    }

    public function regis_post(Request $request){
        // dd($request);
            Session::put([
                'necessary_cookies' => $request->necessary_cookies,
                'acept_reject' => $request->acept_reject,
                'analytic_cookies' => $request->analytic_cookies,
                'function_cookies' => $request->function_cookies,
                'targeting_cookies' => $request->targeting_cookies,
            ]);
        return view('buyer.register.regis-buy');
    }

    public function regis_buyer()
    {
        return view('buyer.register.regis-buy');
    }

    public function regis_buyer_post(Request $request)
    {
        if($request->type == 'normal'){
            Session::put([
                'type' => $request->type,
                'profile_name' => $request->profile_name,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
            ]);
        }else{
            Session::put([
                'type' => $request->type,
                'profile_name' => $request->profile_name_2,
                'first_name' => $request->first_name_2,
                'last_name' => $request->last_name_2,
                'company_name' => $request->company_name,
                'vat_id' => $request->vat_id,
            ]);
        }
        return view('buyer.register.regiscon-buy');
    }

    public function regiscon_buyer()
    {
        return view('buyer.register.regiscon-buy');
    }

    public function regiscon_buyer_post(Request $request)
    {
            Session::put([
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
        return view('buyer.register.registerpass-buy');
    }

    public function registerpass_buyer()
    {
        return view('buyer.register.registerpass-buy');
    }

    public function registerpass_buyer_post(Request $request)
    {
        
        if($request->password == $request->confirm_password){

            $data = new mUsers_buyer;
            $data->type = Session::get('type');
            $data->profile_name = Session::get('profile_name');
            $data->first_name = Session::get('first_name');
            $data->last_name = Session::get('last_name');
            $data->company_name = Session::get('company_name');
            $data->vat_id = Session::get('vat_id');
            $data->phone = Session::get('phone');
            $data->email = Session::get('email');
            $data->password  = Hash::make($request->password);

            $data->save();

            Session::flush(); // ลบ Session ทั้งหมด
            // dd('ok');
            // return response()->json(["message"=>"สมัครสมาชิกสำเร็จ","status"=>true,"redirect_location"=>url("backend/dashboard")]);
            return Redirect::back();
        }else{
            dd("ไม่สำเร็จ");
            return view("alert.alert", [
                'url' => '/buyer/registerpass-buy',
                'title' => "เกิดข้อผิดพลาด",
                'text' => "Password ไม่ตรงกัน",
            ]);
        }

    }

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
                        $html .= '<a href="#">';
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
                    $html .= '<a href="#">';
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
        $data['model'] = BrandModel::where('brand_id',$brand)->get();
        $data['brand'] = Brand::where('id',$brand)->get()->first();

        return json_encode($data);
    }

    public function GetsubModel($id){
        $data['submodel'] = SubModel::where('model_id',$id)->get();
        $data['model'] = BrandModel::where('id',$id)->get()->first();

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
            $request->session()->put('search_fail',[
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

}
