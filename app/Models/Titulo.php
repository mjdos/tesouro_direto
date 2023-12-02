<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    use HasFactory;

    protected $table = 'tbl_titulo';

    protected $fillable = [
        'idExterno',
        'sigla',
        'nome',
        'dataVencimento',
        'rentabilidadeAnual',
        'valorNominal',
        'aliquotaIR',
        'taxa_b3',
        'isentoIOF'
    ];

}
