<?php

namespace App\Http\Controllers\Buyer\Myaccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyComfirmInventoryController extends Controller
{
    public function index()
    {
        return view('buyer.profile.comfirminventory.index');
    }
}
