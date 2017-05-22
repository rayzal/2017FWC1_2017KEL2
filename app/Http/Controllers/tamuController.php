<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\tamu;

use App\pengguna;

use Hash;

use App\Http\Requests\TamuRequest;

class tamuController extends Controller
{
    

    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {   
        $semuaTamu=tamu::all();
        return view('tamu.awal', compact('semuaTamu'));
    }
    public function tambah()
    {
        return view('tamu.tambah');
    }
    public function daftar()
    {
        return view('tamu.daftar');
    }


    public function simpan(TamuRequest $input)
    {   
        $pengguna = new Pengguna($input->only('username','password','email'));
        if ($pengguna->save()){
        $tamu = new tamu;
        $tamu -> nama_tamu = $input->nama_tamu;
        $tamu -> no_identitas_tamu = $input->no_identitas_tamu;
        $tamu -> alamat_tamu = $input->alamat_tamu;
        $tamu -> no_telepon_tamu = $input->no_telepon_tamu;
        $tamu -> email = $input->email;
        // $tamu -> pengguna_id = $input->pengguna_id;
        if ($pengguna->tamu()->save($tamu))
            $this->informasi='Berhasil simpan data';
            }
        
     // $informasi = $tamu ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('tamu')->with(['informasi'=>$this->informasi]);
    }

    // Register Oleh Tamu
    public function simpantamu(TamuRequest $input)

    {  
        
        $pengguna = new Pengguna($input->only('username','password','email','level'));
        if ($pengguna->save()){
        $tamu = new tamu;
        $tamu -> nama_tamu = $input->nama_tamu;
        $tamu -> no_identitas_tamu = $input->no_identitas_tamu;
        $tamu -> alamat_tamu = $input->alamat_tamu;
        $tamu -> no_telepon_tamu = $input->no_telepon_tamu;
        $tamu -> email = $input->email;
      
        // $tamu -> pengguna_id = $input->pengguna_id;
        if ($pengguna->tamu()->save($tamu))
            $this->informasi='Berhasil simpan data';
            }
        
     // $informasi = $tamu ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('lamantamu')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $tamu = tamu::find($id);
        return view('tamu.edit')->with(array('tamu'=>$tamu));
          }
    
    public function lihat($id)
    {
        $tamu = tamu::find($id);
         return view('tamu.lihat')->with(array('tamu'=>$tamu));      
}
    public  function update($id, TamuRequest $input){
        
        $tamu = tamu::find($id);
        $tamu -> nama_tamu = $input->nama_tamu;
        $tamu -> no_identitas_tamu = $input->no_identitas_tamu;
        $tamu -> alamat_tamu = $input->alamat_tamu;
        $tamu -> no_telepon_tamu = $input->no_telepon_tamu;
        $tamu -> email = $input->email;
        $tamu->save();
        // $tamu -> pengguna_id = $input->pengguna_id;
             if (!is_null($input->username)){
            $pengguna=$tamu->pengguna->fill($input->only('username'));
           if (!empty($input->password))
             $pengguna->password=$input->password;
        if ($pengguna->save()) $this->informasi='Berhasil simpan data';
    }else {
            $this->informasi='Gagal simpan data';
        }
     // $informasi = $tamu ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('tamu')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
        $tamu = tamu::find($id);
        if ($tamu->pengguna()->delete()){
            if ($tamu->delete())$this->informasi='Berhasil hapus data';
        }
       
     // $informasi = $tamu ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('tamu')->with(['informasi'=>$this->informasi]);
}
}
