<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeptaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('septa', function (Blueprint $table) {
            $table->id();
            $table->decimal('Septum',10,2);
            $table->decimal('Pp',10,2);
            $table->decimal('Ao',10,2);
            $table->decimal('Aitabla',10,2);
            $table->decimal('Vd',10,2);
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
        Schema::dropIfExists('septa');
    }
}
