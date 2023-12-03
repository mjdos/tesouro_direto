<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Mercado;
use App\Models\Titulo;
use App\Models\TituloEmitidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

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

    public function comprar($id)
    {
        $titulo = Titulo::find($id);
        $compra = new Compra();
        $compra->titulo_id = $titulo->id;
        $compra->status = 'Iniciado';
        $compra->save();
        return view('painel.vendas.index', compact('titulo', 'compra'));
    }

    public function cancelar($id)
    {
        $venda = Compra::find($id);

        if ($venda) {
            $venda->status = 'Cancelado';
            $venda->save();
            return redirect()->route('titulos.index')->with('error', 'Compra cancelada com sucesso!');
        } else {
            return redirect()->route('titulos.index')->with('error', 'Não foi possível encontrar a venda.');
        }
    }

    public function finalizar($id, Request $request)
    {
        $venda = Compra::find($id);


        if ($venda) {

            Mercado::create([
                'titulo_id' => $venda->titulo_id,
                'carteira_vendedora' => 1,
                'carteira_compradora' => 1,
                'data_hora' => now()->toDateString(),
                'valor_unitario' => $request->valor,
                'quantidade' => $request->quantidade,
                'valor_operacao' => $request->input('quantidade') * $request->input('valor'),
            ]);

            // Atualiza o status da venda
            $venda->status = 'Finalizado';
            $venda->save();
            return redirect()->route('titulos.index')->with('success', 'Compra finalizada com sucesso!');
        } else {
            return redirect()->route('titulos.index')->with('error', 'Não foi possível encontrar a venda.');
        }
    }

    // Criação de Titulos
    public function indexCriar()
    {
        $titulos = Titulo::all();
        return view('painel.criarTitulos.index', compact('titulos'));
    }

    public function createIndex()
    {
        $titulos = Titulo::all();
        return view('painel.criarTitulos.criarTitulos', compact('titulos'));
    }

    public function store(Request $request)
    {

        $descricao = [
            'idExterno' => $request->idExterno,
            'nome' => $request->nome,
            'sigla' => $request->sigla,
            'dataVencimento' => date('d/m/Y', strtotime($request->dataVencimento)),
            'rentabilidadeAnual' => $request->rentabilidadeAnual,
            'valorNominal' => $request->valorNominal,
            'aliquotaIR' => $request->aliquotaIR,
            'taxa_b3' => $request->taxa_b3,
            'isentoIOF' => $request->isencaoIof
        ];

        Titulo::create($descricao);
        // $novo_titulo = json_encode($descricao);

        $titulos = Titulo::all();

        return redirect()->route('criarTitulos.index', compact('titulos'));
    }

    public function editIndex($id)
    {
        $titulo = Titulo::find($id);
        return view('painel.criarTitulos.editTitulos', compact('titulo'));
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
        $titulo->update(['idExterno' => $request->idExterno, 'dados' => json_encode($descricao)]);
        $titulos = Titulo::all();

        return redirect()->route('criarTitulos.index', compact('titulos'));
    }

    // Emissão de Titulos
    public function indexEmitir()
    {
        $titulos = Titulo::all();
        return view('painel.emitirTitulos.index', compact('titulos'));
    }

    public function createEmitir()
    {
        return view('painel.emitirTitulos.emitirtitulos');
    }

    public function storeEmitir(Request $request)
    {
        $usuario = Session::get('usuario');
        
        $descricao = [
            'idExterno' => $request->idExterno,
            'user_id' => $usuario['id'],
            'carteira_origem' =>$request->walletAddress,
            'carteira_destino' => $request->carteiraDestino,
            'quantidade' => bcmul($request->quantidade, bcpow("10", "18")),
        ];
        TituloEmitidos::create($descricao);
        $titulos = Titulo::all();
        
        return redirect()->route('emitirTitulos.index', compact('titulos'));
    }

    public function teste()
    {
        return view('teste.teste');
    }

    public function aVencerIndex()
    {
        return view('painel.titulosAvencer.index');
    }
}
