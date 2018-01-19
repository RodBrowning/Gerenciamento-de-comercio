<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Caixa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caixa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tipo_mov_id');
            $table->float('valor',8,2);
            $table->float('saldo_atual',8,2);
            $table->timestamps();
        });

         Schema::table('caixa', function (Blueprint $table) {
            $table->foreign('tipo_mov_id')->references('id')->on('tipo_movimentacao');

         });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caixa');
    }
}
