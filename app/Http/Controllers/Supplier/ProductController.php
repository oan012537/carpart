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
use Keygen;
use Auth;

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

        return view('supplier.product.create', compact('brand_list_data'));
    }

    // get sub items
    public function getSubItems(Request $request)
    {
        $id = $request->id;
        $tableName = $request->tableName;

        if ($tableName == 'models') {
            $model_list_data = ProductModel::where([
                                    ['brand_id', $id],
                                    ['is_active', true]
                                ])
                                ->get();
            return $model_list_data;
        } 
        else if ($tableName == 'sub_models') {
            $sub_model_list_data = SubModel::where([
                                            ['model_id', $id],
                                            ['is_active', true]
                                        ])
                                        ->get();
            return $sub_model_list_data;
        } 
        else if ($tableName == 'issue_years') {
            $issue_year_list_data = IssueYear::where([
                                            ['sub_model_id', $id],
                                            ['is_active', true]
                                        ])
                                        ->get();
            return $issue_year_list_data;
        } 
        else if ($tableName == 'categories') {
            $category_list_data = Category::where([
                                            ['is_active', true]
                                        ])
                                        ->get();
            return $category_list_data;
        } 
        else if ($tableName == 'sub_categories') {
            $sub_category_list_data = SubCategory::where([
                                            ['category_id', $id],
                                            ['is_active', true]
                                        ])
                                        ->get();
            return $sub_category_list_data;
        } 
        else if ($tableName == 'sub_sub_categories') {
            $sub_sub_category_list_data = SubSubCategory::where([
                                            ['sub_category_id', $id],
                                            ['is_active', true]
                                        ])
                                        ->get();
            return $sub_sub_category_list_data;
        }

        
    }


    public function createProductInfo(Request $request)
    {
        $data = $request->all();
        return view('supplier.product.second-product-info', compact('data'));

    }


    public function store(Request $request)
    {
        $data = $request->all();

        $data['product_type'] = 'second';
        $data['is_active'] = 1;
        $data['created_by'] = 'night';
        $data['updated_by'] = 'night';
        $isWarranty = $data['is_warranty'];
        $product_image = isset($data['image']) ? $data['image'] : null;

        $old_id = isset($data['old_id']) ? $data['old_id'] : null;

        if (!$old_id) {
            $product_code = Keygen::numeric(6)->generate();

            $data['product_code'] = $product_code;
            $product_data = Product::create($data);
            
            if ($isWarranty == 1){
                $warranty = new Warranty();
                $warranty->product_id = $product_data->id;
                $warranty->duration = $data['duration'];
                $warranty->year_month_day = $data['year_month_day'];
                $warranty->created_by = $data['created_by'];
                $warranty->updated_by = $data['updated_by'];
                $warranty->save();
            }
            
            if ($product_image) {
                foreach ($product_image as $key => $image) {
                    $image_data = new ProductImage();
                    $image_data->product_id =  $product_data->id;
                    $image_data->line_item_no = $key + 1;
                    $image_data->image = $image;
                    $image_data->created_by = $data['created_by'];
                    $image_data->updated_by = $data['updated_by'];

                    $image_data->save();
                }
            }
        } 
        else {

            $product_data = Product::findOrFail($old_id);

            if ($isWarranty == 1){
                $warranty_data = Warranty::where('product_id', $product_data->id);
                if ($warranty_data) {
                    $warranty_data->product_id = $product_data->id;
                    $warranty_data->duration = $data['duration'];
                    $warranty_data->year_month_day = $data['year_month_day'];
                    $warranty_data->created_by = $data['created_by'];
                    $warranty_data->updated_by = $data['updated_by'];
                    $warranty_data->save();    
                } else {
                    $warranty = new Warranty();
                    $warranty->product_id = $product_data->id;
                    $warranty->duration = $data['duration'];
                    $warranty->year_month_day = $data['year_month_day'];
                    $warranty->created_by = $data['created_by'];
                    $warranty->updated_by = $data['updated_by'];
                    $warranty->save();
                }
            }
            
            if ($product_image) {
                foreach ($product_image as $key => $image) {
                    $image_data = new ProductImage();
                    $image_data->product_id =  $product_data->id;
                    $image_data->line_item_no = $key + 1;
                    $image_data->image = $image;
                    $image_data->created_by = $data['created_by'];
                    $image_data->updated_by = $data['updated_by'];

                    $image_data->save();
                }
            }

            $product_data->update($data);

        }
        

        $responseData = array (
            'message' => 'Created Product Successfully',
            'product_code' => $product_code,
            'id' => $product_data->id
        );

        return $responseData;

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


    public function dropzone()
    {
        return view('supplier.product.dropzone');
    }
     
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
    
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
    
        return $imageName;
    }

    public function dropzoneRemove(Request $request)
    {
        $imageName = $request->imageName;
        
        unlink('images/'. $imageName);

        return 'success';
    }
}
