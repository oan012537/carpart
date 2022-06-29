<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Categorysub;
use App\Models\Categorysubs;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        $categorysub = Categorysub::all();
        $categorysubs = Categorysubs::all();
        $datacategorysub = [];
        foreach($categorysub as $item){
            $datacategorysub[$item->categorysub_categoryid][] = $item;
        }
        $datacategorysubs = [];
        foreach($categorysubs as $item){
            $datacategorysubs[$item->categorysubs_subid][] = $item;
        }
        // ->paginate(4)
        // dd($datacategorysub,$datacategorysubs);
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.category.index',['category'=>$category,'categorysub'=>$datacategorysub,'categorysubs'=>$datacategorysubs]);
    }

    public function update(Request $request){
        // dd($request->all());
        $category = Category::find($request->categoryid);
        $category->category_name_th = $request->editnameth;
        $category->category_name_en = $request->editnameen;
        $category->updated_for = Auth::user()->name;
        $category->save();
        return redirect()->round('backend.category');
    }

    public function updatesub(Request $request){
        // dd($request->all());
        $categorysub = Categorysub::find($request->categorysubid);
        $categorysub->categorysub_name_th = $request->categorysubid;
        $categorysub->categorysub_name_en = $request->editcategorysubth;
        $categorysub->updated_for = Auth::user()->name;
        $categorysub->save();
        return redirect()->round('backend.category');
    }

    public function updatesubs(Request $request){
        // dd($request->all());
        $categorysubs = Categorysubs::find($request->categorysubid);
        $categorysubs->categorysubs_name_th = $request->categorysubid;
        $categorysubs->categorysubs_name_en = $request->editcategorysubth;
        $categorysubs->updated_for = Auth::user()->name;
        $categorysubs->save();
        return redirect()->round('backend.category');

    }
}
