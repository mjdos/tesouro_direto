<?php

namespace App\Http\Controllers;

use App\Models\Titulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class TitulosController extends Controller
{

    public function index()
    {
        $titulos = Titulo::all();
        return view('painel.titulos.index',compact('titulos'));
    }

    public function show($id)
    {
        $titulos = Titulo::find($id);
        $minutes = [];
        $prices = [];
    
        $response = Http::timeout(60)->get('http://localhost:8000/api/grafico-mercados/1');
    
        if ($response->successful()) {
            $data = $response->json();
            $mercados = $data['mercados'];
    
            $minutes = array_column($mercados, 'data_hora');
            $prices = array_column($mercados, 'valor_operacao');
        } else {
            $errorDetails = $response->json();
            dd($errorDetails);
        }
    
        return view('painel.titulos.show', compact('titulos', 'minutes', 'prices'));
    }
    
}
