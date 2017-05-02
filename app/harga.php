<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harga extends Model
{
	protected $table = 'harga'; 
    protected $fillable = ['harga_kamar','hari'];
 
       public function kamar(){
    	return $this->hasOne(harga::class,'harga_id');
    	
    }
}
