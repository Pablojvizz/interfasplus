<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_paciente');
            $table->string('nrohc');
            $table->integer('id_labo')->unsigned();//fk
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fec_nac');
            $table->string('email')->nullable();
            $table->integer('id_tdoc')->unsigned();//fk
            $table->integer('id_pais')->unsigned();//fk
            $table->string('nro_doc');
            $table->string('sexo', 1);
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
        Schema::dropIfExists('pacientes');
    }
}
