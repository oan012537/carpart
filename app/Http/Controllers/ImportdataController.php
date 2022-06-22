<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Response;
use Excel;
use File;
use Auth;
use App\Models\category;
use App\Models\categorysub;
use App\Models\categorysubs;
use App\Models\brand;
use App\Models\brandmodel;
use App\Models\brandmodels;
use App\Models\brandyear;

class ImportdataController extends Controller
{
    public function category(){
        return view('importdata',['link'=>'import/category']);
    }

    public function importcategory(Request $request){
        // ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', 3000);
        
        $rows = Excel::toArray(false,$request->file('file'));
        // dd($rows[0]);

        foreach ($rows[0] as $key => $value) {
            // dd($value);
            // if($key > 4 && $key < 13){
            // $type = 'บริษัท';

            if($key > 0 && $key <= 82){
                if($value[1] != '' && $value[2] != ''){
                    $category = new category;
                    $category->category_code = $value[1];
                    $category->category_name_th = $value[2];
                    $category->category_name_en = $value[3];
                    $category->created_for = '';
                    $category->updated_for = '';
                    $category->save();
                    foreach ($rows[1] as $key2 => $value2) {
                        if($key2 > 0 && $key2 <= 203){
                            if($value2[1] != '' && $value2[2] != '' && $value2[3] != ''){
                                if($value[1] == $value2[1]){
                                    $categorysub = new categorysub;
                                    $categorysub->categorysub_categoryid = $category->category_id;
                                    $categorysub->categorysub_code = $value2[2];
                                    $categorysub->categorysub_name_th = $value2[3];
                                    $categorysub->categorysub_name_en = !empty($value2[4])?$value2[4]:'';
                                    $categorysub->created_for = '';
                                    $categorysub->updated_for = '';
                                    $categorysub->save();
                                    foreach ($rows[2] as $key3 => $value3) {
                                        if($key3 > 0 && $key3 <= 296){
                                            if($value3[1] != '' && $value3[2] != '' && $value3[3] != '' && $value3[4] != ''){
                                                if($value[1] == $value3[1] && $value2[2] == $value3[2]){
                                                    $categorysubs = new categorysubs;
                                                    $categorysubs->categorysubs_categoryid = $category->category_id;
                                                    $categorysubs->categorysubs_subid = $categorysub->categorysub_id;
                                                    $categorysubs->categorysubs_code = $value3[3];
                                                    $categorysubs->categorysubs_name_th = $value3[4];
                                                    $categorysubs->categorysubs_name_en = !empty($value3[5])?$value3[5]:'';
                                                    $categorysubs->created_for = '';
                                                    $categorysubs->updated_for = '';
                                                    $categorysubs->save();
                                                }
                                            }
                                        }
                                    }
                                }
                                
                            }
                        }
                        
                        
                    }
                }
            }
        }
        return redirect()->back();
    }

    public function categorysub(){
        return view('importdata',['link'=>'import/categorysub']);
    }

