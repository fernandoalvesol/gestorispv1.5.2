<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pveicular', 100);
            $table->string('pterceiro', 100);
            $table->decimal('valorp', 8, 2);
            $table->string('rastreador', 100);
            $tabel->string('veiculores', 100);
            $table->string('qtdiasp', 100);
            $table->string('reboque', 155);
            $table->string('kmreboque', 155);
            $table->string('condutorl', 155);
            $table->string('chaveiro', 100);
            $table->string('pvidros', 100);            
            $table->integer('vencimento');
            $table->decimal('parcela', 8, 2);
            $table->integer('qutparc');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('beneficios');
    }
}
