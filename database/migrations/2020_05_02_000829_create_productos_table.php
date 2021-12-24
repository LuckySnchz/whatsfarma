<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->integer('Codigo');
            $table->string('NombreProducto');
            $table->string('NombreVariable');
            $table->string('NombrePrecio');
            $table->string('NombreTotalPrecio');
            $table->string('DescripcionProducto');
            $table->decimal('Precio',10,2); 
            $table->string('NombrePirce');
            $table->string('NombreDiv');
            $table->string('image');
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
        Schema::dropIfExists('productos');
    }
}
