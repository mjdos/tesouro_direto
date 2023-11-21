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
        return view('painel.titulos.index', compact('titulos'));
    }

    public function show($id)
    {
        $titulos =  Http::timeout(60)->get('http://localhost:8000/api/titulos/show/'.$id);
        $response = Http::timeout(60)->get('http://localhost:8000/api/grafico-mercados/'.$id);
        $minutes = [];
        $prices = [];
       

        if ($response->successful()) {
            $data = $response->json();
            $mercados = $data['mercados'];
            $minutes = array_column($mercados, 'data_hora');
            $prices = array_column($mercados, 'valor_operacao');
            $names =   $titulos['data']['titulo'];
        } else {
            $errorDetails = $response->json();
            dd($errorDetails);
        }
        
        return view('painel.titulos.show', compact('titulos', 'minutes', 'prices', 'names'));
    }
}
