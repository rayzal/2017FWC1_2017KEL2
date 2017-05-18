<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
	protected $table = 'karyawan'; 
    // protected $fillable = ['nama_karyawan','alamat_karyawan','no_telepon_karyawan','email'];
    protected  $guarded = ['id'];  


       public function pengguna(){
       	return $this->belongsTo(Pengguna::class);
       }

       public function check_in(){
    	return $this->hasMany(check_in::class,'karyawan_id');
    	
    }

    public function getUsernameAttribute()
    {
        return $this->pengguna->username;
       }

}
