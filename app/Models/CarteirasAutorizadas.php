<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteirasAutorizadas extends Model
{
    use HasFactory;

    protected $table = 'carteiras_autorizadas';

    protected $fillable = [
        'id',
        'carteira'
    ];
}
