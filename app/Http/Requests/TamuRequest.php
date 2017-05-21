<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TamuRequest extends Request
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
        'nama_tamu'=>'required',
        'no_identitas_tamu'=>'required|numeric',
        'alamat_tamu'=>'required',
        'no_telepon_tamu'=>'required|regex:/(08)[0-9]{10}/',
        'email'=>'required',
        'username'=>'required',
        'password'=>'required',
        ];
        if($this->is('tamu/tambah')){
            $validasi['password']='required';
        }
        return $validasi;
    }
}
