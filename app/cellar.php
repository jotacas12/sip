<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cellar extends Model
{
    protected $fillable = [
        'name_cellar', 'id_company',
    ];
}