    public function importcategorysub(Request $request){
        // ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', 3000);
        
        $rows = Excel::toArray(false,$request->file('file'));
        dd($rows[1]);

        foreach ($rows[1] as $key => $value) {
            // dd($value);
            // if($key > 4 && $key < 13){
            // $type = 'บริษัท';

            if($key > 4 && $key <= 8064){
                if($value[2] != '' && $value[3] != ''){

                    $checkunit = unit::where('unit_name',$value[6]);
                    $unitid = '';
                    if($value[6] != ''){
                        if($checkunit->count() > 0){
                            $unit = $checkunit->first();
                        }else{
                            $unit = new unit;
                            $unit->unit_code = '';
                            $unit->unit_name = $value[6];
                            $unit->unit_status = 1;
                            $unit->save();
                        }
                        $unitid = $unit->unit_id;
                    }
                    $checkproduct = product::where('product_code',$value[2])->where('product_name',$value[3]);
                    if($checkproduct->count() == 0){
                        $product = new product;
                    }else{
                        $product = $checkproduct->first();
                    }
                    $product->product_type = 1;
                    $product->product_code = $value[2];
                    $product->product_name = $value[3];
                    $product->product_genericname = '';
                    $product->product_secondname = '';
                    $product->product_thirdname = '';
                    $product->product_fourthname = '';
                    $product->product_fifthname = '';
                    $product->product_barcode = '';
                    $product->product_image = '';
                    $product->product_ref9 = '';
                    $product->product_ref10 = '';
                    $product->product_ref11 = '';
                    $product->product_category = '';
                    $product->product_group = '';
                    $product->product_min = $value[8];
                    $product->product_max = $value[9];
                    $product->product_brand = '';
                    $product->product_mainsupplier = '';
                    $product->product_unit = $unitid;
                    // $product->product_price1 = 0;
                    // $product->product_price2 = 0;
                    // $product->product_price3 = 0;
                    // $product->product_price4 = 0;
                    // $product->product_price5 = 0;
                    $product->product_cost = $value[11];
                    $product->product_discount1 = 0;
                    $product->product_discount2 = 0;
                    $product->product_discount3 = 0;
                    $product->product_width = '';
                    $product->product_length = '';
                    $product->product_height = '';
                    $product->product_weight = '';
                    $product->product_grossweight = '';
                    $product->product_location = !empty($value[1])?$value[1]:'';
                    $product->product_comment = '';
                    // $product->product_vatstatus = $request->productvatstatus;
                    // $product->product_pointstatus = $request->productpointstatus;
                    // $product->product_point = $request->productpointnumber;
                    // $product->product_alertqty = $request->productalertqty;
                    // $product->product_statusalert = $request->productalertstatus;
                    // $product->product_haveqty = 0;
                    $product->product_status = 1;
                    // $product->product_statusallowdecimal = $request->productallowdecimal;
                    $product->product_statushotproduct = 0;
                    // $product->product_medcalline1 = $request->productmedcalline1;
                    // $product->product_medcalline2 = $request->productmedcalline2;
                    // $product->product_medcalline3 = $request->productmedcalline3;
                    // $product->product_medcalline4 = $request->productmedcalline4;
                    $product->save();
                    // dd($product);
                    if($unitid != ''){
                        $checkprocessingunit = processingunit::where('processing_productid',$product->product_id)->where('processing_unitid',$unitid);
                        if($checkprocessingunit->count() == 0){
                            $processingunit = new processingunit;
                            $processingunit->processing_productid = $product->product_id;
                            $processingunit->processing_unitid = $unit->unit_id;
                            $processingunit->processing_qty = 1;
                            $processingunit->save();
                        }
                    }
                    
                    if($checkproduct->count() == 0){
                        $check = stock::where('stock_product',$product->product_id)->where('stock_branch',Auth::user()->branch);
                        $checkstock = $check->count();
                        if($checkstock == 0){
                            stockproduct(Auth::user()->branch,1,$product->product_id,(!empty($value[7])?$value[7]:0));
                        }else{
                            $check = $check->first();
                            $stock = stock::find($check->stock_id);
                            $stock->stock_qty = $value[7];
                            $stock->save();
                        }
                        stockmovement(Auth::user()->branch,date('Y-m-d'),0,$product->product_id,0,(!empty($value[7])?$value[7]:0),$value[11],'','',(!empty($value[7])?$value[7]:0),'',Auth::user()->id,'');

                    }else{
                        $check = stock::where('stock_product',$product->product_id)->where('stock_branch',Auth::user()->branch);
                        $checkstock = $check->count();
                        // dd($check);
                        if($checkstock > 0){
                            $check = $check->first();
                            $stock = stock::find($check->stock_id);
                            $stock->stock_qty = $value[7];
                            $stock->save();
                        }else{
                            stockproduct(Auth::user()->branch,1,$product->product_id,(!empty($value[7])?$value[7]:0));
                        }
                        stockmovement(Auth::user()->branch,date('Y-m-d'),0,$product->product_id,0,(!empty($value[7])?$value[7]:0),$value[11],'','',(!empty($value[7])?$value[7]:0),'',Auth::user()->id,'');
                    }
                    
                }else{
                    dd($key,$value);
                }
            }
        }
    }

    public function categorysubs(){
        return view('importdata',['link'=>'import/categorysubs']);
    }

