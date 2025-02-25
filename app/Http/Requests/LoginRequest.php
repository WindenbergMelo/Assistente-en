<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // required é para verificar se está vazio e no caso do email quando é colocado o nome email na validação é para verificar se o email está no formato correto
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages(): array{
        return[
            'email.required' => 'Campo e-mail obrigatorio',
            'email.email' => 'E-mail invalido',
            'password.required' => 'Campo senha obrigatorio'
        ];
    }    
}
