<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany('App\Models\Backend\Bannerimage');
    }
}
