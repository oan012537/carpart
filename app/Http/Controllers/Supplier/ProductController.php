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
use Session;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $brand_id = $request->brand_id;
        $category_id = $request->category_id;
        $product_name = $request->product_name;
        $status_code = $request->status_code;
        
        $total_all_record = 0;
        $total_selling_record = 0;
        $total_sold_record = 0;
        $total_suspended_record = 0;
        $total_cancle_record = 0;

        $supplier_id = Auth::guard('supplier')->user()->id;

        $total_all_record = Product::where('supplier_id', $supplier_id)->count();
        $total_selling_record = Product::where([
                                            ['supplier_id', $supplier_id],
                                            ['status_code', 'selling']
                                        ])->count();
        $total_sold_record = Product::where([
                                            ['supplier_id', $supplier_id],
                                            ['status_code', 'sold']
                                        ])->count();
        $total_suspended_record = Product::where([
                                            ['supplier_id', $supplier_id],
                                            ['status_code', 'suspended']
                                        ])->count();
        $total_cancle_record = Product::where([
                                            ['supplier_id', $supplier_id],
                                            ['status_code', 'cancle']
                                        ])->count();

        $product_list_data = null;

        if ($status_code == 'all') {
            // get brand list
            $lims_brand_data = Product::select('brands.name_en', 'brands.name_th', 'brands.id')
                                ->join('brands', 'products.brand_id', 'brands.id')
                                ->where('supplier_id', $supplier_id)
                                ->groupBy('brands.name_en', 'brands.name_th', 'brands.id')
                                ->get()->toArray();

            // get categories list
            $lims_category_data = Product::select('categories.name_en', 'categories.name_th', 'categories.id')
                                    ->join('categories', 'products.category_id', 'categories.id')
                                    ->where('supplier_id', $supplier_id)
                                    ->groupBy('categories.name_en', 'categories.name_th', 'categories.id')
                                    ->get()->toArray();
            
            // search product by all status
            if ($brand_id && !$category_id) {
                $product_list_data = Product::with('brand', 'model', 'category', 'subCategory')
                                            ->where([
                                                ['supplier_id', $supplier_id],
                                                ['brand_id', $brand_id],
                                                ['name_en', 'LIKE', "%{$product_name}%"]
                                            ])
                                            ->orderBy('id', 'desc')
                                            ->get();
                                        
            } else if (!$brand_id && $category_id) {
                
                $product_list_data = Product::with('brand', 'model', 'category', 'subCategory')
                                            ->where([
                                                ['supplier_id', $supplier_id],
                                                ['category_id', $category_id],
                                                ['name_en', 'LIKE', "%{$product_name}%"]
                                            ])
                                        ->orderBy('id', 'desc')
                                        ->get();
    
            } else if ($brand_id && $category_id) {
                
                $product_list_data = Product::with('brand', 'model', 'category', 'subCategory')
                                            ->where([
                                                ['supplier_id', $supplier_id],
                                                ['brand_id', $brand_id],
                                                ['category_id', $category_id],
                                                ['name_en', 'LIKE', "%{$product_name}%"]
                                            ])
                                            ->orderBy('id', 'desc')
                                            ->get();
    
            } else {
                $product_list_data = Product::with('brand', 'model', 'category', 'subCategory')
                                        ->where([
                                                ['supplier_id', $supplier_id],
                                                ['name_en', 'LIKE', "%{$product_name}%"]
                                            ])
                                            ->orderBy('id', 'desc')
                                            ->get();
                
            }

        } else {
            // get brand list by status code
            $lims_brand_data = Product::select('brands.name_en', 'brands.name_th', 'brands.id')
                                ->join('brands', 'products.brand_id', 'brands.id')
                                ->where([
                                    ['status_code', $status_code],
                                    ['supplier_id', $supplier_id]
                                ])
                                ->groupBy('brands.name_en', 'brands.name_th', 'brands.id')
                                ->get()->toArray();

            // get categories list by status code
            $lims_category_data = Product::select('categories.name_en', 'categories.name_th', 'categories.id')
                                ->join('categories', 'products.category_id', 'categories.id')
                                ->where([
                                    ['status_code', $status_code],
                                    ['supplier_id', $supplier_id]
                                ])
                                ->groupBy('categories.name_en', 'categories.name_th', 'categories.id')
                                ->get()->toArray();

            // search product by status code
            if ($brand_id && !$category_id) {
                $product_list_data = Product::with('brand', 'model', 'category', 'subCategory')
                                            ->where([
                                            ['status_code', $status_code],
                                            ['supplier_id', $supplier_id],
                                            ['brand_id', $brand_id],
                                            ['name_en', 'LIKE', "%{$product_name}%"]
                                        ])
                                        ->orderBy('id', 'desc')
                                        ->get();
                                        
            } else if (!$brand_id && $category_id) {
                
                $product_list_data = Product::with('brand', 'model', 'category', 'subCategory')
                                            ->where([
                                            ['status_code', $status_code],
                                            ['supplier_id', $supplier_id],
                                            ['category_id', $category_id],
                                            ['name_en', 'LIKE', "%{$product_name}%"]
                                        ])
                                        ->orderBy('id', 'desc')
                                        ->get();
    
            } else if ($brand_id && $category_id) {
                
                $product_list_data = Product::with('brand', 'model', 'category', 'subCategory')
                                            ->where([
                                            ['status_code', $status_code],
                                            ['supplier_id', $supplier_id],
                                            ['brand_id', $brand_id],
                                            ['category_id', $category_id],
                                            ['name_en', 'LIKE', "%{$product_name}%"]
                                        ])
                                        ->orderBy('id', 'desc')
                                        ->get();
    
            } else {
                
                $product_list_data = Product::with('brand', 'model', 'category', 'subCategory')
                                        ->where([
                                        ['status_code', $status_code],
                                        ['supplier_id', $supplier_id],
                                        ['name_en', 'LIKE', "%{$product_name}%"]
                                    ])
                                    ->orderBy('id', 'desc')
                                    ->get();
                
            }
        }

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

            return view('supplier.product.index', 
                    compact('product_list', 'lims_brand_data', 'lims_category_data',
                            'brand_id', 'category_id', 'product_name', 'status_code',
                            'total_all_record', 'total_selling_record', 'total_sold_record',
                            'total_suspended_record', 'total_cancle_record'
                        ));
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
        $brand_list_data = Brand::where('is_active', true)
                            ->orderBy('sequence_no')
                            ->get();

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

    public function queryProductModel(Request $request)
    {
        $table_name = $request->table_name;
        $search_value = $request->searchValue;
        $parent_id = $request->parent_id;

        $result_list_data = null;

        if ($table_name == 'brands') {
            $result_list_data = Brand::where([
                                        ['is_active', true],
                                        ['name_en', 'LIKE', "%{$search_value}%"]
                                    ])
                                    ->OrWhere('name_th', 'LIKE', "%{$search_value}%")
                                    ->orderBy('sequence_no')->get();
        } else if ($table_name == 'models') {
            $result_list_data = ProductModel::where([
                                        ['is_active', true],
                                        ['brand_id', $parent_id],
                                        ['name_en', 'LIKE', "%{$search_value}%"]
                                    ])->orderBy('id')->get();
                                    
        } else if ($table_name == 'sub_models') {
            $result_list_data = SubModel::where([
                                        ['is_active', true],
                                        ['model_id', $parent_id],
                                        ['name_en', 'LIKE', "%{$search_value}%"]
                                    ])->orderBy('id')->get();
                                    
        } else if ($table_name == 'issue_years') {
            $result_list_data = IssueYear::where([
                                        ['is_active', true],
                                        ['sub_model_id', $parent_id],
                                        ['from_year', 'LIKE', "%{$search_value}%"]
                                    ])->orderBy('id')->get();
                                    
        } else if ($table_name == 'categories') {
            $result_list_data = Category::where([
                                        ['is_active', true],
                                        ['name_en', 'LIKE', "%{$search_value}%"]
                                    ])->orderBy('id')->get();
                                    
        } else if ($table_name == 'sub_categories') {
            $result_list_data = SubCategory::where([
                                        ['is_active', true],
                                        ['category_id', $parent_id],
                                        ['name_en', 'LIKE', "%{$search_value}%"]
                                    ])->orderBy('id')->get();
                                     
        } else if ($table_name == 'sub_sub_categories') {
            $result_list_data = SubSubCategory::where([
                                        ['is_active', true],
                                        ['sub_category_id', $parent_id],
                                        ['name_en', 'LIKE', "%{$search_value}%"]
                                    ])->orderBy('id')->get();
                                     
        }

        return $result_list_data;

    }


    public function createProductInfo(Request $request)
    {
        $data = $request->all();

        $product_name_en = null;
        $product_name_th = null;

        $brand_data = Brand::select('name_th', 'name_en')->where('id', $data['brand_id'])->first();
        if ($brand_data) {
            $brand_name_en = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $brand_data->name_en); 
            $brand_name_th = $brand_data->name_th; 

            $product_name_en =  $brand_name_en;
            $product_name_th =  $brand_name_th;
        }

        $model_data = ProductModel::select('name_th', 'name_en')->where('id', $data['model_id'])->first();
        if ($model_data) {
            $model_name_en = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $model_data->name_en); 
            $model_name_th = $model_data->name_th; 

            $product_name_en .=  $model_name_en;
            $product_name_th .=  $model_name_th;
        }

        $category_data = Category::select('name_th', 'name_en')->where('id', $data['category_id'])->first();
        if ($category_data) {
            $category_name_en = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $category_data->name_en); 
            $category_name_th = $category_data->name_th; 

            $product_name_en .=  $category_name_en;
            $product_name_th .=  $category_name_th;
        }

        $sub_category_data = SubCategory::select('name_th', 'name_en')->where('id', $data['sub_category_id'])->first();
        if ($sub_category_data) {
            $sub_category_name_en = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $sub_category_data->name_en); 
            $sub_category_name_th = $sub_category_data->name_th;

            $product_name_en .=  ' '. $sub_category_name_en;
            $product_name_th .=  ' '. $sub_category_name_th;
        }        

        $sub_sub_category_data = SubSubCategory::select('name_th', 'name_en')->where('id', $data['sub_sub_category_id'])->first();
        if ($sub_sub_category_data) {
            $sub_sub_category_name_en = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $sub_sub_category_data->name_en); 
            $sub_sub_category_name_th = $sub_sub_category_data->name_th; 

            $product_name_en .= ' '. $sub_sub_category_name_en;
            $product_name_th .= ' '. $sub_sub_category_name_th;
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

        return view('supplier.product.product-info', 
                compact('data', 'product_name_en', 'product_name_th', 'product_qualities',
                        'day_month_year', 'units', 'uoms', 'transport_type_array'));

    }

    // store data
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
                'price' => 'required',
                'brand_id' => 'required',                
                'category_id' => 'required',
            ]);
        } else {
            $validator = Validator::make($data, [
                'name_th' => ['required', 'max:191'],
                'name_en' => ['required', 'max:191'],
                'image' => 'required',
                'price' => 'required',
                'brand_id' => 'required',                
                'category_id' => 'required',                
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $isWarranty = $data['is_warranty'];

        if ($isWarranty) {
            $validator = Validator::make($data, [
                'duration' => 'required',                
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $isDeliver = $data['is_deliver'];

        if (!$isDeliver) {
            $validator = Validator::make($data, [
                'estimated_days' => 'required',                
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        // validation 

        $supplier_id = Auth::guard('supplier')->user()->id;
        $supplier_name = Auth::guard('supplier')->user()->name;

        $data['trading_name'] = isset($data['trading_name'])? $data['trading_name']:$data['name_en'];
        $data['supplier_id'] = $supplier_id;
        $data['status_code'] = 'selling';
        $data['is_active'] = 1;
        $data['created_by'] = $supplier_name;
        $data['updated_by'] = $supplier_name;
        $product_image = $data['image'];
        $transport_type_id = isset($data['transport_type_id'])? $data['transport_type_id']:null;

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
            $transport_data['product_id'] =  $product_data->id;
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

        if ($transport_type_id) {
            foreach ($transport_type_id as $j => $transport_id) {

                $transport_data['transport_type_id'] = $transport_type_id[$j];
                Transportation::create($transport_data);
            }
        } else {
            Transportation::create($transport_data);
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

        return redirect()->route('products.edit', $id)->with('message', 'Product created successfully');

    }


    public function edit($id)
    {
        $data = DB::table('products')->where('id', $id)->first();
        
        $brand_list_data = DB::table('brands')->where('is_active', true)
                                            ->orderBy('sequence_no')
                                            ->get();
        
        $product_image = DB::table('product_images')->where('product_id', $id)->pluck('image', 'line_item_no');
        $warranty = DB::table('warranties')->where('product_id', $id)->first();
        $transport = DB::table('transportations')->where('product_id', $id)->first();
        $transport_type_ids = DB::table('transportations')->where('product_id', $id)->pluck('transport_type_id', 'id')->toArray();

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
                'name' => 'J&T Express',
                'estimate_fee' => 40.00
            ]
        );

        // foreach ($product_image as $key => $value) {
        //     $img = \File::get(url('product/images/' . $value));
            
        // }

        return view('supplier.product.product-edit', 
                compact('data', 'brand_list_data', 'product_image',
                    'warranty', 'transport', 'transport_type_array',
                    'product_qualities', 'day_month_year', 'units',
                    'uoms', 'transport_type_ids'));
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
                'price' => 'required',
            ]);
        } else {
            $validator = Validator::make($data, [
                'name_th' => ['required', 'max:191'],
                'name_en' => ['required', 'max:191'],
                'image' => 'required',
                'price' => 'required',               
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $isWarranty = $data['is_warranty'];

        if ($isWarranty) {
            $validator = Validator::make($data, [
                'duration' => 'required',                
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $isDeliver = $data['is_deliver'];

        if (!$isDeliver) {
            $validator = Validator::make($data, [
                'estimated_days' => 'required',                
            ]);
        }

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        // validation 

        $supplier_name = Auth::guard('supplier')->user()->name;

        $data['updated_by'] = $supplier_name;
        $product_image = $data['image'];
        $transport_type_id = isset($data['transport_type_id'])? $data['transport_type_id']:null;

        $warranty = [];
        $transport_data = [];
        $old_transport_id = [];
        $old_image = [];
        $image_data = [];

        $product_data = Product::findOrFail($id);

        // update product data
        if ($product_data) {

            $product_image_data = ProductImage::where('product_id', $id)->get();
            $transport_list_data = Transportation::where([
                                                        ['product_id', $id],
                                                        ['transport_type_id', '<>', 0]
                                                    ])->get();

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
                foreach ($transport_list_data as $x => $transport) {
                    $old_transport_id[] = $transport->transport_type_id;

                    if ( !(in_array($old_transport_id[$x], $transport_type_id)) ){
                        $transport->delete();
                    }
                }
            }

            // create or update transport coompany
                $transport_data['product_id'] =  $product_data->id;
                $transport_data['weight'] = $data['weight'];
                $transport_data['unit'] = $data['unit'];
                $transport_data['width'] = $data['width'];
                $transport_data['length'] = $data['length'];
                $transport_data['height'] = $data['height'];
                $transport_data['uom'] = $data['uom'];
                $transport_data['is_deliver'] = $data['is_deliver'];
                $transport_data['estimated_days'] = isset($data['estimated_days']) ? $data['estimated_days'] : null;
                $transport_data['updated_by'] = $data['updated_by'];

            if ($transport_type_id) {
                foreach ($transport_type_id as $j => $transport_id) {

                    $transport_data['transport_type_id'] = $transport_type_id[$j];

                    if (in_array($transport_id, $old_transport_id)) {
                        Transportation::where([
                                                ['product_id', $id],
                                                ['transport_type_id', $transport_id]
                                            ])->update($transport_data);
                    } else {
                        $transport_data['created_by'] = $data['updated_by'];
                        Transportation::create($transport_data);
                    }
                }
            } else {
                Transportation::where([
                                        ['product_id', $id],
                                        ['transport_type_id', 0]
                                    ])->update($transport_data);
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
                foreach ($product_image as $i => $image_name) {

                    $image_data['product_id'] =  $product_data->id;
                    $image_data['line_item_no'] = $i + 1;
                    $image_data['image'] = $product_image[$i];
                    $image_data['updated_by'] = $data['updated_by'];

                    if (in_array($image_name, $old_image)) {
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

        Session::flash('message', 'Update product successfully');

        return redirect()->route('products.index', ['status_code' => 'all']);
        
    }

    // copy product
    public function copyProduct(Request $request, $id)
    {
        $copyType = $request->copyType;
        
        $data = DB::table('products')->where('id', $id)->first();
        $category_list_data = DB::table('categories')->where('is_active', true)->get();        
        $transport_type_ids = DB::table('transportations')->where('product_id', $id)->pluck('transport_type_id', 'id')->toArray();

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
                'name' => 'J&T Express',
                'estimate_fee' => 40.00
            ]
        );

        \Session::flash('message', 'Copy product successfully.');

        if ($copyType == 'same_category') {
            
            $product_image = DB::table('product_images')->where('product_id', $id)->pluck('image', 'line_item_no');
            $warranty = DB::table('warranties')->where('product_id', $id)->first();
            $transport = DB::table('transportations')->where('product_id', $id)->first();

            return view('supplier.product.product-copy-same-category', 
            compact('data', 'product_image', 'warranty', 'transport', 
                    'transport_type_array', 'product_qualities', 'day_month_year',
                    'units', 'uoms', 'transport_type_ids'));

        } else {
            
            $brand_name = DB::table('brands')->select('name_th', 'name_en')->where('id', $data->brand_id)->first();
            $model_name = DB::table('models')->select('name_th', 'name_en')->where('id', $data->model_id)->first();

            return view('supplier.product.product-copy-diff-category', 
            compact('data', 'category_list_data', 'transport_type_array', 'product_qualities',
                     'day_month_year',  'units', 'uoms', 'brand_name', 'model_name'));

        }

    }


    public function destroy($id)
    {
        //
    }

    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
    
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('products/images'), $imageName);
    
        return $imageName;
    }

    public function dropzoneRemove(Request $request)
    {
        $imageName = $request->imageName;
        $product_image = ProductImage::where('image', $imageName)->first();
        if ($product_image) {
            $product_image->delete();
            unlink('products/images/'. $imageName);
        } else {
            if ($imageName) {
                unlink('products/images/'. $imageName);
            }
        }

        return 'success';
    }
}
