<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenientos', function (Blueprint $table) {
            $table->string('patente', 100);
            $table->foreign('patente')->references('patente')->on('motos')->onDelete('cascade');
            $table->integer('kilometraje');
            $table->string('ac_lvl_original');
            $table->string('cadena_status');
            $table->string('refrigerante_lvl');
            $table->string('brake_lvl');
            $table->string('front_brake_status');
            $table->string('rear_brake_status');
            $table->string('batery_status');
            $table->string('12v_outlet');
            $table->string('puños_calefactables_status');
            $table->string('fuel_status');
            $table->string('luces_status');
            $table->string('notas_adicionales');
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
        Schema::dropIfExists('mantenientos');
    }
}
