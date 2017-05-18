<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\transaksi;

use App\check_in;

use App\kamar;

use App\Http\Requests\transaksiRequest;

class transaksiController extends Controller
{
   protected $informasi = 'Gagal melakukan aksi';
     public function awal()
    {   
      $semuaTransaksi= transaksi::all();
        return view('transaksi.awal', compact('semuaTransaksi'));
    }
        
    public function tambah()
    {    
         $check_in = new check_in;  
          $kamar = new kamar; 
        return view('transaksi.tambah',compact('check_in','kamar','transaksi'));
    }

    public function simpan(transaksiRequest $input)
    {  
        $transaksi = new transaksi;
        $transaksi ->lama_menginap = $input->lama_menginap;
        $transaksi ->total_harga = $input->total_harga;
        $transaksi ->check_in_id = $input->check_in_id;
        $transaksi ->kamar_id = $input->kamar_id;
        $informasi = $transaksi->save() ? 'Berhasil simpan data': 'gagal simpan data';
        return redirect('transaksi')->with(['informasi'=>$informasi]);
      }

    public function edit($id){
          $transaksi = transaksi::find($id);
          $check_in = new check_in;  
          $kamar = new kamar; 
        return view('transaksi.edit',compact('check_in','kamar','transaksi'));

          }
    
    public function lihat($id)
    {
        $transaksi = transaksi::find($id);
         return view('transaksi.lihat',compact('transaksi'));      
        }

    public  function update($id, transaksiRequest $input){
        $transaksi = transaksi::find($id);  
 	    $transaksi ->lama_menginap = $input->lama_menginap;
        $transaksi ->total_harga = $input->total_harga;
        $transaksi ->check_in_id = $input->check_in_id;
        $transaksi ->kamar_id = $input->kamar_id; 
  	    $informasi = $transaksi->save() ? 'Berhasil update data': 'Gagal Update data';
        return redirect('transaksi')->with(['informasi'=>$informasi]);
       }

  public function hapus($id){
    $transaksi = transaksi::find($id);
        if ($transaksi->delete())$this->informasi="transaksi berhasil dihapus";
                   
         return redirect('transaksi')->with(['informasi'=>$this->informasi]);
         }
}
