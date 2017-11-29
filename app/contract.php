<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    protected $fillable = [
        'id_company',
        'contract_type',
        'extensions',
        'start_date',
        'final_date',
        'position',
        'salary',
        'for_distance',
        'per_bearing',
        'fixed_bonus',
    ];
}
