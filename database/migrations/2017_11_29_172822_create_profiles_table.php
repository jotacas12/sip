<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_profile'); //nombre perfil
            $table->integer('identification')->unsigned(); //cedula
            $table->timestamps();

            $table->foreign('idP_profiles')->references('id')->on('P_materials');
            $table->foreign('idP_profiles')->references('id')->on('dispatches');
            $table->foreign('idP_profiles')->references('id')->on('traslados');
            $table->foreign('idP_profiles')->references('id')->on('income');
            $table->foreign('idP_profiles')->references('id')->on('purchase');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
