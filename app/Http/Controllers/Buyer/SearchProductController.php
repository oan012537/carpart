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
use Illuminate\Support\Facades\Redirect;;
use App\Models\Buyer\mUsers_buyer;

use App\Models\Brand;
use App\Models\ProductModel;
use App\Models\SubModel;
use App\Models\IssueYear;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;

class SearchProductController extends Controller
{
    public function home_search()
    {
        // $data['brands'] = DB::table('brands')->get();
        return view('buyer.homesearch.home-search',[
            'brands_select' => Brand::get(),
            'category' => Category::get(),
        ]);
    }

    public function Getsearch(Request $request){
        if(!empty($request->brand)){
            $request->session()->put('search-brand',$request->brand);
        }
    }

    public function home_search_brand(){
        
        return view('buyer.homesearch.home-search',[
            'brands_select' => Brand::get(),
            'category' => Category::get(),
        ]);
    }

}
