<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PivotDiccioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diccio', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_labo')->unsigned();//fk
            $table->integer('id_deter')->unsigned();//fk
            $table->string('cod_derivante');
            $table->string('mnemonico')->nullable();
            $table->string('hije', 1)->nullable();
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
        Schema::dropIfExists('diccio');
    }
}
