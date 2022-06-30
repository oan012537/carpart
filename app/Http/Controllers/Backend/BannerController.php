<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Banner;

class BannerController extends Controller
{
    public function index(){
        return view('backend.banner.index');
    }
}
