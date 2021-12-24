<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReintegrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reintegros', function (Blueprint $table) {
            $table->id();
            $table->decimal('Ingresonoticketimporte',10,2);
            $table->string('Ingresonoticketdescripcion');
            $table->decimal('Ticketnoingresoimporte',10,2);
            $table->string('Ticketnoingresodescripcion');
            $table->integer('Caja_id');
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
        Schema::dropIfExists('reintegros');
    }
}
