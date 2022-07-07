<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

    protected $fillable = [
        "zip_code",
        "name_th",
        "name_en",
        "amphure_id"
    ];
}
