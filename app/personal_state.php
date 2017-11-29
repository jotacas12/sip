<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal_state extends Model
{
    protected $fillable = [
        'active', 'cancelled',
    ];
}
