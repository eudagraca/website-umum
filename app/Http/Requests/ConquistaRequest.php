<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConquistaRequest extends FormRequest
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
            'titulo' => 'required',
            'docentes' => 'required|numeric',
            'descricao' => 'required',
            'estudantes' => 'nullable|numeric',
            'campus' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [

            'required' => ':attribute deve estar preenchido',
            'unique' => 'O(a) :attribute já foi registado ',
            'numeric' => ':attribute dever ser um número',

        ];
    }

    public function attributes()
    {
        return [
            'descricao' => 'Descrição',
            'titulo' => 'Titulo',
            'estudantes' => 'Quantidade de Estudantes',
            'campus' => 'Campus',
            'docentes' => 'Quantidade de Docentes',
        ];
    }
}
