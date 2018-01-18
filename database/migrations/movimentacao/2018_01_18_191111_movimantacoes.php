<?php

/*
 *OBS: Posso não precisar desta tabela.
*/


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movimantacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('caixa_id');
            $table->unsignedInteger('tipo_mov_id');
            //Não adicionar foreign pois o "transacao_id" determinará se a busca sera feita na tabela compras ou vendas.
            $table->unsignedInteger('transacao_id');
            $table->unsignedInteger('valor');
            $table->timestamps();
        });

        Schema::table('movimentacoes', function (Blueprint $table) {
            $table->foreign('caixa_id')->references('id')->on('caixa');
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
        Schema::dropIfExists('movimentacoes');
    }
}
