<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class check_in extends Model
{	
	protected $table = 'check_in'; 
    protected $fillable = ['tgl_check_in']; 


     public function tamu(){
       	return $this->belongsTo(tamu::class,'tamu_id');
       } 

     public function karyawan(){
       	return $this->belongsTo(karyawan::class,'karyawan_id');
       } 
    public function transaksi(){
    	return $this->hasOne(transaksi::class,'check_in_id');
    	
    }
}
