<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = ['titulo_id', 'quantidade', 'preco_unitario', 'total'];

    public function titulo()
    {
        return $this->belongsTo(Titulo::class);
    }
}
