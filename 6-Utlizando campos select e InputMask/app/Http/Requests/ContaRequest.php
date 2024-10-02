<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContaRequest extends FormRequest
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
     * 
     * uso da validação do email e cpf unicos:
     * $userId existe: Se $userId existe (o que significa que estamos atualizando um usuário), a expressão vai retornar o ID do usuário, que será anexado à regra de unicidade. Isso diz ao sistema: "verifique a unicidade, mas ignore o registro que possui este ID".

        *Exemplo: Se o ID do usuário for 5, a regra se torna:
        *unique:users,email,5 — Isso significa: "O email deve ser único, exceto para o usuário com ID 5".

        *$userId não existe: Se $userId for null (o que significa que estamos criando um novo usuário), a regra de unicidade será aplicada normalmente para todos os registros.
     */
    public function rules(): array
    {
        $this->formatCpfInput();
        $userId = $this->route('user');
        return [
            "estado_id"=>'required',
            "cidade_id"=>'required',
            "name"=>'required',
            'email'=>'required|email|unique:users,email'. ($userId ? $userId->id : null),
            'cpf'=>'required|unique:users,cpf'. ($userId ? $userId->id : null),
            'password'=> 'required| min:6',
        ];
    }

    public function messages(): array
    {
        return[
            'estado_id.required'=>'Campo estado é obrigatório',
            'cidade_id.required'=>'Campo cidade é obrigatório',
            'name.required'=>'Campo nome é obrigatório',
            'password.required'=>'Campo senha é obrigatório',
            'email.required'=>'Campo email é obrigatório',
            'email.email'=>'Necessário enviar email válido',
            'email.unique'=>'Email já está cadastrado',
            'cpf.unique'=>'CPF já cadastrado',
            'password.min'=>'Senha deve ter no mínimo :min caracteres!',

        ];
    }

    protected function formatCpfInput(){
        $cpf = $this->input('cpf');
        $this->merge([
            'cpf'=>preg_replace('/\D/','',$cpf),//Remove os pontos e os traços
        ]);
    }
}
