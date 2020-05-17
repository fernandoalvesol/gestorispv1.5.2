<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VeicBenef extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veic_benef', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('veiculos_id')->unsigned();
            $table->foreign('veiculos_id')->references('id')->on('veiculos')->onDelete('cascade');
            $table->integer('beneficios_id')->unsigned();
            $table->foreign('beneficios_id')->references('id')->on('beneficios')->onDelete('cascade');
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
        //
    }
}
