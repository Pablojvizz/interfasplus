<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paciente', function (Blueprint $table) {
            $table->foreign('id_labo')->references('id_labo')->on('labo');
            $table->foreign('id_tdoc')->references('id_tdoc')->on('tipo_doc');
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
        Schema::table('paciente', function (Blueprint $table) {
            $table->dropForeign('paciente_id_labo_foreign');
            $table->dropForeign('paciente_id_tdoc_foreign');
            $table->dropForeign('paciente_id_pais_foreign');
        });
    }
}
