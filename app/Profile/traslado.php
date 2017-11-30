<?php

namespace App\Profile;

use Illuminate\Database\Eloquent\Model;

class traslado extends Model
{
    protected $fillable = [
        'id_profile',
        'save',
        'update',
        'delete',

    ];
}
