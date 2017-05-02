<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $table = 'fasilitas'; 
    protected $fillable = ['nama_fasilitas'];

   public function fasilitas_kamar(){
    	return $this->belongsToMany(fasilitas_kamar::class,'fasilitas_id');
    	
    }


}
