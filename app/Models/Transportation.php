<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    protected $fillable =[
        "product_id",
        "transport_type_id",
        "weight",
        "unit",
        "width",
        "length",
        "height",
        "uom",
        "estimate_fee",
        "is_deliver",
        "estimated_days",
        "created_by",
        "updated_by",
    ];
}
