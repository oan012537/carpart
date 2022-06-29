<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubModel extends Model
{
    protected $fillable =[
        "brand_id",
        "model_id",
        "code",
        "name_th",
        "name_en",
        "image",
        "is_active",
        "created_by",
        "updated_by",
    ];
}
