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
use App\Models\ProductModel;
use App\Models\SubModel;
use App\Models\IssueYear;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Product;
use Response;

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

        if (Auth::guard('buyer')->attempt(['phone' => $username, 'password' => $password]) )
        {
            return redirect('buyer/home-search');
            // return view('buyer.login.phone'); //-- OAT คอมเม้นต์ใช้ตัวบน
        }
        else if(Auth::guard('buyer')->attempt(['email' => $username, 'password' => $password]) )
        {
            return redirect('buyer/home-search');
            // return view('buyer.login.phone'); //-- OAT คอมเม้นต์ใช้ตัวบน
        }else{

            // dd("username หรือ password ผิด");
            return back()->with('message','Invaild Email Or Password');
            // return redirect('backend\login')->with(['error' => 'ชื่อผู้ใช้งาน หรือรหัสผ่านผิด !']);
        }
    }
    public function loginphone(Request $request)
    {
        $tokens = $this->gettokenotp($request->phone); //-- OAT คอมเม้นต์ ถ้าใช้งาจริงให้เปิด และลบ $tokens = ""; ออก
        // $tokens = "";
        return view('buyer.login.otp',['tokens'=>$tokens,'phone'=>$request->phone]);
    }
    public function logingettoken(Request $request){
        $tokens = $this->gettokenotp($request->phone); //-- OAT คอมเม้นต์ ถ้าใช้งาจริงให้เปิด และลบ $tokens = ""; ออก
        // $tokens = "";
        return $tokens;
    }

    public function loginsuccess(Request $request){
        return redirect('buyer/home-search');
    }
    public function loginconfirmotp(Request $request)
    {
        //-- OAT คอมเม้นต์เพื่อทดสอบ ข้ามการส่ง OTP ใช้งานจริง ให้ลบ return true; และเอาคอมเม้นต์ด้านล่างออก
        // return true;

        // dd($request->all());
        $otpcode = $request->otp1.$request->otp2.$request->otp3.$request->otp4.$request->otp5.$request->otp6;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://portal-otp.smsmkt.com/api/otp-validate',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "api_key:a8c6eba12ba2326f25fe706b94293fe0",
                "secret_key:SCFmYT1IgPXJT4nr",
            ),
            CURLOPT_POSTFIELDS =>json_encode(array(
            "token"=>$request->tokenotp,
            "otp_code"=>$otpcode,
            )),
        ));
        $response = curl_exec($curl);
        $info = curl_getinfo($curl);
        curl_close($curl);
        // echo $response;
        $response = json_decode($response,true);
        // if($info["http_code"] == '200'){
        //     return redirect('buyer/home-search');
        // }
        // return Response::json($response); 
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
        // return view('buyer.register.regis-buy');
        return view('buyer.register.confirmphone');
    }

    public function registerphone()
    {
        Session::forget('phone');
        return view('buyer.register.confirmphone');
    }

    public function confirmphone(Request $request)
    {
        Session::put([
            'phone' => $request->phone,
        ]);
        // $tokens = $this->gettokenotp($request->phone);
        $tokens = '1217ed55-953e-4bd2-b4f9-58e4b8729f00';
        return view('buyer.register.confirmotp',['tokens'=>$tokens,'phone'=>$request->phone]);
    }

    public function confirmotp(Request $request){
        $otpcode = $request->otp1.$request->otp2.$request->otp3.$request->otp4.$request->otp5.$request->otp6;
        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://portal-otp.smsmkt.com/api/otp-validate',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_HTTPHEADER => array(
        //         "Content-Type: application/json",
        //         "api_key:a8c6eba12ba2326f25fe706b94293fe0",
        //         "secret_key:SCFmYT1IgPXJT4nr",
        //     ),
        //     CURLOPT_POSTFIELDS =>json_encode(array(
        //     "token"=>$request->tokenotp,
        //     "otp_code"=>$otpcode,
        //     )),
        // ));
        // $response = curl_exec($curl);
        // curl_close($curl);
        // // echo $response;
        // $response = json_decode($response,true);
        $response['result'] = [
            'status'=>true,
        ];
        return Response::json($response);
    }

    public function gettokenotp($number){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://portal-otp.smsmkt.com/api/otp-send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "api_key:a8c6eba12ba2326f25fe706b94293fe0",
                "secret_key:SCFmYT1IgPXJT4nr",
            ),
            CURLOPT_POSTFIELDS =>json_encode(array(
            "project_key"=>"9b9279e805",
            "phone"=>$number,
            )),
        ));
        $response = curl_exec($curl);
        $info = curl_getinfo($curl);
        // echo $info["http_code"];
        curl_close($curl);
        // echo $response;
        dd($response);
        //เพิ่มเอง
        $response = json_decode($response,true);
        if($info["http_code"] == '200'){
            return $response['result']['token'];
        }
        //เพิ่มเอง
        
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
        // dd($request);
        if($request->password == $request->confirm_password){

            $data = new mUsers_buyer;
            $data->code = 'B123456';
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
            return response()->json(["message"=>"สมัครสมาชิกสำเร็จ","status"=>true,"redirect_location"=>url("buyer/login-buy")]);
            // return Redirect::back();
        }else{
            return view("alert.alert", [
                'url' => '/buyer/registerpass-buy',
                'title' => "เกิดข้อผิดพลาด",
                'text' => "Password ไม่ตรงกัน",
            ]);
        }

    }

    public function createpassword(){
        //
        return view('buyer.register.registerpass-buy');
    }


    

}
