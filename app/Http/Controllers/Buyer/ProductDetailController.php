<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Buyer\ProductReview;

class ProductDetailController extends Controller
{
    public function index($name, $id)
    {
        $data['product'] = Product::where('products.id', $id)
            //->where('products.status_code','!=','cancle')
            ->with('brand', 'model', 'category', 'subCategory', 'subSubCategory', 'productReviews')
            ->first();

        $data['product_image'] = ProductImage::where('product_id', $data['product']->id)
            ->orderby('line_item_no', 'asc')
            ->get();

        // -- สินค้าจากแบรนด์เดียวกัน    
        $data['products_brand'] = Product::where('products.brand_id', $data['product']->brand->id)
            ->where('products.id', '!=' , $id)
            ->orderby('products.updated_at', 'desc')
            ->with('brand', 'model', 'category', 'subCategory', 'subSubCategory' , 'subModel')
            ->paginate(8);   

        // -- สินค้าใกล้เคียง
        $data['products_subSubCategory'] = Product::where('products.sub_sub_category_id', $data['product']->subSubCategory->id)
            ->where('products.id', '!=' , $id)
            ->orderby('products.updated_at', 'desc')
            ->with('brand', 'model', 'category', 'subCategory', 'subSubCategory', 'subModel')
            ->paginate(8);

        // -- อะไหล่อื่นๆจากรถรุ่นเดียวกัน (แทบ 3)
        $data['products_subModel'] = Product::where('products.sub_model_id', $data['product']->subModel->id)
            ->where('products.id', '!=' , $id)
            ->orderby('products.updated_at', 'desc')
            ->with('brand', 'model', 'category', 'subCategory', 'subSubCategory', 'subModel')
            ->paginate(12);
        
        

        //-- รีวิวทั้งหมด
        $review_score_all = $product_review = ProductReview::where('product_id', $data['product']->id);
        $data['review_score_all_count'] = $review_score_all->count();
        $data['review_score_all'] = $review_score_all->orderby('created_at', 'desc')->paginate(5);

        //-- คะแนน 1 ดาว
        $review_score_1 = ProductReview::where('product_id', $data['product']->id);
        $review_score_1 = $review_score_1->where('review_score', '1');
        $data['review_score_1_count'] = $review_score_1->count();
        $data['review_score_1'] = $review_score_1->orderby('created_at', 'desc')->paginate(5);

        //-- คะแนน 2 ดาว
        $review_score_2 = ProductReview::where('product_id', $data['product']->id);
        $review_score_2 = $review_score_2->where('review_score', '2');
        $data['review_score_2_count'] = $review_score_2->count();
        $data['review_score_2'] = $review_score_2->orderby('created_at', 'desc')->paginate(5);

        //-- คะแนน 3 ดาว
        $review_score_3 = ProductReview::where('product_id', $data['product']->id);
        $review_score_3 = $review_score_3->where('review_score', '3');
        $data['review_score_3_count'] = $review_score_3->count();
        $data['review_score_3'] = $review_score_3->orderby('created_at', 'desc')->paginate(5);

        //-- คะแนน 4 ดาว
        $review_score_4 = ProductReview::where('product_id', $data['product']->id);
        $review_score_4 = $review_score_4->where('review_score', '4');
        $data['review_score_4_count'] = $review_score_4->count();
        $data['review_score_4'] = $review_score_4->orderby('created_at', 'desc')->paginate(5);

        //-- คะแนน 5 ดาว
        $review_score_5 = ProductReview::where('product_id', $data['product']->id);
        $review_score_5 = $review_score_5->where('review_score', '5');
        $data['review_score_5_count'] = $review_score_5->count();
        $data['review_score_5'] = $review_score_5->orderby('created_at', 'desc')->paginate(5);

        $fullscore = $data['review_score_all_count'] * 5;
        $score = ($data['review_score_1_count'] * 1) + ($data['review_score_2_count'] * 2) + 
        ($data['review_score_3_count'] * 3) + ($data['review_score_4_count'] * 4) + ($data['review_score_5_count'] * 5);

        //-- คำนวณคะแนน
        if($fullscore > 0){
            $review_score_average = ($score/$fullscore)*5; 
        }else{
            $review_score_average = 0;
        }
        $data['review_score_average'] = $review_score_average;
        
        // $review_score_average = number_format($review_score_average,1);
        // list($num, $frac) = explode('.', $review_score_average);
        // $fracPre = substr($frac, 0, 1);
        // if($fracPre > 5){
        //     $fracPre = 5;
        // }else{
        //     $fracPre = 0;
        // } 
        // $data['review_score_average'] = ($num.".".$fracPre) * 1;
        // dd($review_score_average, $data['review_score_average']);

        // === Array ====
        // $data['review_score_1_count'] = 0;
        // $data['review_score_1'] = array();
        // $data['review_score_2_count'] = 0;
        // $data['review_score_2'] = array();
        // $data['review_score_3_count'] = 0;
        // $data['review_score_3'] = array();
        // $data['review_score_4_count'] = 0;
        // $data['review_score_4'] = array();
        // $data['review_score_5_count'] = 0;
        // $data['review_score_5'] = array();

        // foreach($data['review_score_all'] as $key => $review){ 
        //     $review_array = [
        //         'id' => $review->id,
        //         'product_id' => $review->product_id,
        //         'review_detail' => $review->review_detail,
        //         'review_score' => $review->review_score,
        //         'is_active' => $review->is_active,
        //         'created_by' => $review->created_by,
        //         'updated_by' => $review->updated_by,
        //         'created_at' => $review->created_at,
        //         'updated_at' => $review->updated_at,
        //     ];
        //     switch($review->review_score){
        //         case 1 :    $data['review_score_1_count']++;
        //                     $data['review_score_1'][] = $review_array;
        //                     $review_array = "";
        //             break;        
        //         case 2 :    $data['review_score_2_count']++;
        //                     $data['review_score_2'][] = $review_array;
        //                     $review_array = "";
        //             break;
        //         case 3 :    $data['review_score_3_count']++;
        //                     $data['review_score_3'][] = $review_array;
        //                     $review_array = "";
        //             break;  
        //         case 4 :    $data['review_score_4_count']++;
        //                     $data['review_score_4'][] = $review_array;
        //                     $review_array = "";
        //             break;  
        //         case 5 :    $data['review_score_5_count']++;
        //                     $data['review_score_5'][] = $review_array;
        //                     $review_array = "";
        //             break;  
        //     }
        // }
        // === End Array ====

        return view('buyer.product.productdetail.index', $data);
    }
}
