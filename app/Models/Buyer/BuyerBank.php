<?php

namespace App\Models\Buyer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerBank extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_buyer_id',
        'banks_accountnumber',
        'banks_accountname',
        'banks_name',
        'banks_branch',
        'banks_type',
        'banks_refimage',
        'banks_active',
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
