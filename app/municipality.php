<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipality extends Model
{
    protected $fillable = [
        'name_municipality',
        'id_departament',
    ];
}
