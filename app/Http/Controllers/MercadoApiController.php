<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mercado;
use App\Http\Requests\MercadoRequest;

class MercadoApiController extends Controller
{
    public function index()
    {
        try {
            $operacoes = Mercado::all();

            if ($operacoes->isEmpty()) {
                return response()->json(['error' => "Nenhum título encontrado"], 404);
            }

            return response()->json([
                'success' => true,
                'message' => "Títulos listados com sucesso.",
                'data' => $operacoes
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => "Erro ao listar títulos: " . $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $operacao = Mercado::find($id);

            if (!$operacao) {
                return $this->error("Operação de mercado não encontrada", 404);
            }

            return response()->json(['operacao' => $operacao], 200);
        } catch (\Exception $e) {
            return $this->error("Erro ao mostrar operação de mercado: " . $e->getMessage(), 500);
        }
    }

    public function store(MercadoRequest $request)
    {
        try {
            $operacao = Mercado::create($request->validated());

            return response()->json([
                'success' => true,
                'message' => "Operação de mercado registrada com sucesso.",
                'data' => $operacao
            ], 201);
        } catch (\Exception $e) {
            return $this->error("Erro ao registrar operação de mercado: " . $e->getMessage(), 500);
        }
    }

    public function update(MercadoRequest $request, $id)
    {
        try {
            $operacao = Mercado::find($id);

            if (!$operacao) {
                return $this->error("Operação de mercado não encontrada", 404);
            }

            $operacao->update($request->validated());

            return response()->json([
                'success' => true,
                'message' => "Operação de mercado atualizada com sucesso.",
                'data' => $operacao
            ], 200);
        } catch (\Exception $e) {
            return $this->error("Erro ao atualizar operação de mercado: " . $e->getMessage(), 500);
        }
    }

    public function delete($id)
    {
        try {
            $operacao = Mercado::find($id);

            if (!$operacao) {
                return $this->error("Operação de mercado não encontrada", 404);
            }

            $operacao->delete();

            return response()->json([
                'success' => true,
                'message' => "Operação de mercado excluída com sucesso.",
            ], 200);
        } catch (\Exception $e) {
            return $this->error("Erro ao excluir operação de mercado: " . $e->getMessage(), 500);
        }
    }

    function graficoMercados(Request $request, $id)
    {
        $query = Mercado::query();

        if ($id) {
            $query->where('titulo_id', $id);
        }

        $mercados = $query->join('tbl_titulo', 'tbl_mercado.titulo_id', '=', 'tbl_titulo.id')
            ->get(['tbl_titulo.titulo', 'tbl_mercado.data_hora', 'tbl_mercado.valor_operacao']);

        return response()->json(['mercados' => $mercados]);
    }

    public function graficoTeste()
    {
        $dados = [
            [1701154380000, "37082.57000000", "37096.77000000", "37082.57000000", "37096.76000000", "10.24278000", 1701154439999, "379917.11812280", 967, "5.95397000", "220842.74556280", "0"],
            [1701154440000, "37096.77000000", "37096.77000000", "37074.01000000", "37077.08000000", "15.26248000", 1701154499999, "566047.58699220", 743, "1.72962000", "64138.64474740", "0"],
            [1701154500000, "37077.08000000", "37086.62000000", "37067.62000000", "37067.63000000", "6.53198000", 1701154559999, "242197.89895310", 674, "2.30595000", "85500.71040050", "0"],
            [1701154560000, "37067.62000000", "37081.98000000", "37067.62000000", "37081.98000000", "5.34095000", 1701154619999, "198009.32464180", 480, "4.39242000", "162844.67673160", "0"],
        ];

        return response()->json($dados);
    }
}
