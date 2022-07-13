<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        "supplier_id",
        "store_name",
        "address",
        "country",
        "city",
        "province",
        "amphure",
        "district",
        "postcode",
        "googlemap",
        "is_active",
        "created_by",
        "updated_by"
    ];

    public function Province()
    {
    	return $this->belongsTo('App\Models\Province', 'province');
    }

    public function Amphure()
    {
    	return $this->belongsTo('App\Models\Amphure', 'amphure');
    }

    public function District()
    {
    	return $this->belongsTo('App\Models\District', 'district');
    }
}
