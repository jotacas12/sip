<?php

namespace App\Profile;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $fillable = [
        'profile',
        'materials',
        'dispatches',
        'traslados',
        'income',
        'purchase',

    ];
}
