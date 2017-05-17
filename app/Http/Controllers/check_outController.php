<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\check_out;

use App\transaksi;

class check_outController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
     public function awal()
    {   
      $semuaCheck_out= check_out::all();
        return view('check_out.awal', compact('semuaCheck_out'));
    }
        
    public function tambah()
    {    
         $transaksi = new transaksi;  
        return view('check_out.tambah',compact('transaksi','check_out'));
    }

    public function simpan(Request $input)
    {  
        $check_out = new check_out;
        $check_out ->tgl_check_out = $input->tgl_check_out;
        $check_out ->transaksi_id = $input->transaksi_id;
        $informasi = $check_out->save() ? 'Berhasil simpan data': 'gagal simpan data';
        return redirect('check_out')->with(['informasi'=>$informasi]);
      }

    public function edit($id){
        $check_out = check_out::find($id);
        $transaksi = new transaksi;
        return view('check_out.edit',compact('transaksi','check_out'));

          }
    
    public function lihat($id)
    {
        $check_out = check_out::find($id);
         return view('check_out.lihat',compact('check_out'));      
        }

    public  function update($id, Request $input){
        $check_out = check_out::find($id);  
 		    $check_out ->tgl_check_out = $input->tgl_check_out;
        $check_out ->transaksi_id = $input->transaksi_id;  
  	    $informasi = $check_out->save() ? 'Berhasil update data': 'Gagal Update data';
        return redirect('check_out')->with(['informasi'=>$informasi]);
       }

  public function hapus($id){
    $check_out = check_out::find($id);
        if ($check_out->delete())$this->informasi="check_out berhasil dihapus";
                   
         return redirect('check_out')->with(['informasi'=>$this->informasi]);
         }
}
