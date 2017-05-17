<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\check_in;

use App\karyawan;

use App\tamu;

class check_inController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
     public function awal()
    {   
      $semuaCheck_in= check_in::all();
        return view('check_in.awal', compact('semuaCheck_in'));
    }
        
    public function tambah()
    {    
         $karyawan = new karyawan;
         $tamu = new tamu;   
        return view('check_in.tambah',compact('karyawan','tamu','check_in'));
    }

    public function simpan(Request $input)
    {  
        $check_in = new check_in;
        $check_in ->tgl_check_in = $input->tgl_check_in;
        $check_in ->karyawan_id = $input->karyawan_id;
        $check_in ->tamu_id = $input->tamu_id;
        $informasi = $check_in->save() ? 'Berhasil simpan data': 'gagal simpan data';
        return redirect('check_in')->with(['informasi'=>$informasi]);
      }

    public function edit($id){
        $check_in = check_in::find($id);
        $karyawan = new karyawan;
         $tamu = new tamu;   
        return view('check_in.edit',compact('karyawan','tamu','check_in'));

          }
    
    public function lihat($id)
    {
        $check_in = check_in::find($id);
         return view('check_in.lihat',compact('check_in'));      
        }

    public  function update($id, Request $input){
        $check_in = check_in::find($id);  
 		$check_in ->tgl_check_in = $input->tgl_check_in;
        $check_in ->karyawan_id = $input->karyawan_id;
        $check_in ->tamu_id = $input->tamu_id; 
  	    $informasi = $check_in->save() ? 'Berhasil update data': 'Gagal Update data';
        return redirect('check_in')->with(['informasi'=>$informasi]);
       }

  public function hapus($id){
    $check_in = check_in::find($id);
        if ($check_in->delete())$this->informasi="check_in berhasil dihapus";
                   
         return redirect('check_in')->with(['informasi'=>$this->informasi]);
         }

}
