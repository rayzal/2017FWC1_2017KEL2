<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi'; 
    protected $fillable = ['lama_menginap','total_harga'];

     public function kamar(){
       	return $this->belongsTo(kamar::class,'kamar_id');
       } 


     public function check_in(){
       	return $this->belongsTo(check_in::class,'check_in_id');
       } 


      public function check_out(){
    	return $this->hasOne(check_out::class,'transaksi_id');
    	
    }
}
