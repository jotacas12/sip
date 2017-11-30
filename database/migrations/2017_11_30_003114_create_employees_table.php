<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identification')->unsigned(); //cedula
            $table->integer('id_company')->unsigned(); //id empresa
            $table->date('birth_date'); //fecha de cumpleaños
            $table->integer('phone')->unsigned(); //telefono empleado
            $table->integer('id_bank')->unsigned(); //id del banco
            $table->integer('n_account')->unsigned(); //numero de cuenta bancaria
            $table->string('account_type'); // tipo cuenta bancaria
            $table->integer('civil_status')->unsigned(); //estado civil
            $table->integer('place_of_work')->unsigned(); //lugar de labor
            $table->integer('state')->unsigned(); //estado empleado
            $table->integer('location')->unsigned(); //ubicacion
            $table->integer('eps')->unsigned(); //eps
            $table->integer('arp')->unsigned(); //arp
            $table->integer('pension')->unsigned(); //pension
            $table->integer('type_contracts')->unsigned(); //tipo contrato
            $table->integer('sex')->unsigned(); //sexo
            $table->integer('id_depart')->unsigned(); //departamento
            $table->integer('id_municipaly')->unsigned(); //municipio
            $table->integer('id_charge')->unsigned(); //municipio
            $table->string('name_user'); //nombres
            $table->string('last_name'); //apellidos
            $table->string('Photo'); //foto empleado
            $table->integer('id_classification')->unsigned(); //apellidos
            $table->integer('perlfil')->unsigned(); //apellidos
            $table->timestamps();

            $table->foreign('identification')->references('identification')->on('users');
            $table->foreign('perlfil')->references('id')->on('profiles');
            $table->foreign('id_company')->references('id')->on('companies');
            $table->foreign('id_bank')->references('id')->on('banks');
            $table->foreign('state')->references('id')->on('personal_states');
            $table->foreign('eps')->references('id')->on('eps');
            $table->foreign('arp')->references('id')->on('arls');
            $table->foreign('pension')->references('id')->on('pensions');
            $table->foreign('sex')->references('id')->on('sexos');
            $table->foreign('id_depart')->references('id')->on('departments');
            $table->foreign('id_municipaly')->references('id')->on('municipalities');
            $table->foreign('id_charge')->references('id')->on('charges');
            $table->foreign('id_classification')->references('id')->on('classifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
