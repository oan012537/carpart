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
use Session;
use Helper;
use DB;
use App\Models\Buyer\mUsers_buyer;

use App\Models\Brand;
use App\Models\ProductModel;
use App\Models\SubModel;
use App\Models\IssueYear;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;

class RequestSparesController extends Controller
{
    public function index(){
        /*$brand = Brand::all();
        dd(count($brand));
        $brands = [];
        $data = [];
        foreach($brand as $key => $item){
            $data[] = $item;
            if(($key+1)%5==0){
                $brands[] = $data;
                $data = [];
            }
        }*/
        return view('buyer.requestspares.index',[
            'brands_select' => Brand::get(),
            'category' => Category::get(),
        ]);
    }

    public function add(){
        // dd(Brand::where('id',session('search_fail.brand'))->first());
        return view('buyer.requestspares.add',[
            'brand' => Brand::where('id',session('search_fail.brand'))->first(),
            'model' => ProductModel::where('id', session('search_fail.model'))->first(),
            'submodel' => SubModel::where('id',session('search_fail.submodel'))->first(),
            'year' => IssueYear::where('id',session('search_fail.year'))->first(),
            'category' => Category::where('id',session('search_fail.category'))->first(),
            'subcategory' => SubCategory::where('id',session('search_fail.subcategory'))->first(),
            'subsubcategory' => SubSubCategory::where('id',session('search_fail.subsubcategory'))->first(),
        ]);
    }

    public function store(Request $request){
        return view('buyer.requestspares.index');
    }

    public function view(){
        return view('buyer.requestspares.view');
    }

    public function details(){
        return view('buyer.requestspares.details');
    }
}
