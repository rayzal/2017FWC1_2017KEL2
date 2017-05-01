<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelCheckOut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_Out', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_check_out');
            $table->integer('transaksi_id',false,true);
            $table->foreign('transaksi_id')->references('id')->on('transaksi');
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
        Schema::drop('check_Out');
    }
}
