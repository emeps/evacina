<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreVacineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:50',
            'fabricante' => 'required|string|max:50',
            'lote' => 'required|string|max:20',
            'data_validade' => 'required|date',
            'doses' => 'required|integer|min:1',
            'doenca' => 'required|string|max:50',
        ];
    }

    public function attributes()
    {
        return [
            'nome' => 'Nome',
            'fabricante' => 'Fabricante',
            'lote' => 'Lote',
            'data_validade' => 'Data de Validade',
            'doses' => 'Doses',
            'doenca' => 'Doença',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo :attribute é obrigatório.',
            'nome.string' => 'O campo :attribute deve ser uma string.',
            'nome.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'fabricante.required' => 'O campo :attribute é obrigatório.',
            'fabricante.string' => 'O campo :attribute deve ser uma string.',
            'fabricante.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'lote.required' => 'O campo :attribute é obrigatório.',
            'lote.string' => 'O campo :attribute deve ser uma string.',
            'lote.max' => 'O :attribute não pode ter mais de :max caracteres.',
            'data_validade.required' => 'O campo :attribute é obrigatório.',
            'data_validade.date' => 'O :attribute deve ser uma data válida.',
            'doses.required' => 'O campo :attribute é obrigatório.',
            'doses.integer' => 'O campo :attribute deve ser um número inteiro.',
            'doses.min' => 'O campo :attribute deve ser no mínimo :min.',
            'doenca.required' => 'O campo :attribute é obrigatório.',
            'doenca.string' => 'O campo :attribute deve ser uma string.',
            'doenca.max' => 'O :attribute não pode ter mais de :max caracteres.',
        ];
    }
}
