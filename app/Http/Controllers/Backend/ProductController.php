<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // $brand = Brand::all();
        // $category = Category::all();
        // $dataopen = [];
        // $dataclose = [];
        // ->paginate(4)
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.product.index');
        // return view('backend.product.index',['brands'=>$brand,'categorys'=>$category,'dataopen'=>$dataopen,'dataclose'=>$dataclose]);
    }

    public function edit($id){
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.product.update');
    }

    public function details($id){
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.product.details');
    }
}
