<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        "sku_code",
        "product_type",
        "name_th",
        "name_en",
        "trading_name",
        "video",
        "quality",
        "shop_original_code",
        "vin_code",
        "full_model_code",
        "engine_model_code",
        "trim",
        "color",
        "is_warranty",
        "price",
        "commission",
        "revenue",
        "qty",
        "status_code",
        "is_active",
        "created_by",
        "updated_by",
    ];
}
