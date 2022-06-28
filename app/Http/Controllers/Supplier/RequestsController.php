<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Brandmodel;
use App\Models\Brandmodels;
use App\Models\Brandyear;
use App\Models\Category;

class RequestsController extends Controller
{
    public function index(){
        $brand = Brand::all();
        $category = Category::all();
        $dataall = Brand::paginate(20);
        $datawait = [];
        $datasend = [];
        $dataclose = [];
        $datadel = [];
        // ->paginate(4)
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('supplier.requests.index',['brand'=>$brand,'category'=>$category,'dataall'=>$dataall,'datawait'=>$datawait,'datasend'=>$datasend,'dataclose'=>$dataclose,'datadel'=>$datadel]);
    }

    public function view($id){
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('supplier.requests.view');
    }

    public function details($id){
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('supplier.requests.details');
    }

    public function offer($id){
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('supplier.requests.offer');
    }
}
