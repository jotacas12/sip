<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiales';
    protected $primaryKey = 'idmateriales';
    protected $fillable = [
        'code',
        'state',
        'input_type',
        'serie',
        'average_value',
        'minimum_inventory',
        'iva',
        'description',
    ];
}
