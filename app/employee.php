<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'id_company',
        'birth_date',
        'phone',
        'id_bank',
        'n_account',
        'account_type',
        'civil_status',
        'idUser',
        'place_of_birth',
        'place_of_work',
        'state',
        'location',
        'eps',
        'arp',
        'pension',
        'id_charge',
        'id_depart',
        'identification',
        'id_sex',
        'id_clasificacion',
        'id_contract',
    ];
}
