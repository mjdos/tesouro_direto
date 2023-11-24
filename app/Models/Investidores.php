<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investidores extends Model
{
    use HasFactory;

    protected $table = 'tbl_investidores';

    protected $fillable = [
        'nome',
        'cpf',
        'carteira_token',
    ]
}
