<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFsvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsvis', function (Blueprint $table) {
            $table->id();
            $table->string('FuncionSistolicaVentriculoIzquierdo');
            $table->integer('FuncionSistolicaVentriculoIzquierdoNormalFraccionEyeccion');
            $table->integer('FuncionSistolicaVentriculoIzquierdoDeprimidaFraccionEyeccion');
            $table->string('FuncionSistolicaVentriculoIzquierdoMasTexto');
            $table->string('IdPaciente');
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
        Schema::dropIfExists('fsvis');
    }
}
