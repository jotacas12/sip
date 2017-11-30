<?php

namespace App\Profile;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $fillable = [
        'profile',
        'save',
        'update',
        'delete',
        'vlor',

    ];
}