    public function importcategorysubs(Request $request){
        // ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', 3000);
        
        $rows = Excel::toArray(false,$request->file('file'));
        dd($rows[2]);

        foreach ($rows[2] as $key => $value) {
            // dd($value);
            // if($key > 4 && $key < 13){
            // $type = 'บริษัท';

            if($key > 0 && $key <= 11){
                if($value[1] != '' && $value[2] != ''){

                    $checkunit = unit::where('unit_name',$value[6]);
                    $unitid = '';
                    if($value[6] != ''){
                        if($checkunit->count() > 0){
                            $unit = $checkunit->first();
                        }else{
                            $unit = new unit;
                            $unit->unit_code = '';
                            $unit->unit_name = $value[6];
                            $unit->unit_status = 1;
                            $unit->save();
                        }
                        $unitid = $unit->unit_id;
                    }
                    $checkproduct = product::where('product_code',$value[2])->where('product_name',$value[3]);
                    if($checkproduct->count() == 0){
                        $product = new product;
                    }else{
                        $product = $checkproduct->first();
                    }
                    $product->product_type = 1;
                    $product->product_code = $value[2];
                    $product->product_name = $value[3];
                    $product->product_genericname = '';
                    $product->product_secondname = '';
                    $product->product_thirdname = '';
                    $product->product_fourthname = '';
                    $product->product_fifthname = '';
                    $product->product_barcode = '';
                    $product->product_image = '';
                    $product->product_ref9 = '';
                    $product->product_ref10 = '';
                    $product->product_ref11 = '';
                    $product->product_category = '';
                    $product->product_group = '';
                    $product->product_min = $value[8];
                    $product->product_max = $value[9];
                    $product->product_brand = '';
                    $product->product_mainsupplier = '';
                    $product->product_unit = $unitid;
                    // $product->product_price1 = 0;
                    // $product->product_price2 = 0;
                    // $product->product_price3 = 0;
                    // $product->product_price4 = 0;
                    // $product->product_price5 = 0;
                    $product->product_cost = $value[11];
                    $product->product_discount1 = 0;
                    $product->product_discount2 = 0;
                    $product->product_discount3 = 0;
                    $product->product_width = '';
                    $product->product_length = '';
                    $product->product_height = '';
                    $product->product_weight = '';
                    $product->product_grossweight = '';
                    $product->product_location = !empty($value[1])?$value[1]:'';
                    $product->product_comment = '';
                    // $product->product_vatstatus = $request->productvatstatus;
                    // $product->product_pointstatus = $request->productpointstatus;
                    // $product->product_point = $request->productpointnumber;
                    // $product->product_alertqty = $request->productalertqty;
                    // $product->product_statusalert = $request->productalertstatus;
                    // $product->product_haveqty = 0;
                    $product->product_status = 1;
                    // $product->product_statusallowdecimal = $request->productallowdecimal;
                    $product->product_statushotproduct = 0;
                    // $product->product_medcalline1 = $request->productmedcalline1;
                    // $product->product_medcalline2 = $request->productmedcalline2;
                    // $product->product_medcalline3 = $request->productmedcalline3;
                    // $product->product_medcalline4 = $request->productmedcalline4;
                    $product->save();
                    // dd($product);
                    if($unitid != ''){
                        $checkprocessingunit = processingunit::where('processing_productid',$product->product_id)->where('processing_unitid',$unitid);
                        if($checkprocessingunit->count() == 0){
                            $processingunit = new processingunit;
                            $processingunit->processing_productid = $product->product_id;
                            $processingunit->processing_unitid = $unit->unit_id;
                            $processingunit->processing_qty = 1;
                            $processingunit->save();
                        }
                    }
                    
                    if($checkproduct->count() == 0){
                        $check = stock::where('stock_product',$product->product_id)->where('stock_branch',Auth::user()->branch);
                        $checkstock = $check->count();
                        if($checkstock == 0){
                            stockproduct(Auth::user()->branch,1,$product->product_id,(!empty($value[7])?$value[7]:0));
                        }else{
                            $check = $check->first();
                            $stock = stock::find($check->stock_id);
                            $stock->stock_qty = $value[7];
                            $stock->save();
                        }
                        stockmovement(Auth::user()->branch,date('Y-m-d'),0,$product->product_id,0,(!empty($value[7])?$value[7]:0),$value[11],'','',(!empty($value[7])?$value[7]:0),'',Auth::user()->id,'');

                    }else{
                        $check = stock::where('stock_product',$product->product_id)->where('stock_branch',Auth::user()->branch);
                        $checkstock = $check->count();
                        // dd($check);
                        if($checkstock > 0){
                            $check = $check->first();
                            $stock = stock::find($check->stock_id);
                            $stock->stock_qty = $value[7];
                            $stock->save();
                        }else{
                            stockproduct(Auth::user()->branch,1,$product->product_id,(!empty($value[7])?$value[7]:0));
                        }
                        stockmovement(Auth::user()->branch,date('Y-m-d'),0,$product->product_id,0,(!empty($value[7])?$value[7]:0),$value[11],'','',(!empty($value[7])?$value[7]:0),'',Auth::user()->id,'');
                    }
                    
                }else{
                    dd($key,$value);
                }
            }
        }
    }

