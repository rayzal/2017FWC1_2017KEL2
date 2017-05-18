<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\harga;

use App\Http\Requests\hargaRequest;

class hargaController extends Controller
{
    public function awal()
    {
    	return view('harga.awal',['data'=>harga::all()]);
    }
    public function tambah()
    {
    	return view('harga.tambah');
    }
    public function simpan(hargaRequest $input)
    {   
    
    	$harga = new harga;
    	$harga -> harga_kamar = $input->harga_kamar;
        $harga -> hari = $input->hari;
      
     $informasi = $harga ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('harga')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $harga = harga::find($id);
        return view('harga.edit')->with(array('harga'=>$harga));
          }
    
    public function lihat($id)
    {
        $harga = harga::find($id);
         return view('harga.lihat')->with(array('harga'=>$harga));      
}
    public  function update($id, hargaRequest $input){
        $harga = harga::find($id);
        $harga -> harga_kamar = $input->harga_kamar;
        $harga -> hari = $input->hari;
      
     $informasi = $harga ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('harga')->with(['informasi'=>$informasi]);
}
  public function hapus($id){
        $harga = harga::find($id);
       
     $informasi = $harga ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('harga')->with(['informasi'=>$informasi]);
}
}
