<?php

namespace App\Http\Controllers;

use App\Models\Titulo;
use Illuminate\Http\Request;

class MarketPlaceController extends Controller
{
    public function index()
    {
        $titulos = Titulo::all();
        return view('mp.index', compact('titulos'));
    }

    public function exchange()
    {
        return view('mp.exchange');
    }

}
