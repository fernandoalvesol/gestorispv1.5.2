<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class LancamentosFormRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'data' => 'required',
            'hora' => 'required',
            'competencia' => 'required|min:3|max:150',
            'descricao' => 'required|min:3|max:500',
        ];
    }

}
