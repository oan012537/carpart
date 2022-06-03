<?php

namespace App\Models\Buyer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mUsers_buyer extends Model
{
    use HasFactory;
    protected $table = 'users_buyer';
    protected $primaryKey = 'id';

    // protected $guard = 'buyer';

    protected $fillable = [
        'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;
}
