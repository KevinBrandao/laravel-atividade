<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'name' => 'required|mimes:jpg,bmp,png',
            'email' => 'required'
        ];
    }
    public function messagens()
    {
        return[
            'name.required' => 'Um nome é obrigatório',
            'name.mimes' => 'Extensão não suportada',
            'email.required' => 'A descrição é obrigatoria'
        ];
    }
}