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


class buyerController extends Controller
{
    public function login_buyer(){
        return view('buyer.login-buy');
    }
    public function login_buyer_post(Request $request){

        $username = $request->username;
        $password = $request->password;

        if (Auth::guard('buyer')->attempt(['email' => $username, 'password' => $password]) )
        {
            return redirect('buyer/home-search');
        }
        elseif (Auth::guard('buyer')->attempt(['phone' => $username, 'password' => $password]) )
        {
            return redirect('buyer/home-search');
        }else{

            dd("username หรือ password ผิด");
            return redirect('backend\login')->with(['error' => 'ชื่อผู้ใช้งาน หรือรหัสผ่านผิด !']);
        }
    }

    public function logout_buyer(){
        if (!Auth::guard('buyer')->logout()) {
            return redirect('/');
        }
    }

    public function regis(){
        return view('buyer.regis');
    }
    public function regis_post(Request $request){
            Session::put([
                'pdpa' => $request->pdpa,
            ]);
        return view('buyer.registerpass-buy');
    }

    public function regis_buyer(){
        return view('buyer.regis-buy');
    }
    public function regis_buyer_post(Request $request){
        if($request->tabs == 'normal'){
            Session::put([
                'type' => $request->tabs,
                'profile_name' => $request->profile_name,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
            ]);
        }else{
            Session::put([
                'type' => $request->tabs,
                'profile_name' => $request->profile_name_2,
                'first_name' => $request->first_name_2,
                'last_name' => $request->last_name_2,
                'company_name' => $request->company_name,
                'vat_id' => $request->vat_id,
            ]);
        }
        return view('buyer.regiscon-buy');
    }

    public function regiscon_buyer(){
        return view('buyer.regiscon-buy');
    }
    public function regiscon_buyer_post(Request $request){

            Session::put([
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
        return view('buyer.registerpass-buy');
    }

    public function registerpass_buyer(){
        return view('buyer.registerpass-buy');
    }
    public function registerpass_buyer_post(Request $request){

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
            return response()->json(["message"=>"สมัครสมาชิกสำเร็จ","status"=>true,"redirect_location"=>url("backend/dashboard")]);
        }else{
            dd("ไม่สำเร็จ");
            return view("alert.alert", [
                'url' => '/buyer.registerpass-buy',
                'title' => "เกิดข้อผิดพลาด",
                'text' => "Password ไม่ตรงกัน",
            ]);
        }

    }
    public function home_search(){
        $brand = DB::table('brand')->get();
        return view('buyer.home-search',compact('brand'));
    }

}
