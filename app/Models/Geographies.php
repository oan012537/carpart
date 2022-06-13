<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geographies extends Model
{
    use HasFactory;
    protected $table = 'geographies';
    protected $primaryKey = 'id';
}
