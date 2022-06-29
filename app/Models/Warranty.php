<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    protected $fillable =[
        "product_id",
        "duration",
        "year_month_day",
        "term_and_condition",
        "created_by",
        "updated_by",
    ];
}
