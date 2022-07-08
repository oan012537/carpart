<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable =[
        "category_id",
        "code",
        "name_th",
        "name_en",
        "image",
        "is_active",
        "created_by",
        "updated_by",
    ];
}
