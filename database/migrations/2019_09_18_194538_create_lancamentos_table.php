<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLancamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lancamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('areas_id')->unsigned();
            $table->foreign('areas_id')->references('id')->on('areas')->onDelete('cascade');
            $table->integer('indicadores_id')->unsigned();
            $table->foreign('indicadores_id')->references('id')->on('indicadores')->onDelete('cascade');
            $table->date('data');
            $table->text('descricao');
            $table->string('competencia');
            $table->time('hora');
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
        Schema::dropIfExists('lancamentos');
    }
}
