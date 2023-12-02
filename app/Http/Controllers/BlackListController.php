<?php

namespace App\Http\Controllers;

use App\Models\BlackList;
use Illuminate\Http\Request;

class BlackListController extends Controller
{
    public function index()
    {
        $carteirasBloqueadas = BlackList::all();
        return view('painel.BlackList.index', compact('carteirasBloqueadas'));
    }

    public function store(Request $request)
    {

        $dados = [
            'carteira' => $request->carteira,
        ];

        BlackList::create($dados);

        $carteirasBloqueadas = BlackList::all();

        return redirect()->route('blackListCateiras.index', compact('carteirasBloqueadas'));
    }

    public function delete(Request $request, $id)
    {
        $carteiraBloqueada = BlackList::find($id);

        $carteiraBloqueada->delete();

        $carteirasBloqueadas = BlackList::all();

        return redirect()->route('blackListCateiras.index', compact('carteirasBloqueadas'));
    }
}
