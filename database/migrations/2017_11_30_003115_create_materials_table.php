<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_profile')->unsigned(); //id perfil
            $table->integer('save')->unsigned(); //guardar
            $table->integer('update')->unsigned(); //Atualizar
            $table->integer('delete')->unsigned(); //Eliminar
            $table->timestamps();

            $table->foreign('id_profile')->references('id_list')->on('profile_lis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
