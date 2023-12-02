<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercado extends Model
{
    use HasFactory;

    protected $table = 'tbl_mercado';

    protected $fillable = [
        'titulo_id',
        'carteira_origem',
        'carteira_destino',
        'data_hora',
        'valor_operacao',
        'quantidade',
        'valor_unitario',
    ];

    public function titulo()
    {
        return $this->belongsTo(Titulo::class, 'titulo_id');
    }
}
