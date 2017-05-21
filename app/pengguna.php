<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticable;

class pengguna extends Authenticable
{
    protected $table = 'pengguna'; 
    protected $fillable = ['username','email','password','level']; 


      public function tamu(){
    	return $this->hasOne(tamu::class,'pengguna_id');
    	
    }

      public function karyawan(){
    	return $this->hasOne(karyawan::class,'pengguna_id');
    	
    }
}
