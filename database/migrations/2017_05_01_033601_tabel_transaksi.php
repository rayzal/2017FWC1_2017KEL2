<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lama_menginap');
            $table->string('total_harga');
            $table->integer('check_in_id',false,true);
            $table->foreign('check_in_id')->references('id')->on('check_in');
            $table->integer('kamar_id',false,true);
            $table->foreign('kamar_id')->references('id')->on('kamar');
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
        Schema::drop('transaksi');
    }
}