    public function brand(){
        return view('importdata',['link'=>'import/brand']);
    }

    public function importbrand(Request $request){
        // ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', 3000);
        
        $rows = Excel::toArray(false,$request->file('file'));
        // dd($rows[0]);

        foreach ($rows[0] as $key => $value) {
            // dd($value);
            // if($key > 4 && $key < 13){
            // $type = 'บริษัท';

            if($key > 0 && $key <= 82){
                if($value[1] != '' && $value[2] != ''){
                    $brand = new brand;
                    $brand->brand_code = $value[1];
                    $brand->brand_name_th = $value[2];
                    $brand->brand_name_en = $value[3];
                    $brand->brand_image = 'Brand Logo/'.$value[2].'.png.png';
                    $brand->created_for = '';
                    $brand->updated_for = '';
                    $brand->save();
                }
            }
        }
        return redirect()->back();
    }

    public function brandmodel(){
        return view('importdata',['link'=>'import/brandmodel']);
    }

    public function importbrandmodel(Request $request){
        // ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', 3000);
        
        $rows = Excel::toArray(false,$request->file('file'));
        $brands = brand::all();
        $brand = [];
        foreach($brands as $key => $items){
            $brand[$items->brand_code] = $items;
        }
        // dd($brand,$rows[0]);
        
        foreach ($rows[0] as $key => $value) {
            // dd($value);
            // if($key > 4 && $key < 13){
            // $type = 'บริษัท';

            if($key >= 0  && $key <= 3270){
                if($value[0] != '' && $value[1] != '' && $value[2] != ''){
                    // $brand = brand::where('brand_code',$value[0])->where('brand_name_th',$value[1])->first();
                    if(array_key_exists($value[0],$brand)){
                        $brandid = $brand[$value[0]]['brand_id'];
                    }else{
                        $insert = new brand;
                        $insert->brand_code = $value[1];
                        $insert->brand_name_th = $value[2];
                        $insert->brand_name_en = $value[3];
                        $insert->brand_image = 'Brand Logo/'.$value[2].'.png.png';
                        $insert->created_for = '';
                        $insert->updated_for = '';
                        $insert->save();
                        $brandid = $insert->brand_id;
                    }
                    $brandmodel = new brandmodel;
                    $brandmodel->model_brandid = $brandid;
                    $brandmodel->model_code = $value[2];
                    $brandmodel->model_name_th = $value[3];
                    $brandmodel->model_name_en = $value[4];
                    $brandmodel->created_for = '';
                    $brandmodel->updated_for = '';
                    $brandmodel->save();
                    
                }
            }
        }
        // return redirect()->back();
    }

    public function brandmodels(){
        return view('importdata',['link'=>'import/brandmodels']);
    }

