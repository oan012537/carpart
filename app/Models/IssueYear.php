<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueYear extends Model
{
    protected $fillable =[
        "sub_model_id",
        "from_year",
        "to_year",
        "master_data",
        "is_active",
        "created_by",
        "updated_by",
    ];
}
