<?php

namespace App\Models\Buyer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_buyer_id',
        'product_id',
        'review_detail',
        'review_score',
        'is_active',
        'created_by',
        'updated_by'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
