<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationnRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return [
            'id_cidadao' => 'required',
            'id_vacina' => 'required',
            'dose' => 'required|integer|min:1|max:10',
            'data_aplicacao' => 'required|date',
            'nome_aplicador' => 'required|string|max:50',
            'unidade_saude' => 'required|string|max:30',
            'lote' => 'required|string|max:20',
        ];
    }

    public function attributes()
    {
        return [
            'id_cidadao' => 'Cidadão',
            'id_vacina' => 'Vacina',
            'dose' => 'Dose',
            'data_aplicacao' => 'Data de Aplicação',
            'nome_aplicador' => 'Nome do Aplicador',
            'unidade_saude' => 'Unidade de Saúde',
            'lote' => 'Lote',
        ];
    }

    public function messages()
    {
        return [
            'id_cidadao.required' => 'O campo :attribute é obrigatório.',
            'id_cidadao.exists' => 'O :attribute selecionado é inválido.',
            'id_vacina.required' => 'O campo :attribute é obrigatório.',
            'id_vacina.exists' => 'O :attribute selecionado é inválido.',
            'dose.required' => 'O campo :attribute é obrigatório.',
            'dose.integer' => 'O campo :attribute deve ser um número inteiro.',
            'dose.min' => 'O campo :attribute deve ser no mínimo :min.',
            'data_aplicacao.required' => 'O campo :attribute é obrigatório.',
            'data_aplicacao.date' => 'O :attribute deve ser uma data válida.',
            'nome_aplicador.required' => 'O campo :attribute é obrigatório.',
            'nome_aplicador.string' => 'O campo :attribute deve ser uma string.',
            'nome_aplicador.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'unidade_saude.required' => 'O campo :attribute é obrigatório.',
            'unidade_saude.string' => 'O campo :attribute deve ser uma string.',
            'unidade_saude.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'lote.required' => 'O campo :attribute é obrigatório.',
            'lote.string' => 'O campo :attribute deve ser uma string.',
            'lote.max' => 'O :attribute não pode ter mais de :max caracteres.',
        ];
    }
}
