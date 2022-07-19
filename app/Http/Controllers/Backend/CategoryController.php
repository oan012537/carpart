<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        $categorysub = SubCategory::all();
        $categorysubs = SubSubCategory::all();
        $datacategorysub = [];
        foreach($categorysub as $item){
            $datacategorysub[$item->category_id][] = $item;
        }
        $datacategorysubs = [];
        foreach($categorysubs as $item){
            $datacategorysubs[$item->sub_category_id][] = $item;
        }
        // ->paginate(4)
        // dd($datacategorysub,$datacategorysubs);
        // $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('backend.category.index',['category'=>$category,'categorysub'=>$datacategorysub,'categorysubs'=>$datacategorysubs]);
    }

    public function update(Request $request){
        // dd($request->all());
        $category = Category::find($request->categoryid);
        $category->name_th = $request->editnameth;
        $category->name_en = $request->editnameen;
        $category->updated_by = Auth::user()->name;
        $category->save();
        return redirect()->route('backend.category');
    }

    public function updatesub(Request $request){
        // dd($request->all());
        $categorysub = SubCategory::find($request->categorysubid);
        $categorysub->name_th = $request->editcategorysubth;
        $categorysub->name_en = $request->editcategorysuben;
        $categorysub->updated_by = Auth::user()->name;
        $categorysub->save();
        return redirect()->route('backend.category');
    }

    public function updatesubs(Request $request){
        // dd($request->all());
        $categorysubs = SubSubCategory::find($request->categorysubsid);
        $categorysubs->name_th = $request->editcategorysubsth;
        $categorysubs->name_en = $request->editcategorysubssen;
        $categorysubs->updated_by = Auth::user()->name;
        $categorysubs->save();
        return redirect()->route('backend.category');

    }
}
