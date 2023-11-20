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
    
}
