<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->foreign('id_labo')->references('id_labo')->on('labos');
            $table->foreign('id_tdoc')->references('id_tdoc')->on('tipo_docs');
            $table->foreign('id_pais')->references('id_pais')->on('paises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->dropForeign('paciente_id_labo_foreign');
            $table->dropForeign('paciente_id_tdoc_foreign');
            $table->dropForeign('paciente_id_pais_foreign');
        });
    }
}
