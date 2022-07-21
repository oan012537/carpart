<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdpa extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'title', 'type', 'grouptypecpn', 'datestart', 'details', 'created_by'
    ];
}
