<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class karyawanRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       $validasi= [
        'nama_karyawan'=>'required',
        'alamat_karyawan'=>'required',
        'no_telepon_karyawan'=>'required|integer',
        'email'=>'required',
        'username'=>'required',
        ];
        if($this->is('karyawan/tambah')){
            $validasi['password']='required';
        }
        return $validasi; 
    }
}
