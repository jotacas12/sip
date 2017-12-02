<?php

use App\Listas;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'id_identification' => 1039679695,
        'email'             => 'sistemas@grupoempresarialcyc.com',
        'password'          => '1234Abc',

    ];

});

$factory->define(App\Listas::class, function (Faker\Generator $faker) {
    static $password;

    $array = array('BANCOS',
        'EPS',
        'PENSION',
        'CARGOS',
        'SEXO',
        'ESTADO',
        'ARL',
        'LOCALIZACION',
        'CLASIFICACION',
        'TIPO CONTRATOS');
    $longitud = count($array);

    for ($i = 0; $i < $longitud; $i++) {
        //saco el valor de cada elemento
        return [

            'name' => $array[$i],

        ];
    }

});
