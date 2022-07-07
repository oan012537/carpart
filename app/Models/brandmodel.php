<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brandmodel extends Model
{
<<<<<<< HEAD
    protected $table = 'brand_model';
    protected $primaryKey = 'model_id';
=======
    protected $table = 'models';
>>>>>>> 8b3d0b103678b0c39b5df1cbda6147345c653099

    protected $fillable =[
        "code",
        "name_th",
        "name_en",
        "image",
        "is_active",
    ];
}
