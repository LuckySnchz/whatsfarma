<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zetas', function (Blueprint $table) {
            $table->id();
            $table->decimal('Zmedicamento',10,2);
            $table->decimal('Zperfumeria',10,2);
            $table->decimal('Zobrasocial',10,2);
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
        Schema::dropIfExists('zetas');
    }
}
