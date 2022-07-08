<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        "code",
        "name_th",
        "name_en",
        "image",
        "is_active",
        "created_by",
        "updated_by",
    ];
    
    
}
