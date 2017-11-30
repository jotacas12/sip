<?php

namespace App\Profile;

use Illuminate\Database\Eloquent\Model;

class income extends Model
{
    protected $fillable = [
        'profile',
        'save',
        'update',
        'delete',
        'vlor',
    ];
}
