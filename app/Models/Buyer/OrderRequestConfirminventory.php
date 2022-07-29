<?php

namespace App\Models\Buyer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderRequestConfirminventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_buyer_id',
        'supplier_id',
        'product_id',
        'product_name',
        'product_price',
        'request_vdo',
        'image',
        'vincode',
        'buyer_profile_id',
        'destination',
        'destination_phone',
        'destination_email',
        'transport_by',
        'is_tax',
        'buyer_tax_invoice_id',
        'taxid',
        'taxinvoice_company',
        'taxinvoice_address',
        'taxinvoice_phone',
        'status',
        'pending_date',
        'approved_date',
        'canceled_date',
        'canceled_by',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function productImages()
    {
        return $this->hasMany('App\Models\ProductImage', 'product_id', 'product_id');
    }
}
