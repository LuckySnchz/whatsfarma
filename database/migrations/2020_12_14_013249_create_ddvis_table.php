<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDdvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ddvis', function (Blueprint $table) {
            $table->id();
            $table->decimal('Ddvi',10,2);
            $table->decimal('Dsvi',10,2);
            $table->decimal('Fey',10,2);
            $table->decimal('Factext',10,2);
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
        Schema::dropIfExists('ddvis');
    }
}
