<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

// use Hash;

class penggunaController extends Controller
{
    public function awal()
    {
    	return view('pengguna.awal',['data'=>pengguna::all()]);
    }
    public function tambah()
    {
    	return view('pengguna.tambah');
    }
    public function simpan(Request $input)
    {   
         // validasi
         // 
    
         $this->validate($input,[
            'username'=>'required|unique:pengguna,username|regex:/^[\pL\s]+$/u|',
            'email'=>'required|email|unique:pengguna,email',
            'password'=>'required',
            'level'=>'required|numeric',
            ]);

         $messages = [
        'username.required'=> 'please fill Broadcast Name field',
         ];

    	$pengguna = new Pengguna;
    	$pengguna -> username = $input->username;
        $pengguna -> email = $input->email;
        $pengguna -> password = $input->password;
        // $pengguna -> password = Hash::make('password');
        $pengguna -> level = $input->level;
        
     $informasi = $pengguna ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('pengguna')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $pengguna = Pengguna::find($id);
        return view('pengguna.edit')->with(array('pengguna'=>$pengguna));
          }
    
    public function lihat($id)
    {
        $pengguna = Pengguna::find($id);
         return view('pengguna.lihat')->with(array('pengguna'=>$pengguna));      
}
    public  function update($id, Request $input){

         $this->validate($input,[
            'username'=>'required|unique:pengguna,username|regex:/^[\pL\s]+$/u',
            'email'=>'required|email|unique:pengguna,email',
            'password'=>'required',
            'level'=>'required|numeric',
            ]);

        $pengguna = Pengguna::find($id);
        $pengguna -> username = $input->username;
        $pengguna -> email = $input->email;
        $pengguna -> password = $input->password;
        // $pengguna -> password = Hash::make('password');
        $pengguna -> level = $input->level;
                
     $informasi = $pengguna ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('pengguna')->with(['informasi'=>$informasi]);
}
  public function hapus($id){
        $pengguna = Pengguna::find($id);
       
     $informasi = $pengguna ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('pengguna')->with(['informasi'=>$informasi]);
}

}


