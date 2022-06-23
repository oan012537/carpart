<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorysubs extends Model
{
    use HasFactory;
    protected $table = 'category_subs';
    protected $primaryKey = 'categorysubs_id';
}
