<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProtocoloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('protocolo', function (Blueprint $table) {
            $table->foreign('id_labo')->references('id_labo')->on('labo');
            $table->foreign('id_deter')->references('id_deter')->on('deter');
            $table->foreign('id_paciente')->references('id_paciente')->on('paciente');
            $table->foreign('id_civa')->references('id_civa')->on('condicion_iva');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('protocolo', function (Blueprint $table) {
            $table->dropForeign('paciente_id_labo_foreign');
            $table->dropForeign('paciente_id_deter_foreign');
            $table->dropForeign('paciente_id_paciente_foreign');
            $table->dropForeign('paciente_id_civa_foreign');
        });
    }
}
