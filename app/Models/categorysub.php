<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorysub extends Model
{
    use HasFactory;
    protected $table = 'category_sub';
    protected $primaryKey = 'categorysub_id';
}
