<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class check_out extends Model
{
      protected $table = 'check_out'; 
    protected $fillable = ['tgl_check_out'];

     public function transaksi(){
       	return $this->belongsTo(transaksi::class,'transaksi_id');
       }
}
