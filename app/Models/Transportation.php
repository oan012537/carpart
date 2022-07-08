<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    protected $fillable =[
        "product_id",
        "weight",
        "unit",
        "length",
        "width",
        "height",
        "uom",
        "delivery_type", // need to check
        "is_deliver",
        "estimated_days",
        "created_by",
        "updated_by",
    ];
}
