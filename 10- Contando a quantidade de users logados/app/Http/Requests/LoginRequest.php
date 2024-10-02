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
            'email'=>'required|email',
            'password'=>'required',
        ];
    }

    public function messages(): array{
        return[
             // Mensagem para quando o campo 'email' não for preenchido
             'email.required' => 'Campo e-mail é obrigatório!',
             // Mensagem para quando o campo 'email' não contiver um endereço de e-mail válido
             'email.email' => 'Necessário enviar e-mail válido!',
             'email.unique'=>'Esse email já está em uso!',
             // Mensagem para quando o campo 'password' não for preenchido
             'password.required' => 'Campo senha é obrigatório!',
        ];
        
    }
}
