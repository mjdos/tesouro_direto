<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesouroDiretoController extends Controller
{
    public function index()
    {
        $mensagem = "Bem-vindo ao Tesouro Direto!";
        return view('tesouro_direto.index', compact('mensagem'));
    }
}
