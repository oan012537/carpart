<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amphures extends Model
{
    use HasFactory;
    protected $table = 'amphures';
    protected $primaryKey = 'id';
}
