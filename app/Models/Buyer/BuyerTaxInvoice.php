<?php

namespace App\Models\Buyer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerTaxInvoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_buyer_id',
        'name',
        'texid',
        'address',
        'province',
        'amphure',
        'district',
        'postcode',
        'is_active',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public function userBuyer()
    {
        return $this->belongsTo('App\Models\Buyer\mUsers_buyer', 'users_buyer_id');
    }
}
