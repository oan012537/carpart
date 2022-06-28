<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brandmodel extends Model
{
    use HasFactory;
    protected $table = 'brand_model';
    protected $primaryKey = 'model_id';
}
