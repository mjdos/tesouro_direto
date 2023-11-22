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
        $titulos =  Http::timeout(60)->get('http://localhost:8000/api/titulos/show/' . $id);
        $response = Http::timeout(60)->get('http://localhost:8000/api/grafico-mercados/' . $id);
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

    public function comprar()
    {
        return view('painel.vendas.index');
    }
    public function indexCriar()
    {
        $titulos = Titulo::all();
        return view('painel.criarTitulos.index',compact('titulos'));
    }

    public function createIndex()
    {
        $titulos = Titulo::all();
        return view('painel.criarTitulos.criarTitulos',compact('titulos'));
    }

    public function store(Request $request)
    {
        $descricao = [
            'nome' => $request->nome,
            'dataVencimento' => date('d/m/Y', strtotime($request->dataVencimento)),
            'rentabilidadeAnual' => $request->rentabilidadeAnual,
            'valorNominal' => $request->valorNominal,
            'aliquotaIR' => $request->aliquotaIR,
            'isentoIOF' => $request->isencaoIof
        ];
        Titulo::create(['dados'=>json_encode($descricao)]);
        $titulos = Titulo::all();

        return redirect()->route('criarTitulos.index',compact('titulos'));
    }

    public function editIndex($id)
    {
        $titulo = Titulo::find($id);
        return view('painel.criarTitulos.editTitulos',compact('titulo'));
    }

    public function update(Request $request)
    {
        $titulo = Titulo::find($request->titulo_id);
        $descricao = [
            'nome' => $request->nome,
            'dataVencimento' => date('d/m/Y', strtotime($request->dataVencimento)),
            'rentabilidadeAnual' => $request->rentabilidadeAnual,
            'valorNominal' => $request->valorNominal,
            'aliquotaIR' => $request->aliquotaIR,
            'isentoIOF' => $request->isencaoIof
        ];
        $titulo->update(['dados'=>json_encode($descricao)]);
        $titulos = Titulo::all();

        return redirect()->route('criarTitulos.index',compact('titulos'));
    }
    
}
