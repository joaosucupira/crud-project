<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // name -> obrigatorio
            'name' => 'required',
            // email ->obrigatoria E tem que ser email
            'email' => 'required|email',
            // senha -> obrigatorio E tem que ter no mínimo 6 caracteres
            'password' => 'required|min:6'

        ];
    }
}
