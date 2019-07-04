<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevicionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revicions', function (Blueprint $table) {
            $table->string('patente', 100);
            $table->foreign('patente')->references('patente')->on('motos')->onDelete('cascade');
            $table->date('venc_rev');
            $table->string('img_rev', 100)->nullable();
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
        Schema::dropIfExists('revicions');
    }
}
