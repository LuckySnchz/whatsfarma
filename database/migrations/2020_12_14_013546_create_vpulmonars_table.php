<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVpulmonarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vpulmonars', function (Blueprint $table) {
            $table->id();
            $table->string('EstructuraReurgitaciones');
            $table->string('ValvulaPulmonarMasTetxo');
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
        Schema::dropIfExists('vpulmonars');
    }
}
