<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDiccioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diccio', function (Blueprint $table) {
            $table->foreign('id_labo')->references('id_labo')->on('labo');
            $table->foreign('id_deter')->references('id_deter')->on('deter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diccio', function (Blueprint $table) {
            $table->dropForeign('paciente_id_labo_foreign');
            $table->dropForeign('paciente_id_deter_foreign');
        });
    }
}
