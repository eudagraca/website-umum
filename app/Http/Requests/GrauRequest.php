<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrauRequest extends FormRequest
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
            'grau' => 'required|max:255|string|unique:graus',
        ];
    }

     public function messages()
    {
        return [

            'grau.required' => 'O campo da Grau deve estar preenchido',
        ];
    }

    public function attributes()
    {
        return [
            'grau' => 'Grau',
        ];
    }
}
