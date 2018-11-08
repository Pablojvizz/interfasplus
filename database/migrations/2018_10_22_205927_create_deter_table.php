<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deter', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_deter');
            $table->string('codigo', 13);
            $table->string('nombre', 50);
            $table->string('eq', 3);
            $table->string('hije', 1)->default(0);
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
        Schema::dropIfExists('deter');
    }
}
