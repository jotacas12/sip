<?php

namespace App\Profile;

use Illuminate\Database\Eloquent\Model;

class dispatche extends Model
{
    protected $fillable = [
        'id_profile',
        'save',
        'update',
        'delete',
    ];
}
