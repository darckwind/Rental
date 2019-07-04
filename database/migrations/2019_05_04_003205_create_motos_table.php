<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->string('patente', 100)->unique();
            $table->string('marca', 100);
            $table->string('modelo', 100);
            $table->string('color', 100);
            $table->string('RVM', 100)->nullable();
            $table->date('venc_per');
            $table->string('img_per', 100)->nullable();
            $table->string('nro_motor', 100)->default('000000000000');
            $table->string('nro_chasis', 100)->default('000000000000');
            $table->primary('patente');
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
        Schema::dropIfExists('motos');
    }
}
