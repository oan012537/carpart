<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
class RequestSparesController extends Controller
{
    public function index(){
        $brand = Brand::all();
        $brands = [];
        $data = [];
        foreach($brand as $key => $item){
            $data[] = $item;
            if(($key+1)%5==0){
                $brands[] = $data;
                $data = [];
            }
        }
        return view('buyer.requestspares.index',['brands'=>$brands]);
    }

    public function add(){
        return view('buyer.requestspares.add');
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
