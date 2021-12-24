<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuckycartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luckycarts', function (Blueprint $table) {
            $table->id();
             $table->string('Cotoname');
             $table->string('Cotoimage');
             $table->string('Cotolink');            
            $table->string('Walmartlink');
            $table->string('Carrefourlink');

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
        Schema::dropIfExists('luckycarts');
    }
}
