<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
	    $table->increments('id');
            $table->string('patente', 100);
            $table->foreign('patente')->references('patente')->on('motos')->onDelete('cascade');
            $table->date('rent_in');
	    $table->date('rent_out');
	    $table->string('rent_to')->nullable();
	    $table->string('location');
	    $table->string('status');
	    $table->boolean('hotel');
	    $table->string('title');
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
        Schema::dropIfExists('rents');
    }
}
