<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProtocolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('protocolos', function (Blueprint $table) {
            $table->foreign('id_labo')->references('id_labo')->on('labos');
            $table->foreign('id_deter')->references('id_deter')->on('deters');
            $table->foreign('id_paciente')->references('id_paciente')->on('pacientes');
            $table->foreign('id_civa')->references('id_civa')->on('condicion_ivas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('protocolos', function (Blueprint $table) {
            $table->dropForeign('protocolo_id_labo_foreign');
            $table->dropForeign('protocolo_id_deter_foreign');
            $table->dropForeign('protocolo_id_paciente_foreign');
            $table->dropForeign('protocolo_id_civa_foreign');
        });
    }
}
