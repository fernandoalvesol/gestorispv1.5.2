<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TIPO');
            $table->string('RAZAOSOCIAL', 100);
            $table->string('NOME_FANTASIA', 150);
            $table->string('CONTATO', 50);
            $table->integer('CPF/CNPJ');
            $table->integer('RG');
            $table->integer('FONE');
            $table->integer('CELULAR');
            $table->string('EMAIL', 50);
            $table->string('ENDERECO', 150);
            $table->integer('NUMERO');
            $table->string('BAIRRO', 100);
            $table->string('COMPLEMENTO', 150);
            $table->string('CIDADE', 150);
            $table->string('ESTADO', 100);
            $table->integer('CEP');
            $table->text('DESCRIÇÃO', 150);
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
         Schema::dropIfExists('fornecedores');
    }
}
