<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brandmodel extends Model
{
    protected $table = 'models';

    protected $fillable =[
        "code",
        "name_th",
        "name_en",
        "image",
        "is_active",

    ];
}
