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

            $table->integer('save')->unsigned(); //guardar
            $table->integer('update')->unsigned(); //Atualizar
            $table->integer('delete')->unsigned(); //Eliminar
            $table->integer('profile')->unsigned(); //id perfil
            $table->timestamps();
            $table->primary('profile');
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
