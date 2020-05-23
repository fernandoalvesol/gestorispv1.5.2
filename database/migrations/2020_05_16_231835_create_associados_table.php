<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 155);
            $table->string('cpf', 100);
            $table->string('rg', 100);
            $table->string('logadouro', 155);
            $table->integer('numero');
            $table->string('bairro', 155);
            $table->string('cidade', 155);
            $table->string('estado', 100);
            $table->integer('cep');
            $table->date('dtnascimento');
            $table->date('dtadesao');
            $table->string('fone', 100);
            $table->string('celular', 100);
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
        Schema::dropIfExists('associados');
    }
}
