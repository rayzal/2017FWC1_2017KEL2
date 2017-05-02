<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tamu extends Model
{		
	protected $table = 'tamu'; 
    protected $fillable = ['nama_tamu','no_identitas_tamu','alamat_tamu','no_telepon_tamu','email'];
    protected  $guarded = ['id'];

       public function pengguna(){
       	return $this->belongsTo(Pengguna::class);
       }

       public function check_in(){
    	return $this->hasMany(check_in::class,'tamu_id');
    	
    }
}
