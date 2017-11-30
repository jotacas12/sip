<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->integer('profile')->unsigned(); //id perfil
            $table->integer('materials')->unsigned(); //id perfil
            $table->integer('dispatches')->unsigned(); //id perfil
            $table->integer('traslados')->unsigned(); //id perfil
            $table->integer('income')->unsigned(); //id perfil
            $table->integer('purchase')->unsigned(); //id perfil
            $table->timestamps();

            $table->foreign('materials')->references('profile')->on('materials');
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
        Schema::dropIfExists('menus');
    }
}
