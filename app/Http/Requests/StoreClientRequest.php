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
            'name' => 'required',
            'email' => 'required'
        ];
    }
    public function messagens()
    {
        return[
            'name.required' => 'Um nome é obrigatório',
            'email.required' => 'E-mail não pode ser vazio'
        ];
    }
}
