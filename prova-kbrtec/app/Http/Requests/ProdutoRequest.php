<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nmproduto'=>'required',
            'vlproduto'=>'required|number ',
            'imgproduto' => 'required|mimes:jpeg,png',
            'nmcategoria' =>'required',
        ];
    }
}