    public function importbrandmodels(Request $request){
        // ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', 3000);
        
        $rows = Excel::toArray(false,$request->file('file'));
        dd($rows[0],$rows[0][8064]);

        foreach ($rows[0] as $key => $value) {
            // dd($value);
            // if($key > 4 && $key < 13){
            // $type = 'บริษัท';

            if($key > 4 && $key <= 8064){
                if($value[2] != '' && $value[3] != ''){

                    $checkunit = unit::where('unit_name',$value[6]);
                    $unitid = '';
                    if($value[6] != ''){
                        if($checkunit->count() > 0){
                            $unit = $checkunit->first();
                        }else{
                            $unit = new unit;
                            $unit->unit_code = '';
                            $unit->unit_name = $value[6];
                            $unit->unit_status = 1;
                            $unit->save();
                        }
                        $unitid = $unit->unit_id;
                    }
                    $checkproduct = product::where('product_code',$value[2])->where('product_name',$value[3]);
                    if($checkproduct->count() == 0){
                        $product = new product;
                    }else{
                        $product = $checkproduct->first();
                    }
                    $product->product_type = 1;
                    $product->product_code = $value[2];
                    $product->product_name = $value[3];
                    $product->product_genericname = '';
                    $product->product_secondname = '';
                    $product->product_thirdname = '';
                    $product->product_fourthname = '';
                    $product->product_fifthname = '';
                    $product->product_barcode = '';
                    $product->product_image = '';
                    $product->product_ref9 = '';
                    $product->product_ref10 = '';
                    $product->product_ref11 = '';
                    $product->product_category = '';
                    $product->product_group = '';
                    $product->product_min = $value[8];
                    $product->product_max = $value[9];
                    $product->product_brand = '';
                    $product->product_mainsupplier = '';
                    $product->product_unit = $unitid;
                    // $product->product_price1 = 0;
                    // $product->product_price2 = 0;
                    // $product->product_price3 = 0;
                    // $product->product_price4 = 0;
                    // $product->product_price5 = 0;
                    $product->product_cost = $value[11];
                    $product->product_discount1 = 0;
                    $product->product_discount2 = 0;
                    $product->product_discount3 = 0;
                    $product->product_width = '';
                    $product->product_length = '';
                    $product->product_height = '';
                    $product->product_weight = '';
                    $product->product_grossweight = '';
                    $product->product_location = !empty($value[1])?$value[1]:'';
                    $product->product_comment = '';
                    // $product->product_vatstatus = $request->productvatstatus;
                    // $product->product_pointstatus = $request->productpointstatus;
                    // $product->product_point = $request->productpointnumber;
                    // $product->product_alertqty = $request->productalertqty;
                    // $product->product_statusalert = $request->productalertstatus;
                    // $product->product_haveqty = 0;
                    $product->product_status = 1;
                    // $product->product_statusallowdecimal = $request->productallowdecimal;
                    $product->product_statushotproduct = 0;
                    // $product->product_medcalline1 = $request->productmedcalline1;
                    // $product->product_medcalline2 = $request->productmedcalline2;
                    // $product->product_medcalline3 = $request->productmedcalline3;
                    // $product->product_medcalline4 = $request->productmedcalline4;
                    $product->save();
                    // dd($product);
                    if($unitid != ''){
                        $checkprocessingunit = processingunit::where('processing_productid',$product->product_id)->where('processing_unitid',$unitid);
                        if($checkprocessingunit->count() == 0){
                            $processingunit = new processingunit;
                            $processingunit->processing_productid = $product->product_id;
                            $processingunit->processing_unitid = $unit->unit_id;
                            $processingunit->processing_qty = 1;
                            $processingunit->save();
                        }
                    }
                    
                    if($checkproduct->count() == 0){
                        $check = stock::where('stock_product',$product->product_id)->where('stock_branch',Auth::user()->branch);
                        $checkstock = $check->count();
                        if($checkstock == 0){
                            stockproduct(Auth::user()->branch,1,$product->product_id,(!empty($value[7])?$value[7]:0));
                        }else{
                            $check = $check->first();
                            $stock = stock::find($check->stock_id);
                            $stock->stock_qty = $value[7];
                            $stock->save();
                        }
                        stockmovement(Auth::user()->branch,date('Y-m-d'),0,$product->product_id,0,(!empty($value[7])?$value[7]:0),$value[11],'','',(!empty($value[7])?$value[7]:0),'',Auth::user()->id,'');

                    }else{
                        $check = stock::where('stock_product',$product->product_id)->where('stock_branch',Auth::user()->branch);
                        $checkstock = $check->count();
                        // dd($check);
                        if($checkstock > 0){
                            $check = $check->first();
                            $stock = stock::find($check->stock_id);
                            $stock->stock_qty = $value[7];
                            $stock->save();
                        }else{
                            stockproduct(Auth::user()->branch,1,$product->product_id,(!empty($value[7])?$value[7]:0));
                        }
                        stockmovement(Auth::user()->branch,date('Y-m-d'),0,$product->product_id,0,(!empty($value[7])?$value[7]:0),$value[11],'','',(!empty($value[7])?$value[7]:0),'',Auth::user()->id,'');
                    }
                    
                }else{
                    dd($key,$value);
                }
            }
        }
    }

    public function brandyear(){
        return view('importdata',['link'=>'import/brandyear']);
    }

