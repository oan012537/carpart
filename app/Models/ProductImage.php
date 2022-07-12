<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'line_item_no',
        'image',
        'created_by',
        'updated_by'
    ];

    public function product()
    {
    	return $this->belongsTo('App\Models\Product');
    }
}
