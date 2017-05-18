<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class check_inRequest extends Request
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
        'tgl_check_in'=>'required',
        'karyawan_id'=>'required',
        'tamu_id'=>'required',
        ];
        
        return $validasi; 
        
    }
}
