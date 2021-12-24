<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFsvdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsvds', function (Blueprint $table) {
            $table->id();
            $table->string('FuncionSistolicaVentriculoDerecho');
            $table->string('FuncionSistolicaVentriculoDerechoNormal');
            $table->string('FuncionSistolicaVentriculoDerechoDeprimida');
            $table->string('FuncionSistolicaVentriculoDerechoMasTexto');
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
        Schema::dropIfExists('fsvds');
    }
}
