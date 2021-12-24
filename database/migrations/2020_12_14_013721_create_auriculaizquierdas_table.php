<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuriculaizquierdasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auriculaizquierdas', function (Blueprint $table) {
            $table->id();
            $table->string('AuriculaIzquierda');
            $table->string('AuriculaIzquierdaLevementeAumentada');
            $table->string('AuriculaIzquierdaModeradamenteAumentada');
            $table->string('AuriculaIzquierdaSeveramenteAumentada');
            $table->string('AuriculaIzquierdaMasTexto');
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
        Schema::dropIfExists('auriculaizquierdas');
    }
}
