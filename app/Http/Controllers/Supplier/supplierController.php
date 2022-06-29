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


class SupplierController extends Controller
{
    public function login_supplier(){
        return view('supplier.login-sup');
    }

    public function login_supplier_post(Request $request){

        $username = $request->username;
        $password = $request->password;

        // dd($request->all());
        if (Auth::guard('supplier')->attempt(['email' => $username, 'password' => $password]) )
        {
            return redirect('supplier/profile')->withErrors(['success' => 'เข้าสู่ระบบสำเร็จ!!']);
      
        }else{

            dd("username หรือ password ผิด");
            return redirect('backend\login')->with(['error' => 'ชื่อผู้ใช้งาน หรือรหัสผ่านผิด !']);
        }
        // return view('supplier.login-sup-post');
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

    public function regis_supplier_post(Request $request){
        Session::put([
            'pdpa' => $request->pdpa,
        ]);
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
                'address' => $request->address,
                'card_id' => $request->card_id,
            ]);
        }else{
            Session::put([
                'type' => $request->tabs,
                'company_name' => $request->company_name,
                'branch' => $request->branch,
                'vat_id' => $request->vat_id,
                'address2' => $request->address2,
                'store_address' => $request->store_address,
                
            ]);
            return view('supplier.registercon-sup2');
        }

        // dd($request->all());
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
    return view('supplier.registerbank-sup');
    }

    public function registercon_supplier2(){
        return view('supplier.registercon-sup2');
    }

    public function registercon_supplier2_post(Request $request){
        Session::put([
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'googlemap' => $request->googlemap,
            'store_address' => $request->store_address,
        ]);
    return view('supplier.registerbank-sup');
    }

    public function registerbank_supplier(){
        return view('supplier.registerbank-sup');
    }

    public function registerpass_supplier(){
        return view('supplier.registerpass-sup');
    }

    public function registerpass_supplier_post(Request $request){

        // dd(session()->all());
        if($request->password == $request->confirm_password){
            $data = new Users_supplier;
            $data->type = Session::get('type');
            $data->store_name = Session::get('store_name');
            $data->company_name = Session::get('company_name');
            $data->branch = Session::get('branch');
            $data->first_name = Session::get('first_name');
            $data->last_name = Session::get('last_name');
            $data->address = Session::get('address');
            $data->address2 = Session::get('address2');
            $data->card_id = Session::get('card_id');
            $data->vat_id = Session::get('vat_id');
            $data->email = Session::get('email');
            $data->phone = Session::get('phone');
            $data->facebook = Session::get('facebook');
            $data->googlemap = Session::get('googlemap');
            $data->store_address = Session::get('store_address');
            $data->password  = Hash::make($request->password);

            $data->save();

            Session::flush(); // ลบ Session ทั้งหมด

            // return redirect()->route('supplier.login-sup')->with('alert', 'Updated!');
        }else{
            return view("alert.alert", [
                'url' => '/supplier.registerpass-sup',
                'title' => "เกิดข้อผิดพลาด",
                'text' => "Password ไม่ตรงกัน",
            ]);
        }

    }

    
    public function supplier_profile(){

        return view('supplier.supplier-profile');
    }

    
}
