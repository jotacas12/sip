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
            $table->integer('identification')->unsigned(); //cedula
            $table->string('name_profile'); // tipo cuenta bancaria
            $table->timestamps();

            $table->foreign('id')->references('profile')->on('materials');
            $table->foreign('id_profile', 'id')->references('profile')->on('traslados');
            $table->foreign('id')->references('profile')->on('dispatches');
            $table->foreign('id')->references('profile')->on('incomes');
            $table->foreign('id')->references('profile')->on('purchases');
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
