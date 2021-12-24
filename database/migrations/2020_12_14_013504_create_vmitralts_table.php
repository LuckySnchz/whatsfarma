<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVmitraltsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vmitralts', function (Blueprint $table) {
            $table->id();
            $table->decimal('Mitralvelpicoa',10,2);
            $table->decimal('Mitralvelpicoe',10,2);
            $table->decimal('Mitralpico',10,2);
            $table->decimal('Mitralmedio',10,2);
            $table->decimal('Mitralarea',10,2);
            $table->string('Mitralinsuficiencia');
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
        Schema::dropIfExists('vmitralts');
    }
}
