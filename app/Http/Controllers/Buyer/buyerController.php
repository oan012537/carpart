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

class buyerController extends Controller
{
    public function login_buyer(){
        return view('buyer.login-buy');
    }

    public function regis_buyer(){
        return view('buyer.regis-buy');
    }
}
