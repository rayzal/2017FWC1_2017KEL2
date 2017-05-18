<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas_kamar extends Model
{
    protected $table = 'fasilitas_kamar'; 
   protected $fillable = ['kamar_id','fasilitas_id'];

     public function fasilitas(){
       	return $this->belongsTo(fasilitas::class,'fasilitas_id');
       }
     public function kamar(){
       	return $this->belongsTo(kamar::class,'kamar_id');
       }
}
