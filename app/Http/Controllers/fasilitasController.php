<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\fasilitas;

use App\Http\Requests\fasilitasRequest;

class fasilitasController extends Controller
{
    public function awal()
    {
    	return view('fasilitas.awal',['data'=>fasilitas::all()]);
    }

    public function tambah()
    {
    	return view('fasilitas.tambah');
    }
    
    public function simpan(fasilitasRequest $input)
    {
      
    	$fasilitas = new fasilitas;
    	$fasilitas->nama_fasilitas = $input->nama_fasilitas;
        $informasi = $fasilitas->save() ? 'Berhasil simpan data': 'gagal simpan data';
        return redirect('fasilitas')->with(['informasi'=>$informasi]);
    
    }
    public function edit($id){
        $fasilitas = fasilitas::find($id);
        return view('fasilitas.edit')->with(array('fasilitas'=>$fasilitas));
    }


    public function lihat($id){
        $fasilitas = fasilitas::find($id);
        return view('fasilitas.lihat')->with(array('fasilitas'=>$fasilitas));
    }

    public function update(fasilitasRequest $input, $id){
        $fasilitas = fasilitas::find($id);
        $fasilitas->nama_fasilitas = $input->nama_fasilitas;
        $informasi = $fasilitas->save() ? 'Berhasil update data': 'Gagal Update data';
        return redirect('fasilitas')->with(['informasi'=>$informasi]);

    }
    public function hapus($id){
        $fasilitas = fasilitas::find($id);
        $informasi = $fasilitas->delete() ? 'Berhasil hapus data':'Gagal hapus data';
        return redirect('fasilitas')->with(['informasi'=>$informasi]);
    }
}
