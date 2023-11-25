<?php

namespace App\Http\Requests;

use App\Models\Citizen;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCitizenRequest extends FormRequest
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
        dd('estou burrando');
        return [
            'cpf' => ['required', 'string', 'size:11', 'unique:'.User::class],
            'nome' => ['required', 'string', 'max:50'],
            'data_nascimento' => ['required', 'date'],
            'mother' => ['required', 'string', 'max:50'],
            'father' => ['required', 'string', 'max:50'],
            'sex' => ['required', 'size:1'],
            'estado_civil' => ['required',  'max:10'],
            'escolaridade' => ['required', 'max:30'],
            'etnia' => ['required', 'string', 'max:15'],
            'cns' => ['required', 'string', 'size:15', 'unique:'.User::class],
            'telefone' => ['required', 'string', 'size:15'],
            'logradouro' => ['required', 'string', 'max:60'],
            'numero' => ['required', 'integer'],
            'bairro' => ['required', 'string', 'max:30'],
            'cidade' => ['required', 'string', 'max:50'],
            'estado' => ['required', 'string', 'size:2'],
            'cep' => ['required', 'string', 'size:8'],
            'uf' => ['required', 'string', 'size:2'],
            'plano_saude' => ['required', 'string', 'size:3'],
            'comorbidade' => ['required', 'string', 'max:50'],
            'funcionario' => ['required'],
        ];
    }
}
