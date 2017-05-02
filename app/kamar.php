<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{	

	protected $table = 'kamar'; 
    protected $fillable = ['kode_kamar','type_kamar'];


      public function transaksi(){
    	return $this->hasOne(transaksi::class,'kamar_id');
    	
    }

    public function harga(){
       	return $this->belongsTo(harga::class,'harga_id');
       }

    public function fasilitas_kamar(){
    	return $this->belongsToMany(fasilitas_kamar::class,'kamar_id');
    	
    }
}
