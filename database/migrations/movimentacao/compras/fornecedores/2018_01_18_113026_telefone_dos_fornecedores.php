<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TelefoneDosFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones_fornecedores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fornecedor_id')->unsigned('id');
            $table->unsignedInteger('numero_telefone');
            $table->timestamps();
        });

        //This code attributes "fornecedor_id" as a foreign key and sign it.
        //First create the table then references it.
        Schema::table('telefones_fornecedores', function (Blueprint $table) {
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefones_fornecedores');
    }
}
