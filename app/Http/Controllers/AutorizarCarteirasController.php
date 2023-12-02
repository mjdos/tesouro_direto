<?php

namespace App\Http\Controllers;

use App\Models\CarteirasAutorizadas;
use Illuminate\Http\Request;

class AutorizarCarteirasController extends Controller
{
    public function index()
    {
        $carteiras = CarteirasAutorizadas::all();
        
        return view('painel.autorizarCarteiras.index', compact('carteiras'));
    }

    public function store(Request $request)
    {

        $dados = [
            'carteira' => $request->carteira,
        ];

        CarteirasAutorizadas::create($dados);

        $carteiras = CarteirasAutorizadas::all();

        return redirect()->route('autorizarCateiras.index', compact('carteiras'));
    }
}
