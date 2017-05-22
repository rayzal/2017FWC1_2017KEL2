<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class kamarRequest extends Request
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
        'kode_kamar'=>'required',
        'type_kamar'=>'required',
        'harga_kamar'=>'required|min:4',
        ];
        
        return $validasi;
    }
}
