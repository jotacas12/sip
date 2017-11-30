<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {

            $table->integer('save')->unsigned(); //guardar
            $table->integer('update')->unsigned(); //Atualizar
            $table->integer('delete')->unsigned(); //Eliminar
            $table->integer('valr')->unsigned(); //modificar precio
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
        Schema::dropIfExists('incomes');
    }
}
