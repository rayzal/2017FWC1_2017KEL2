<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelCheckIn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_In', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_check_In');
            $table->integer('karyawan_id',false,true);
            $table->foreign('karyawan_id')->references('id')->on('karyawan');
            $table->integer('tamu_id',false,true);
            $table->foreign('tamu_id')->references('id')->on('tamu');
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
        Schema::drop('check_In');
    }
}
