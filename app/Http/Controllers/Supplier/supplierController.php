<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Session;
use DB;
use App\Models\Supplier\Users_supplier;


class supplierController extends Controller
{
    public function login_supplier(){
        return view('supplier.login-sup');
    }

    public function login_supplier_post(Request $request){

        $username = $request->username;
        $password = $request->password;

        if (Auth::guard('buyer')->attempt(['email' => $username, 'password' => $password]) )
        {
            return view('buyer.home-search');
        }
        elseif (Auth::guard('buyer')->attempt(['phone' => $username, 'password' => $password]) )
        {
            return redirect('/buyer/home-search')->withErrors(['success' => 'เข้าสู่ระบบสำเร็จ!!']);
        }else{

            dd("username หรือ password ผิด");
            return redirect('backend\login')->with(['error' => 'ชื่อผู้ใช้งาน หรือรหัสผ่านผิด !']);
        }
        return view('supplier.login-sup-post');
    }

    // public function logphone_supplier(){
    //     return view('supplier.logphone-sup');
    // }

    // public function logotp_supplier_(Request $request){

    //     // dd($request->all());
    //     $gettokenotp = $this->gettokenotp($request->number);
    //     // dd($gettokenotp);
    //     return view('supplier.logotp-sup',['tokenotp'=>$gettokenotp]);
    // }


    public function regis_supplier(){
        return view('supplier.regis-sup');
    }

    public function regisphone_supplier(){
        return view('supplier.regisphone-sup');
    }

    public function regisotp_supplier(){
        return view('supplier.regisotp-sup');
    }

    public function register_supplier(){
        return view('supplier.register-sup');
    }

    public function register_supplier_post(Request $request){
        if($request->tabs == 'normal'){
            Session::put([
                'type' => $request->tabs,
                'store_name' => $request->store_name,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
            ]);
        }else{
            Session::put([
                'type' => $request->tabs,
                'store_name' => $request->store_name_2,
                'first_name' => $request->first_name_2,
                'last_name' => $request->last_name_2,
                'address' => $request->address,
                'card_id' => $request->card_id,
            ]);
        }
        return view('supplier.registercon-sup');
    }

    public function registercon_supplier(){
        return view('supplier.registercon-sup');
    }

    public function registercon_supplier_post(Request $request){
        Session::put([
            'email' => $request->email,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'googlemap' => $request->googlemap,
            'store_address' => $request->store_address,
        ]);
    return view('supplier.registerpass-sup');
}

    public function registerbank_supplier(){
        return view('supplier.registerbank-sup');
    }

    public function registerpass_supplier(){
        return view('supplier.registerpass-sup');
    }

    public function registerpass_supplier_post(Request $request){

        if($request->password == $request->confirm_password){
            $data = new Users_supplier;
            $data->type = Session::get('type');
            $data->store_name = Session::get('store_name');
            $data->first_name = Session::get('first_name');
            $data->last_name = Session::get('last_name');
            $data->address = Session::get('address');
            $data->card_id = Session::get('card_id');
            $data->email = Session::get('email');
            $data->phone = Session::get('phone');
            $data->facebook = Session::get('facebook');
            $data->googlemap = Session::get('googlemap');
            $data->store_address = Session::get('store_address');
            $data->password  = Hash::make($request->password);

            $data->save();

            Session::flush(); // ลบ Session ทั้งหมด

            // return redirect()->route('supplier.home-search')->with('alert', 'Updated!');
        }else{
            return view("alert.alert", [
                'url' => '/supplier.registerpass-sup',
                'title' => "เกิดข้อผิดพลาด",
                'text' => "Password ไม่ตรงกัน",
            ]);
        }

    }
}
