<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'descricao' => 'required',
            'imagem' => 'image|required|max:1999'
        ];
    }

    public function messages()
    {
        return [

            'titulo.required' => 'O campo do Titulo deve estar preenchido',
            'descricao.required' => 'O campo da Descrição deve ser preenchido',
            'unique' => 'O(a) :attribute já foi registado ',

        ];
    }

    public function attributes()
    {
        return [
            'titulo' => 'Titulo',
            'descricao' => 'Descrição',
            'imagem' => 'Imagem'
        ];
    }
}
