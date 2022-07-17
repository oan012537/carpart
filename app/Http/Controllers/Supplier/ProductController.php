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
use Carbon\Carbon;
use Validator;
use DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $status_code = null;//$request->status_code;

        $product_list_data = Product::with('brand', 'model', 'category', 'subCategory')
                                     ->where('status_code', $status_code)
                                     ->orderBy('id', 'desc')
                                     ->get();

        $product_list = array();

        if(!empty($product_list_data)) {
        
            foreach ($product_list_data as $key => $product) {

                $nestedData['key'] = $key;
                $nestedData['id'] = $product->id;
                $nestedData['product_code'] = $product->product_code;
                $nestedData['name_en'] = $product->name_en;
                $nestedData['image'] = null;

                $nestedData['brand'] = $product->brand->name_en;
                $nestedData['model'] = $product->model->name_en;
                $nestedData['category'] = $product->category->name_en;
                $nestedData['sub_category'] = $product->subCategory->name_en;

                $nestedData['price'] = $product->price;
                $nestedData['status_code'] = $product->status_code;
                $nestedData['updated_by'] = $product->updated_by;
                
                $product_list[] = $nestedData;

            }
            return view('supplier.product.index', compact('product_list'));
        }
    }


    // loading product list table not use for now
    public function productData(Request $request)
    {
        $columns = array( 
            1 => 'Product_code', 
            2 => 'image',
            3 => 'name_en',
            4 => 'category_id',
            5 => 'brand_id',
            6 => 'model_id',
            7 => 'price',
            8 => 'status_code',
            9 => 'updated_by'
        );

        $totalData = Product::where('supplier_id', Auth::guard('supplier')->user()->id)
                            ->count();

        $totalFiltered = $totalData;
        if($request->input('length') != -1)
            $limit = $request->input('length');
        else
            $limit = $totalData;
        $start = $request->input('start');
        $order = 'products.'.$columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value'))) { // without search value

            $product_list_data = Product::with('brand', 'model', 'category', 'subCategory')
                                    ->where('supplier_id', Auth::guard('supplier')->user()->id)
                                    ->offset($start)
                                    ->limit($limit)
                                    ->orderBy($order, $dir)
                                    ->get();
        }  else {
            $search = $request->input('search.value'); // with search value

            $product_list_data =  Product::select('products.*')
                            ->with('brand', 'model', 'category', 'subCategory')
                            ->join('brands', 'products.brand_id', '=', 'brands.id')
                            ->join('categories', 'products.category_id', '=', 'categories.id')
                            ->where('supplier_id', Auth::guard('supplier')->user()->id)
                            ->orwhere('brands.name_en', 'LIKE', "%{$search}%")
                            ->orwhere('categories.name_en', 'LIKE', "%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)->get();

        $totalFiltered = Product::join('brands', 'products.brand_id', '=', 'brands.id')
                            ->join('categories', 'products.category_id', '=', 'categories.id')
                            ->where('supplier_id', Auth::guard('supplier')->user()->id)
                            ->orwhere('brands.name_en', 'LIKE', "%{$search}%")
                            ->orwhere('categories.name_en', 'LIKE', "%{$search}%")
                            ->count();
        }

        $data = array();

        if(!empty($product_list_data)) {
           
            foreach ($product_list_data as $key => $product) {

                $nestedData['key'] = $key;
                $nestedData['id'] = $product->id;
                $nestedData['product_code'] = $product->product_code;
                $nestedData['name_en'] = $product->name_en;
                $nestedData['image'] = null;

                $nestedData['brand'] = $product->brand->name_en;
                $nestedData['model'] = $product->model->name_en;
                $nestedData['category'] = $product->category->name_en;
                $nestedData['sub_category'] = $product->subCategory->name_en;

                $nestedData['price'] = $product->price;
                $nestedData['status_code'] = $product->status_code;
                $nestedData['updated_by'] = $product->updated_by;

                $nestedData['options'] = '<div class="box__wrapperbutton">
                                        <a href="javascript:void(0)" class="btn btn__edit">
                                        <i class="fa-solid fa-pencil"></i></a>
                                        </div>';
                
                $data[] = $nestedData;

            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered), 
            "data"            => $data   
        );

        echo json_encode($json_data);
        
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
        
        $product_name = null;

        $category_data = Category::select('name_th', 'name_en')->where('id', $data['category_id'])->first();
        if ($category_data) {
            $category_name = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $category_data->name_en); 
            $product_name =  $category_name;
        }

        $sub_category_data = SubCategory::select('name_th', 'name_en')->where('id', $data['sub_category_id'])->first();
        if ($sub_category_data) {
            $sub_category_name = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $sub_category_data->name_en); 
            $product_name .=  ' '. $sub_category_name;
        }        

        $sub_sub_category_data = SubSubCategory::select('name_th', 'name_en')->where('id', $data['sub_sub_category_id'])->first();
        if ($sub_sub_category_data) {
            $sub_sub_category_name = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $sub_sub_category_data->name_en); 
            $product_name .= ' '. $sub_sub_category_name;
        }

        $product_qualities = ['Excellent','Good','Fair','Poor','repairable'];
        $day_month_year = ['Day', 'Month', 'Year'];
        $units = ['KG', 'G'];
        $uoms = ['CM', 'M', 'MM'];

        $transport_type_array = array(
            [
                'id' => 1,
                'name' => 'Laramove Thailand',
                'estimate_fee' => 29.00
            ],
            [
                'id' => 2,
                'name' => 'Flash Express',
                'estimate_fee' => 40.00
            ]
        );

        return view('supplier.product.second-product-info', 
                compact('data', 'product_name', 'product_qualities',
                        'day_month_year', 'units', 'uoms', 'transport_type_array'));

    }


    public function store(Request $request)
    {
        $data = $request->all();

        $data['image'] = isset($data['image']) ? $data['image'] : null;
        
        $product_type = $data['product_type'];

        // validation 
        if ($product_type == 'second') {
            $validator = Validator::make($data, [
                'name_th' => ['required', 'max:191'],
                'name_en' => ['required', 'max:191'],
                'image' => 'required',
                'quality' => 'required',
            ]);
        } else {
            $validator = Validator::make($data, [
                'name_th' => ['required', 'max:191'],
                'name_en' => ['required', 'max:191'],
                'image' => 'required'                
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $supplier_id = Auth::guard('supplier')->user()->id;
        $supplier_name = Auth::guard('supplier')->user()->name;

        $data['supplier_id'] = $supplier_id;
        $data['is_active'] = 1;
        $data['created_by'] = $supplier_name;
        $data['updated_by'] = $supplier_name;
        $isWarranty = $data['is_warranty'];
        $product_image = $data['image'];
        $transport_type_id = $data['transport_type_id'];

        $product_code = Keygen::numeric(6)->generate();

        $data['product_code'] = $product_code;
        $product_data = Product::create($data);

        $warranty = [];
        $transport_data = [];
        $old_transport_id = [];
        $old_image = [];
        $image_data = [];
        
        if ($isWarranty == 1){
            $warranty['product_id'] = $product_data->id;
            $warranty['duration'] = $data['duration'];
            $warranty['year_month_day'] = $data['year_month_day'];
            $warranty['created_by'] = $data['created_by'];
            $warranty['updated_by'] = $data['updated_by'];

            Warranty::create($warranty);
        }

        // create or update transport coompany
        if ($transport_type_id) {
            foreach ($transport_type_id as $j => $transport_id) {

                $transport_data['product_id'] =  $product_data->id;
                $transport_data['transport_type_id'] = $transport_type_id[$j];
                $transport_data['weight'] = $data['weight'];
                $transport_data['unit'] = $data['unit'];
                $transport_data['width'] = $data['width'];
                $transport_data['length'] = $data['length'];
                $transport_data['height'] = $data['height'];
                $transport_data['uom'] = $data['uom'];
                $transport_data['is_deliver'] = $data['is_deliver'];
                $transport_data['estimated_days'] = isset($data['estimated_days']) ? $data['estimated_days'] : null;
                $transport_data['created_by'] = $data['created_by'];
                $transport_data['updated_by'] = $data['updated_by'];

                Transportation::create($transport_data);
            }
        }

        
        if ($product_image) {
            foreach ($product_image as $i => $image) {
                $image_data['product_id'] =  $product_data->id;
                $image_data['line_item_no'] = $i + 1;
                $image_data['image'] = $product_image[$i];
                $image_data['created_by'] = $data['created_by'];
                $image_data['updated_by'] = $data['updated_by'];

                ProductImage::create($image_data);
            }
        }
        
        $id = $product_data->id;
        // \Session::flash('create_message', 'Product created successfully');

        return redirect()->route('products.edit', $id)->with('message', 'Product created successfully');

    }


    public function edit($id)
    {
        $data = DB::table('products')->where('id', $id)->first();
        $brand_list_data = DB::table('brands')->where('is_active', true)->get();
        $product_image = DB::table('product_images')->where('product_id', $id)->pluck('image', 'line_item_no');
        $warranty = DB::table('warranties')->where('product_id', $id)->first();
        $transport = DB::table('transportations')->where('product_id', $id)->get();

        $product_qualities = ['Excellent','Good','Fair','Poor','repairable'];
        $day_month_year = ['Day', 'Month', 'Year'];
        $units = ['KG', 'G'];
        $uoms = ['CM', 'M', 'MM'];

        $transport_type_array = array(
            [
                'id' => 1,
                'name' => 'Laramove Thailand',
                'estimate_fee' => 29.00
            ],
            [
                'id' => 2,
                'name' => 'Flash Express',
                'estimate_fee' => 40.00
            ]
        );

        // foreach ($product_image as $key => $value) {
        //     $img = \File::get(url('product/images/' . $value));
            
        // }

        return view('supplier.product.second-product-edit', 
                compact('data', 'brand_list_data', 'product_image',
                    'warranty', 'transport', 'transport_type_array',
                    'product_qualities', 'day_month_year', 'units',
                    'uoms'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();

        $data['image'] = isset($data['image']) ? $data['image'] : null;
        
        $product_type = $data['product_type'];

        // validation 
        if ($product_type == 'second') {
            $validator = Validator::make($data, [
                'name_th' => ['required', 'max:191'],
                'name_en' => ['required', 'max:191'],
                'image' => 'required',
                'quality' => 'required',
            ]);
        } else {
            $validator = Validator::make($data, [
                'name_th' => ['required', 'max:191'],
                'name_en' => ['required', 'max:191'],
                'image' => 'required'                
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $supplier_name = Auth::guard('supplier')->user()->name;

        $data['updated_by'] = $supplier_name;
        $isWarranty = $data['is_warranty'];
        $product_image = $data['image'];
        $transport_type_id = $data['transport_type_id'];

        $warranty = [];
        $transport_data = [];
        $old_transport_id = [];
        $old_image = [];
        $image_data = [];

        $product_data = Product::findOrFail($id);

        // update product data
        if ($product_data) {

            $product_image_data = ProductImage::where('product_id', $id)->get();
            $transport_list_data = Transportation::where('product_id', $id)->get();

            // create or update warranty
            if ($isWarranty == 1){

                $warranty['product_id'] = $product_data->id;
                $warranty['duration'] = $data['duration'];
                $warranty['year_month_day'] = $data['year_month_day'];
                $warranty['updated_by'] = $data['updated_by'];
                
                $warranty_data = Warranty::where('product_id', $product_data->id);
                if ($warranty_data) {
                    Warranty::where('product_id', $product_data->id)
                            ->update($warranty);
                } else {
                    $warranty['created_by'] = $data['updated_by'];
                    Warranty::create($warranty);
                }
            }

            // remove unuse transport company
            if ($transport_list_data) {
                foreach ($transport_list_data as $x => $transport_data) {
                    $old_transport_id[] = $transport_data->transport_type_id;

                    if ( !(in_array($old_transport_id[$x], $transport_type_id)) ){
                        $transport_data->delete();
                    }
                }
            }

            // create or update transport coompany
            if ($transport_type_id) {
                foreach ($transport_type_id as $j => $transport_id) {

                    $transport_data['product_id'] =  $product_data->id;
                    $transport_data['transport_type_id'] = $transport_type_id[$j];
                    $transport_data['weight'] = $data['weight'];
                    $transport_data['unit'] = $data['unit'];
                    $transport_data['width'] = $data['width'];
                    $transport_data['length'] = $data['length'];
                    $transport_data['height'] = $data['height'];
                    $transport_data['uom'] = $data['uom'];
                    $transport_data['is_deliver'] = $data['is_deliver'];
                    $transport_data['estimated_days'] = isset($data['estimated_days']) ? $data['estimated_days'] : null;
                    $transport_data['updated_by'] = $data['updated_by'];

                    if (in_array($transport_id, $old_transport_id)) {
                        Transportation::where([
                                                ['product_id', $id],
                                                ['id', $transport_id]
                                            ])->update($transport_data);
                    } else {
                        $transport_data['created_by'] = $data['updated_by'];
                        Transportation::create($transport_data);
                    }
                }
            }


            // remove unuse image
            if ($product_image_data){
            
                foreach ($product_image_data as $key => $image) {
                    $old_image[] = $image->image;

                    if ( !(in_array($old_image[$key], $product_image)) ){
                        $image->delete();
                    }
                }
            }

            // create or update product image
            if ($product_image) {
                foreach ($product_image as $i => $image) {

                    $image_data['product_id'] =  $product_data->id;
                    $image_data['line_item_no'] = $i + 1;
                    $image_data['image'] = $product_image[$i];
                    $image_data['updated_by'] = $data['updated_by'];

                    if (in_array($image, $old_image)) {
                        ProductImage::where([
                                                ['product_id', $id],
                                                ['image', $product_image]
                                            ])->update($image_data);
                    } else {
                        $image_data['created_by'] = $data['updated_by'];
                        ProductImage::create($image_data);
                    }
                }
            }

            $product_data->update($data);
        }

        return redirect()->route('products.index')->with('message', 'Update product successfully');
        
    }

    // copy product
    public function copyProduct(Request $request, $id)
    {
        $copyType = $request->copyType;

        $data = DB::table('products')->where('id', $id)->first();
        $brand_list_data = DB::table('brands')->where('is_active', true)->get();
        $product_image = DB::table('product_images')->where('product_id', $id)->pluck('image', 'line_item_no');
        $warranty = DB::table('warranties')->where('product_id', $id)->first();
        $transport = DB::table('transportations')->where('product_id', $id)->get();

        $product_qualities = ['Excellent','Good','Fair','Poor','repairable'];
        $day_month_year = ['Day', 'Month', 'Year'];
        $units = ['KG', 'G'];
        $uoms = ['CM', 'M', 'MM'];

        $transport_type_array = array(
            [
                'id' => 1,
                'name' => 'Laramove Thailand',
                'estimate_fee' => 29.00
            ],
            [
                'id' => 2,
                'name' => 'Flash Express',
                'estimate_fee' => 40.00
            ]
        );

        \Session::flash('message', 'Copy product successfully.');

        return view('supplier.product.second-product-copy', 
                compact('data', 'brand_list_data', 'product_image',
                    'warranty', 'transport', 'transport_type_array',
                    'product_qualities', 'day_month_year', 'units',
                    'uoms'));
    }


    public function destroy($id)
    {
        //
    }

    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
    
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('product/images'), $imageName);
    
        return $imageName;
    }

    public function dropzoneRemove(Request $request)
    {
        $imageName = $request->imageName;
        $product_image = ProductImage::where('image', $imageName)->first();
        if ($product_image) {
            $product_image->delete();
            unlink('product/images/'. $imageName);
        } else {
            if ($imageName) {
                unlink('product/images/'. $imageName);
            }
        }

        return 'success';
    }
}
