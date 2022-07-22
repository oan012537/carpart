<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Buyer\ProductReview;
use App\Models\Buyer\BuyerProductBookmark;

class ProductDetailController extends Controller
{
    public function index($name, $id)
    {
        $data['product'] = Product::where('products.id', $id)
            //->where('products.status_code','!=','cancle')
            ->with('brand', 'model', 'category', 'subCategory', 'subSubCategory', 
            'warranty', 'productReviews', 'productImages', 'transportation', 'supplier')
            ->first();
        
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

        // -- สินค้าที่สนใจ
        $data['product_bookmark_check'] = BuyerProductBookmark::where('users_buyer_id', Auth::guard('buyer')->user()->id)
            ->where('product_id', $data['product']->id)
            ->first();
        $data['product_bookmark'] = BuyerProductBookmark::where('users_buyer_id', Auth::guard('buyer')->user()->id)
            ->whereNotIn('product_id',[$data['product']->id])
            ->with('product')
            ->orderby('updated_at','desc')
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
         
        return view('buyer.product.productdetail.index', $data);
    }

    public function product_bookmark($id)
    {
        DB::beginTransaction();
        try {   
            $user_buyer_id = "";      
            if(!is_null(Auth::guard('buyer')->user())){
                $user_buyer_id = Auth::guard('buyer')->user()->id;
                $bookmark = BuyerProductBookmark::where('users_buyer_id', $user_buyer_id)
                    ->where('product_id', $id)
                    ->first();
                    
                if(is_null($bookmark)){
                    BuyerProductBookmark::create([
                        'users_buyer_id' => $user_buyer_id ,
                        'product_id' => $id,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ]);
                    $message = "ยกเลิก สนใจสินค้าตัวนี้";
                }else{
                    DB::table('buyer_product_bookmarks')->where('id', $bookmark->id)->delete();
                    $message = "สนใจสินค้าตัวนี้";
                }
                $status = 200;
                // $message = "Save Complate";
            }else{
                $status = 404;
                $message = "please login";
            }

            DB::commit();
            return response()->json([
                'status' => $status,
                'message' => $message,
            ]);
        } catch (\Exception $e) {
            DB::rollback();
        }
        
    }
}
