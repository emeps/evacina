<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacine extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_vacina';
    protected $table = 'vacina';
    protected $fillable = [
        'nome',
        'fabricante',
        'lote',
        'data_validade',
        'doses',
        'doenca',
    ];
    public function application (){
        return $this->hasMany(Application::class);
    }
}
