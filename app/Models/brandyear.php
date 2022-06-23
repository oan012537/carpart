<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brandyear extends Model
{
    use HasFactory;
    protected $table = 'brand_year';
    protected $primaryKey = 'year_id';
}
