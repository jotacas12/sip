<?php
namespace App;

use App\P_profiles;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $primaryKey = 'idemployees';
    protected $fillable   = [
        'identification',
        'id_company',
        'birth_date',
        'phone',
        'id_bank',
        'n_account',
        'account_type',
        'civil_status',
        'place_of_work',
        'state',
        'location',
        'eps',
        'arp',
        'pension',
        'type_contracts',
        'sex',
        'id_depart',
        'id_municipaly',
        'id_charge',
        'name_user',
        'last_name',
        'Photo',
        'id_classification',
    ];

    public function profile()
    {
        return $this->belongsTo(P_profiles::class);
    }
}
