<?php

namespace App\Http\Requests;

use App\Models\Citizen;
use Illuminate\Foundation\Http\FormRequest;

class StoreCitizenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'cpf' => [
                'required',
                'digits:11',
                'unique:'.Citizen::class.',cpf',
            ],
            'nome' => 'required|string|max:50',
            'data_nascimento' => 'required|date',
            'nome_mae' => 'required|string|max:50',
            'nome_pai' => 'nullable|string|max:50',
            'sexo' => 'required|string|size:1|in:m,f,n', // Ajuste os valores permitidos conforme necessário
            'estado_civil' => 'required|string|max:10',
            'escolaridade' => 'required|string|max:30',
            'etnia' => 'required|string|max:15',
            'cns' => 'required|string|max:15,unique:'.Citizen::class.',cns',
            'telefone' => 'required|string|max:15',
            'logradouro' => 'required|string|max:60',
            'numero' => 'required|integer',
            'bairro' => 'required|string|max:30',
            'cidade' => 'required|string|max:50',
            'cep' => 'required|string|max:8',
            'uf' => 'required|string|size:2',
            'plano_saude' => 'required|string|max:3',
            'funcionario' => 'boolean',
            'comorbidade' => 'nullable|string|max:50',
        ];
    }

    public function attributes()
    {
        return [
            'cpf' => 'CPF',
            'nome' => 'Nome',
            'data_nascimento' => 'Data de Nascimento',
            'nome_mae' => 'Nome da Mãe',
            'nome_pai' => 'Nome do Pai',
            'sexo' => 'Sexo',
            'estado_civil' => 'Estado Civil',
            'escolaridade' => 'Escolaridade',
            'etnia' => 'Etnia',
            'cns' => 'CNS',
            'telefone' => 'Telefone',
            'logradouro' => 'Logradouro',
            'numero' => 'Número',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'cep' => 'CEP',
            'uf' => 'UF',
            'plano_saude' => 'Plano de Saúde',
            'funcionario' => 'Funcionário',
            'comorbidade' => 'Comorbidade',
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'O campo :attribute é obrigatório.',
            'cpf.digits' => 'O :attribute deve conter exatamente :digits dígitos.',
            'cpf.unique' => 'O :attribute já está sendo utilizado por outro usuário.',
            'nome.required' => 'O campo :attribute é obrigatório.',
            'nome.string' => 'O campo :attribute deve ser uma string.',
            'nome.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'data_nascimento.required' => 'O campo :attribute é obrigatório.',
            'data_nascimento.date' => 'O :attribute deve ser uma data válida.',
            'nome_mae.required' => 'O campo :attribute é obrigatório.',
            'nome_mae.string' => 'O campo :attribute deve ser uma string.',
            'nome_mae.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'nome_pai.string' => 'O campo :attribute deve ser uma string.',
            'nome_pai.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'sexo.required' => 'O campo :attribute é obrigatório.',
            'sexo.string' => 'O campo :attribute deve ser uma string.',
            'sexo.size' => 'O :attribute deve ter exatamente :size caractere(s).',
            'sexo.in' => 'O :attribute deve ser M (Masculino) ou F (Feminino).', // Ajuste os valores conforme necessário
            'estado_civil.required' => 'O campo :attribute é obrigatório.',
            'estado_civil.string' => 'O campo :attribute deve ser uma string.',
            'estado_civil.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'escolaridade.required' => 'O campo :attribute é obrigatório.',
            'escolaridade.string' => 'O campo :attribute deve ser uma string.',
            'escolaridade.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'etnia.required' => 'O campo :attribute é obrigatório.',
            'etnia.string' => 'O campo :attribute deve ser uma string.',
            'etnia.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'cns.required' => 'O campo :attribute é obrigatório.',
            'cns.string' => 'O campo :attribute deve ser uma string.',
            'cns.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'telefone.required' => 'O campo :attribute é obrigatório.',
            'telefone.string' => 'O campo :attribute deve ser uma string.',
            'telefone.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'logradouro.required' => 'O campo :attribute é obrigatório.',
            'logradouro.string' => 'O campo :attribute deve ser uma string.',
            'logradouro.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'numero.required' => 'O campo :attribute é obrigatório.',
            'numero.integer' => 'O campo :attribute deve ser um número inteiro.',
            'bairro.required' => 'O campo :attribute é obrigatório.',
            'bairro.string' => 'O campo :attribute deve ser uma string.',
            'bairro.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'cidade.required' => 'O campo :attribute é obrigatório.',
            'cidade.string' => 'O campo :attribute deve ser uma string.',
            'cidade.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'cep.required' => 'O campo :attribute é obrigatório.',
            'cep.string' => 'O campo :attribute deve ser uma string.',
            'cep.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'uf.required' => 'O campo :attribute é obrigatório.',
            'uf.string' => 'O campo :attribute deve ser uma string.',
            'uf.size' => 'O :attribute deve ter exatamente :size caractere(s).',
            'plano_saude.required' => 'O campo :attribute é obrigatório.',
            'plano_saude.string' => 'O campo :attribute deve ser uma string.',
            'plano_saude.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'funcionario.boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
            'comorbidade.string' => 'O campo :attribute deve ser uma string.',
            'comorbidade.max' => 'O :attribute não pode ter mais de :max caracteres.',
        ];
    }
}
