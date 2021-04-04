<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producaos', function (Blueprint $table) {
            $table->id();         
            $table->unsignedBigInteger('id_fragrancia');
            $table->foreign('id_fragrancia')->references('id')->on('estoques');
            $table->float('fragrancia_qtd');
            $table->float('alcool_qtd');
            $table->float('agua_qtd');
            $table->string('descricao');
            $table->float('qtd_produzida');
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
        Schema::dropIfExists('producaos');
    }
}
