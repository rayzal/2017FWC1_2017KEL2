<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\kamar;

use App\harga;

use App\Http\Requests\kamarRequest;

class kamarController extends Controller
{
     protected $informasi = 'Gagal melakukan aksi';
     public function awal()
    {   
      $semuaKamar= kamar::all();
        return view('kamar.awal', compact('semuaKamar'));
    }
        
    public function tambah()
    {    
         $harga = new harga;  
        return view('kamar.tambah',compact('harga','kamar'));
    }

    public function simpan(kamarRequest $input)
    {  

        $kamar = new kamar;
        $kamar ->kode_kamar = $input->kode_kamar;
        $kamar ->type_kamar = $input->type_kamar;
        $kamar ->harga_id = $input->harga_id;
        $informasi = $kamar->save() ? 'Berhasil simpan data': 'gagal simpan data';
        return redirect('kamar')->with(['informasi'=>$informasi]);
      }

    public function edit($id){
        $kamar = kamar::find($id);
        $harga = new harga;
        return view('kamar.edit',compact('harga','kamar'));


          }
    
    public function lihat($id)
    {
        $kamar = kamar::find($id);
         return view('kamar.lihat',compact('kamar'));      
        }

    public  function update($id, kamarRequest $input){
        $kamar = kamar::find($id);
        
        $kamar ->kode_kamar = $input->kode_kamar;
        $kamar ->type_kamar = $input->type_kamar;
        $kamar ->harga_id = $input->harga_id;
      
      $informasi = $kamar->save() ? 'Berhasil update data': 'Gagal Update data';
        return redirect('kamar')->with(['informasi'=>$informasi]);
       }

  public function hapus($id){
    $kamar = kamar::find($id);
        if ($kamar->delete())$this->informasi="Kamar berhasil dihapus";
                   
         return redirect('kamar')->with(['informasi'=>$this->informasi]);
         }
}
