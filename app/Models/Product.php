<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        "brand_id",
        "model_id",
        "sub_model_id",
        "issue_year_id",
        "category_id",
        "sub_category_id",
        "sub_sub_category_id",
        "product_code",
        "product_type", 
        "name_th",
        "name_en",
        "trading_name",
        "grade",
        "marker",
        "sku_code",
        "quality",
        "shop_original_code",
        "vin_code",
        "full_model_code",
        "engine_model_code",
        "color",
        "trim",
        "is_warranty",
        "term_and_condition",
        "price",
        "commission",
        "revenue",
        "qty",
        "status_code",
        "salesman_code",
        "is_active",
        "created_by",
        "updated_by",
    ];

    public function brand()
    {
    	return $this->belongsTo('App\Models\Brand', 'brand_id');
    }

    public function model()
    {
    	return $this->belongsTo('App\Models\ProductModel', 'model_id');
    }

    public function subModel()
    {
    	return $this->belongsTo('App\Models\SubModel', 'sub_model_id');
    }

    public function issueYear()
    {
    	return $this->belongsTo('App\Models\IssueYear', 'issue_year_id');
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function subCategory()
    {
    	return $this->belongsTo('App\Models\SubCategory', 'sub_category_id');
    }

    public function subSubCategory()
    {
    	return $this->belongsTo('App\Models\SubSubCategory', 'sub_sub_category_id');
    }


}
