<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajas', function (Blueprint $table) {
            $table->id();
            $table->decimal('Cajainicial',10,2);
            $table->decimal('Cincuentacentavos',10,2);
            $table->decimal('Unpeso',10,2);
            $table->decimal('Dospesos',10,2);
            $table->decimal('Cincopesos',10,2);
            $table->decimal('Diezpesos',10,2);
            $table->decimal('Veintepesos',10,2);
            $table->decimal('Cincuentapesos',10,2);
            $table->decimal('Cienpesos',10,2);
            $table->decimal('Doscientopesos',10,2);
            $table->decimal('Quinientospesos',10,2);
            $table->decimal('Milpesos',10,2);
            $table->decimal('Cajafinal',10,2);
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
        Schema::dropIfExists('cajas');
    }
}
