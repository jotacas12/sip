<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_company')->unsigned();
            $table->integer('contract_type')->unsigned();
            $table->integer('extensions')->unsigned();
            $table->date('start_date');
            $table->date('final_date');
            $table->integer('id_cargo')->unsigned();
            $table->integer('salary')->unsigned();
            $table->integer('for_distance')->unsigned();
            $table->integer('per_bearing')->unsigned();
            $table->integer('fixed_bonus')->unsigned();
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
        Schema::dropIfExists('contracts');
    }
}
