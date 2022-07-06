<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
class RequestSparesController extends Controller
{
    public function index(){
        $brand = Brand::paginate(20);
        $category = Category::all();
        $dataopen = [];
        $dataclose = [];
        // ->paginate(4)
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.requestspares.index',['brands'=>$brand,'categorys'=>$category,'dataopen'=>$dataopen,'dataclose'=>$dataclose]);
    }

    public function view($id){
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.requestspares.view');
    }

    public function details($id){
        // dd(Auth::guard('supplier')->user());
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.requestspares.details');
    }
}
