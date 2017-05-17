<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\fasilitas_kamar;

use App\kamar;

use App\fasilitas;

class fasilitas_kamarController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
     public function awal()
    {   $semuaFasilitasKamar= fasilitas_kamar::all();
        return view('fasilitas_kamar.awal', compact('semuaFasilitasKamar'));
    }
        
    public function tambah()
    {       $kamar= new kamar;
            $fasilitas= new fasilitas;
        return view('fasilitas_kamar.tambah',compact('kamar','fasilitas'));
    }

    public function simpan(Request $input)
    {
        $fasilitas_kamar = new fasilitas_kamar($input->only('kamar_id','fasilitas_id'));
        if ($fasilitas_kamar->save()) $this->informasi = "Fasilitas Kamar berhasil disimpan";
        return redirect('fasilitas_kamar')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $fasilitas_kamar = fasilitas_kamar::find($id);
        $kamar= new kamar;
        $fasilitas= new fasilitas;
        return view('fasilitas_kamar.edit',compact('kamar','fasilitas','fasilitas_kamar'));


          }
    
    public function lihat($id)
    {
        $fasilitas_kamar = fasilitas_kamar::find($id);
         return view('fasilitas_kamar.lihat',compact('fasilitas_kamar'));      
}

    public  function update($id, Request $input){
        $fasilitas_kamar = fasilitas_kamar::find($id);
        
        $fasilitas_kamar->fill($input->only('kamar_id','fasilitas_id'));
        if ($fasilitas_kamar->save())$this->informasi="Fasilitas Kamar telah di perbaharui";
       
        return redirect('fasilitas_kamar')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
    $fasilitas_kamar = fasilitas_kamar::find($id);
        if ($fasilitas_kamar->delete())$this->informasi="fasilitas kamar berhasil dihapus";
                   
         return redirect('fasilitas_kamar')->with(['informasi'=>$this->informasi]);
 }
}
