<?php
namespace App;

use App\P_profiles;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
<<<<<<< HEAD
    protected $fillable = [
=======
    protected $primaryKey = 'idemployees';
    protected $fillable   = [
        'identification',
>>>>>>> e5b8aaffdd4ada777449d5248f52f82799e3188e
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

    public function profile()
    {
        return $this->belongsTo(P_profiles::class);
    }
}
