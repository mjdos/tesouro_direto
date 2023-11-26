<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = ['titulo_id', 'status'];

    public function titulo()
    {
        return $this->belongsTo(Titulo::class);
    }
}
