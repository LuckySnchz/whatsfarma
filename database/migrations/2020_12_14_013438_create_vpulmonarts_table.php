<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVpulmonartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vpulmonarts', function (Blueprint $table) {
            $table->id();
            $table->decimal('Pulmonarvelpico',10,2);
            $table->decimal('Pulmonarpico',10,2);
            $table->decimal('Pulmonarmedio',10,2);
            $table->decimal('Pulmonararea',10,2);
            $table->string('Pulmonarinsuficiencia');
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
        Schema::dropIfExists('vpulmonarts');
    }
}
