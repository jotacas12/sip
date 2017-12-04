<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_menu extends Model
{
    protected $table      = 'profile_menu';
    protected $primaryKey = 'idmenu';
    protected $fillable   = [
        'id_profile',
    ];
}
