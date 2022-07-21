<?php

namespace App\Models\Buyer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerProductBookmark extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_buyer_id',
        'product_id',
        'created_at',
        'updated_at',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function userBuyer()
    {
        return $this->belongsTo('App\Models\Buyer\mUsers_buyer', 'users_buyer_id');
    }
}
