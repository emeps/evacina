<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_campanha';
    protected $table = 'aplicacao';
    protected $fillable = [
        'id_cidadao',
        'id_vacina',
        'dose',
        'data_aplicacao',
        'nome_aplicador',
        'unidade_saude',
        'lote'
    ];
}
