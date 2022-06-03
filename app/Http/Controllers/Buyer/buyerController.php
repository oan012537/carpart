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

use Helper;
use DB;
use App\Models\Backend\mUsers_buyer;


class buyerController extends Controller
{
    public function login_buyer(){
        return view('buyer.login-buy');
    }

    public function regis_buyer(){
        return view('buyer.regis-buy');
    }
    public function regis_buyer_post(Request $request){
        session

        return view('buyer.regis-buy');
    }

    public function regiscon_buyer(){
        return view('buyer.regiscon-buy');
    }

    public function registerpass_buyer(){
        return view('buyer.registerpass-buy');
    }

    public function register(Request $request){

        $data->username = $request->username;
        $data->password = $request->password;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->phone = $request->phone;
        $data->save();

        if($request->password == $request->confirm_password){

            return view("back-end.alert.success",['url'=> url("/login") ]);

        }else{

            return view("back-end.alert.alert", [
                'url' => '/register',
                'title' => "เกิดข้อผิดพลาด",
                'text' => "Password ไม่ตรงกัน",
            ]);
         }
    }
}
