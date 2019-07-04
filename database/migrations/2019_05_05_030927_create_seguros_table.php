<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSegurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguros', function (Blueprint $table) {
            $table->string('patente', 100);
            $table->foreign('patente')->references('patente')->on('motos')->onDelete('cascade');
            $table->string('poliza')->unique();
            $table->date('venc_seg');
            $table->string('img_seg', 100)->nullable();
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
        Schema::dropIfExists('seguros');
    }
}
