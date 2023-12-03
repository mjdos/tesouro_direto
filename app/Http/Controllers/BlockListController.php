<?php

namespace App\Http\Controllers;

use App\Models\BlockList;
use Illuminate\Http\Request;

class BlockListController extends Controller
{
    public function index()
    {
        $carteirasBloqueadas = BlockList::all();
        return view('painel.BlockList.index', compact('carteirasBloqueadas'));
    }

    public function store(Request $request)
    {

        $dados = [
            'carteira' => $request->carteira,
        ];

        BlockList::create($dados);

        $carteirasBloqueadas = BlockList::all();

        return redirect()->route('blockListCateiras.index', compact('carteirasBloqueadas'));
    }

    public function delete( $id)
    {
        $carteiraBloqueada = BlockList::find($id);

        $carteiraBloqueada->delete();

        $carteirasBloqueadas = BlockList::all();

        return redirect()->route('blockListCateiras.index', compact('carteirasBloqueadas'));
    }
}
