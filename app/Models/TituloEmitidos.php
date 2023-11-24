<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TituloEmitidos extends Model
{
    use HasFactory;

    protected $table = 'tbl_titulos_emitidos';

    protected $fillable = [
        'idExterno',
        'carteira_destino',
        'quantidade',
        'carteira_remetente',
    ];
}
