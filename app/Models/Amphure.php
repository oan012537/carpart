<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amphure extends Model
{
    protected $table = 'amphures';

    protected $fillable = [
        "code",
        "name_th",
        "name_en",
        "province_id"
    ];

}
