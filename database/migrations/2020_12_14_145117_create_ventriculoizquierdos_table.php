<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentriculoizquierdosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventriculoizquierdos', function (Blueprint $table) {
            $table->id();
            $table->string('EspesorParietal');
            $table->string('EspesorParietalMasTexto');
            $table->string('VentriculoIzquierdoMasTexto');
            $table->string('EspesorParietalDimensiones');
            $table->string('AsinergiasTexto');
            $table->string('MotilidadParietal');
            $table->string('MotilidadParietalMasTexto');//MotilidadParietalMasTexto
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
        Schema::dropIfExists('ventriculoizquierdos');
    }
}
