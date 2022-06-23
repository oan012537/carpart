<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settinguser_permission extends Model
{
    use HasFactory;
    protected $table = 'users_permission';
    protected $primaryKey = 'permission_id';
}
