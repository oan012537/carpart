<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\ProductModel;
use App\Models\SubModel;
use App\Models\IssueYear;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Warranty;
use App\Models\Transportation;

class ProductController extends Controller
{
    public function index()
    {
        $product_list_data = Product::with('brand', 'model', 'category', 'subCategory')
                                     ->get();

        return view('supplier.product.index', compact('product_list_data'));
    }


    public function create()
    {
        $brand_list_data = Brand::where('is_active', true)->get();
        $category_list_data = Category::where('is_active', true)->get();

        return view('supplier.product.create', compact('brand_list_data', 'category_list_data'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
