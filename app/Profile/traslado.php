<?php

namespace App\Profile;

use Illuminate\Database\Eloquent\Model;

class traslado extends Model
{
    protected $fillable = [
        'profile',
        'save',
        'update',
        'delete',

    ];
}
