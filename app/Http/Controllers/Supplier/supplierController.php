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


class supplierController extends Controller
{
    public function login_supplier(){
        return view('supplier.login-sup');
    }

    public function logphone_supplier(){
        return view('supplier.logphone-sup');
    }

    public function logotp_supplier(){
        return view('supplier.logotp-sup');
    }

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
}
