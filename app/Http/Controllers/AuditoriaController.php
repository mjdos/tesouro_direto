<?php

namespace App\Http\Controllers;

use App\Models\Mercado;
use Illuminate\Http\Request;

class AuditoriaController extends Controller
{
    public function index(Request $request)
    {
        $carteira_origem = $request->carteira_origem;
        $carteira_destino = $request->carteira_destino;

        if ($carteira_origem || $carteira_destino) {
            $mercados = Mercado::when($carteira_origem, function ($query) use ($carteira_origem) {
                $query->where('carteira_origem', $carteira_origem);
            })
                ->when($carteira_destino, function ($query) use ($carteira_destino) {
                    $query->orWhere('carteira_destino', $carteira_destino);
                })
                ->get();
        } else {
            $mercados = Mercado::all();
        }

        return view('painel.auditoria.index', compact('mercados', 'carteira_origem', 'carteira_destino'));
    }

}
