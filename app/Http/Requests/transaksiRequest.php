<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class transaksiRequest extends Request
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
        'lama_menginap'=>'required|integer',
        'total_harga'=>'required|numeric',
        'check_in_id'=>'required',
        'kamar_id'=>'required',
        ];
        
        return $validasi;
    }
}
