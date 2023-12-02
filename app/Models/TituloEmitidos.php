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
        'user_id',
        'carteira_remetente',
        'carteira_destino',
        'quantidade',
        'valor',
    ];
}
