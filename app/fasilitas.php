<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $table = 'fasilitas'; 
    protected $fillable = ['nama_fasilitas'];

   public function fasilitas_kamar(){
    	return $this->hasMany(fasilitas_kamar::class,'fasilitas_id');
    	
    }

  public function listFasilitas()
  {
    $out = [];
    foreach ($this->all() as $flts){
      $out[$flts->id] = "{$flts->nama_fasilitas}";

    }
    return $out;
  }


}
