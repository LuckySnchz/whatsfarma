<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCavidadderechasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cavidadderechas', function (Blueprint $table) {
            $table->id();
            $table->string('Dimensiones');
            $table->string('CavidadesDerechasMasTetxo');
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
        Schema::dropIfExists('cavidadderechas');
    }
}
