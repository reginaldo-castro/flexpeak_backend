<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producao extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_fragrancia',
        'fragrancia_qtd',
        'alcool_qtd',
        'agua_qtd',
        'descricao',
        'qtd_produzida',
        'quantidade_ml',
    ];

}
