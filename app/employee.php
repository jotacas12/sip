<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'identification',
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
        'idcontracts',
        'sex',
        'id_depart',
        'id_charge',
        'Users_idUsers',
        'name_user',
        'last_name',

    ];
}
