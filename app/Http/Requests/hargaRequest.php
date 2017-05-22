<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class hargaRequest extends Request
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
        'harga_kamar'=>'required|numeric|min:10000',
        'hari'=>'required',
        ];
        
        return $validasi;
    }
}
