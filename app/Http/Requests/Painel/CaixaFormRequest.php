<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class CaixaFormRequest extends FormRequest
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
        return [
            
            'DESCRICAO'   => 'required|min:3|max:100',
            'FILIAL'      => 'required',
            'CONTA'       => 'required|min:3|max:100',
            'N_TITULO'    => 'required|min:1|max:100',
            'DATA'        => 'required|min:3|max:100',
        ];
    }
}
