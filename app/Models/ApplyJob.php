<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    protected $fillable = [
        'careers_id',
        'name',
        'email',
        'phone_no',
        'summary',
        'resume',
    ];
}
