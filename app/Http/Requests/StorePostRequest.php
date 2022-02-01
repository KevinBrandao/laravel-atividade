<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->comment->name === $this->user()->id;
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
            'name.required' => 'A imagem é obrigatória',
            'name.mimes' => 'Extensão não suportada',
            'email.required' => 'A descrição é obrigatoria'
        ];
    }
}
