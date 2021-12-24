<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpagoynotasdecreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epagoynotasdecreditos', function (Blueprint $table) {
            $table->id();
            $table->decimal('Tarjetasdecredito',10,2);
            $table->decimal('Tarjetasdedebito',10,2);
            $table->decimal('Mercadopago',10,2);
            $table->decimal('Transferencia',10,2);
            $table->decimal('Dimo',10,2);
            $table->decimal('Notadecredito',10,2);
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
        Schema::dropIfExists('epagoynotasdecreditos');
    }
}
