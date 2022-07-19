<?php

namespace App\Models\Buyer;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class mUsers_buyer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'users_buyer';
    protected $fillable = [
        'email',
        'password',
        'type',
        'profile_name',
        'first_name',
        'last_name',
        'company_name',
        'vat_id',
        'phone',
        'social_id',
        'social_type',
        'created_at',
        'updated_at'
    ];
    public $timestamps = false;
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function buyerProfiles()
    {
        return $this->hasMany('App\Models\Buyer\BuyerProfile', 'users_buyer_id');
    }

    public function buyerTaxInvoices()
    {
        return $this->hasMany('App\Models\Buyer\BuyerTaxInvoice', 'users_buyer_id');
    }

    public function buyerBanks()
    {
        return $this->hasMany('App\Models\Buyer\BuyerBank', 'users_buyer_id');
    }

}
