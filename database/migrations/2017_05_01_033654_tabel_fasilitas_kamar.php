<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelFasilitasKamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_kamar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kamar_id',false,true);
            $table->foreign('kamar_id')->references('id')->on('kamar');
            $table->integer('fasilitas_id',false,true);
            $table->foreign('fasilitas_id')->references('id')->on('fasilitas');
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
        Schema::drop('fasilitas_kamar');
    }
}
