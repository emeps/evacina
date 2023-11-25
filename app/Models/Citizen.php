<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\TextUI\Application;

class Citizen extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_cidadao';
    protected $fillable = [
        'cpf',
        'nome',
        'data_nascimento',
        'nome_mae',
        'nome_pai',
        'sexo',
        'estado_civil',
        'escolaridade',
        'etnia',
        'cns',
        'telefone',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'cep',
        'uf',
        'plano_saude',
        'comorbidade',
        'funcionario',
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function application(){
        return $this->belongsToMany(Application::class);
    }
}
