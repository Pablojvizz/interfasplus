<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProtocolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocolos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_protocolo');
            $table->integer('id_labo')->unsigned();//fk
            $table->integer('id_deter')->unsigned();//fk
            $table->integer('id_paciente')->unsigned();//fk
            $table->integer('id_civa')->unsigned();//fk
            $table->string('tiempo')->nullable();
            $table->string('observa')->nullable();
            $table->string('volumen')->nullable();
            $table->string('tiempo_diu')->nullable();
            $table->string('fun')->nullable();
            $table->date('fec_vis');
            $table->date('fec_resu')->nullable();
            $table->integer('codbar')->nullable();
            $table->integer('enviado');
            $table->string('eq')->nullable();
            $table->string('resultado')->nullable();
            $table->integer('resu_num')->nullable();
            $table->text('resu_text')->nullable();
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
        Schema::dropIfExists('protocolos');
    }
}
