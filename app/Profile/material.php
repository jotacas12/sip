<?php

namespace App\Profile;

use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    protected $fillable = [
        'id_profile',
        'save',
        'update',
        'delete',

    ];
}
