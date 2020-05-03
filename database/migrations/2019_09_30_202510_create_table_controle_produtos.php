<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableControleProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controle_produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fornecedores_id')->unsigned();
            $table->foreign('fornecedores_id')->references('id')->on('fornecedores')->onDelete('cascade');
            $table->string('NAME_PRODUTO');
            $table->string('COD_PRODUTO');
            $table->double('PRECO_ANTIGO', 8,2);
            $table->double('PRECO_ATUAL', 8,2);
            $table->date('DT_ULTIMA_COMPRA');
            $table->date('DT_CADASTRO');
            $table->integer('QUT_ESTOQUE');
            $table->integer('QUT_MINIMA');
            $table->integer('N_NOTAFISCAL');
            $table->date('DT_EMISSAO');           
            $table->double('VALOR_NOTA', 8,2);
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
         Schema::dropIfExists('controle_produtos');
    }
}
