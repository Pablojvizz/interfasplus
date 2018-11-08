<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_labo');
            $table->string('razon_social', 50);
            $table->integer('codigo')->default(4);
            $table->string('email', 60);
            $table->string('direccion', 60);
            $table->string('telefono', 15);
            $table->string('sistema', 20);
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
        Schema::dropIfExists('labo');
    }
}
