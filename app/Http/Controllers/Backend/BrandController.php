<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Brandmodel;
use App\Models\Brandmodels;
use App\Models\Brandyear;

class BrandController extends Controller
{
    public function index(){
        $brand = Brand::all();
        $brandmodel = Brandmodel::all();
        $brandmodels = Brandmodels::all();
        $brandyear = Brandyear::all();
        // ->paginate(4)
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.brand.index',['brands'=>$brand,'brandmodel'=>$brandmodel,'brandmodels'=>$brandmodels,'brandyear'=>$brandyear]);
    }
}
