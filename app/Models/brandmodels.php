<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brandmodels extends Model
{
    use HasFactory;
    protected $table = 'brand_models';
    protected $primaryKey = 'models_id';
}
