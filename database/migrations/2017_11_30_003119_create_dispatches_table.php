<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //despachos
        Schema::create('dispatches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_profile')->unsigned(); //id perfil
            $table->integer('save')->unsigned(); //guardar
            $table->integer('update')->unsigned(); //Atualizar
            $table->integer('delete')->unsigned(); //Eliminar
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispatches');
    }
}
