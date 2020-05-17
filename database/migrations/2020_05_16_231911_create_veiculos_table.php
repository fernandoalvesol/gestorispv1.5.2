<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('associados_id')->unsigned();
            $table->foreign('associados_id')->references('id')->on('associados')->onDelete('cascade');
            $table->string('tipo', 155);
            $table->string('km', 100);
            $table->date('dtnfiscal');
            $table->date('dtemissaonfiscal');
            $table->integer('nnotafiscal');
            $table->string('namedut', 155);
            $table->string('cpfdut', 155);
            $table->string('chassi', 155);
            $table->integer('anofab');
            $table->integer('anomod');
            $table->string('marca', 155);
            $table->string('modelo', 155);
            $table->string('cor', 100);
            $table->string('combustivel', 155);
            $table->integer('cilindr');
            $table->string('renavam', 155);
            $table->string('alienado', 100);
            $table->string('banco', 155);
            $table->decimal('fipe', 8, 2);
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
        Schema::dropIfExists('veiculos');
    }
}
