<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'category',
        'position',
        'experience',
        'skills',
        'location',
        'salary',
        'description',
        'status',
    ];
}
