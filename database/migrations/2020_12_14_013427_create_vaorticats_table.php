<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaorticatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaorticats', function (Blueprint $table) {
            $table->id();
            $table->decimal('Aorticavelpico',10,2);
            $table->decimal('Aorticapico',10,2);
            $table->decimal('Aorticamedio',10,2);
            $table->decimal('Aorticaarea',10,2);
            $table->string('Aorticainsuficiencia');
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
        Schema::dropIfExists('vaorticats');
    }
}
