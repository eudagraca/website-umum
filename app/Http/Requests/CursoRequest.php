<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'referencia' => 'required',
            'nome' => 'required',
            'descricao' => 'required',
            'tag' => 'nullable',
            'imagem' => 'file|required|max:1999',
        ];
    }

    public function messages()
    {
        return [

            'referencia.required' => 'O campo da Referência deve estar preenchido',
            'descricao.required' => 'O campo da Descrição deve ser preenchido',
            'unique' => 'O(a) :attribute já foi registado ',
            'ficheiro.required' => 'Seleccione o Documento ',
            'nome.required' => 'O campo do Nome deve estar preenchido',

        ];
    }

    public function attributes()
    {
        return [
            'descricao' => 'Descrição',
            'nome' => 'Nome',
            'referencia' => 'Referência',
            'ficheiro' => 'Documento',
        ];
    }

}