    public function importbrandyear(Request $request){
        // ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', 3000);
        
        $rows = Excel::toArray(false,$request->file('file'));
        dd($rows[0],$rows[0][8064]);

        foreach ($rows[0] as $key => $value) {
            // dd($value);
            // if($key > 4 && $key < 13){
            // $type = 'บริษัท';

            if($key > 4 && $key <= 8064){
                if($value[2] != '' && $value[3] != ''){

                    $checkunit = unit::where('unit_name',$value[6]);
                    $unitid = '';
                    if($value[6] != ''){
                        if($checkunit->count() > 0){
                            $unit = $checkunit->first();
                        }else{
                            $unit = new unit;
                            $unit->unit_code = '';
                            $unit->unit_name = $value[6];
                            $unit->unit_status = 1;
                            $unit->save();
                        }
                        $unitid = $unit->unit_id;
                    }
                    $checkproduct = product::where('product_code',$value[2])->where('product_name',$value[3]);
                    if($checkproduct->count() == 0){
                        $product = new product;
                    }else{
                        $product = $checkproduct->first();
                    }
                    $product->product_type = 1;
                    $product->product_code = $value[2];
                    $product->product_name = $value[3];
                    $product->product_genericname = '';
                    $product->product_secondname = '';
                    $product->product_thirdname = '';
                    $product->product_fourthname = '';
                    $product->product_fifthname = '';
                    $product->product_barcode = '';
                    $product->product_image = '';
                    $product->product_ref9 = '';
                    $product->product_ref10 = '';
                    $product->product_ref11 = '';
                    $product->product_category = '';
                    $product->product_group = '';
                    $product->product_min = $value[8];
                    $product->product_max = $value[9];
                    $product->product_brand = '';
                    $product->product_mainsupplier = '';
                    $product->product_unit = $unitid;
                    // $product->product_price1 = 0;
                    // $product->product_price2 = 0;
                    // $product->product_price3 = 0;
                    // $product->product_price4 = 0;
                    // $product->product_price5 = 0;
                    $product->product_cost = $value[11];
                    $product->product_discount1 = 0;
                    $product->product_discount2 = 0;
                    $product->product_discount3 = 0;
                    $product->product_width = '';
                    $product->product_length = '';
                    $product->product_height = '';
                    $product->product_weight = '';
                    $product->product_grossweight = '';
                    $product->product_location = !empty($value[1])?$value[1]:'';
                    $product->product_comment = '';
                    // $product->product_vatstatus = $request->productvatstatus;
                    // $product->product_pointstatus = $request->productpointstatus;
                    // $product->product_point = $request->productpointnumber;
                    // $product->product_alertqty = $request->productalertqty;
                    // $product->product_statusalert = $request->productalertstatus;
                    // $product->product_haveqty = 0;
                    $product->product_status = 1;
                    // $product->product_statusallowdecimal = $request->productallowdecimal;
                    $product->product_statushotproduct = 0;
                    // $product->product_medcalline1 = $request->productmedcalline1;
                    // $product->product_medcalline2 = $request->productmedcalline2;
                    // $product->product_medcalline3 = $request->productmedcalline3;
                    // $product->product_medcalline4 = $request->productmedcalline4;
                    $product->save();
                    // dd($product);
                    if($unitid != ''){
                        $checkprocessingunit = processingunit::where('processing_productid',$product->product_id)->where('processing_unitid',$unitid);
                        if($checkprocessingunit->count() == 0){
                            $processingunit = new processingunit;
                            $processingunit->processing_productid = $product->product_id;
                            $processingunit->processing_unitid = $unit->unit_id;
                            $processingunit->processing_qty = 1;
                            $processingunit->save();
                        }
                    }
                    
                    if($checkproduct->count() == 0){
                        $check = stock::where('stock_product',$product->product_id)->where('stock_branch',Auth::user()->branch);
                        $checkstock = $check->count();
                        if($checkstock == 0){
                            stockproduct(Auth::user()->branch,1,$product->product_id,(!empty($value[7])?$value[7]:0));
                        }else{
                            $check = $check->first();
                            $stock = stock::find($check->stock_id);
                            $stock->stock_qty = $value[7];
                            $stock->save();
                        }
                        stockmovement(Auth::user()->branch,date('Y-m-d'),0,$product->product_id,0,(!empty($value[7])?$value[7]:0),$value[11],'','',(!empty($value[7])?$value[7]:0),'',Auth::user()->id,'');

                    }else{
                        $check = stock::where('stock_product',$product->product_id)->where('stock_branch',Auth::user()->branch);
                        $checkstock = $check->count();
                        // dd($check);
                        if($checkstock > 0){
                            $check = $check->first();
                            $stock = stock::find($check->stock_id);
                            $stock->stock_qty = $value[7];
                            $stock->save();
                        }else{
                            stockproduct(Auth::user()->branch,1,$product->product_id,(!empty($value[7])?$value[7]:0));
                        }
                        stockmovement(Auth::user()->branch,date('Y-m-d'),0,$product->product_id,0,(!empty($value[7])?$value[7]:0),$value[11],'','',(!empty($value[7])?$value[7]:0),'',Auth::user()->id,'');
                    }
                    
                }else{
                    dd($key,$value);
                }
            }
        }
    }


}
