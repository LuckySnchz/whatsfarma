<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVtricuspidetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vtricuspidets', function (Blueprint $table) {
            $table->id();
            $table->decimal('Tricuspidevelpicoa',10,2);
            $table->decimal('Tricuspidevelpicoe',10,2);
            $table->decimal('Tricuspidepico',10,2);
            $table->decimal('Tricuspidemedio',10,2);
            $table->decimal('Tricuspidearea',10,2);
            $table->string('Tricuspideinsuficiencia');
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
        Schema::dropIfExists('vtricuspidets');
    }
}
