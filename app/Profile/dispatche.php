<?php

namespace App\Profile;

use Illuminate\Database\Eloquent\Model;

class dispatche extends Model
{
    protected $fillable = [
        'profile',
        'save',
        'update',
        'delete',
    ];
}
