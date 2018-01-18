<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutosAdm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_adm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('marca')->nullable(true);
            $table->unsignedInteger('categoria');
            $table->text('descricao')->nullable(true);
            $table->timestamps();
        });

        Schema::table('produtos_adm', function (Blueprint $table) {
            $table->foreign('categoria')->references('id')->on('categorias_produtos_adm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos_adm');
    }
}
