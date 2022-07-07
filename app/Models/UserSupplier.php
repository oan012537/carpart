<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserSupplier extends Authenticatable
{
    use Notifiable;
    protected $table = 'user_suppliers';
    
    protected $guard = 'supplier';

    protected $fillable = [
       'name', 
       'email',
       'password',
       'role_id',
       'phone',
       'is_active'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
