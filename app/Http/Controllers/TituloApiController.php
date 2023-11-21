<?php

namespace App\Http\Controllers;

use App\Models\Titulo;
use Illuminate\Http\Request;
use App\Http\Requests\TituloRequest;

class TituloApiController extends Controller
{
    public function index()
    {
        try {
            $titulos = Titulo::all();

            if ($titulos->isEmpty()) {
                return response()->json(['error' => "Nenhum título encontrado"], 404);
            }

            return response()->json([
                'success' => true,
                'message' => "Títulos listados com sucesso.",
                'data' => $titulos
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => "Erro ao listar títulos: " . $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $titulo = Titulo::find($id);
            if (!$titulo) {
                return $this->error("Título não encontrado", 404);
            }

            return response()->json([
                'success' => true,
                'message' => "Título obtido com sucesso.",
                'data' => $titulo
                
            ], 200);
        } catch (\Exception $e) {
            return $this->error("Erro ao obter título: " . $e->getMessage(), 500);
        }
    }
    public function store(TituloRequest $request)
    {
        try {
            $titulo = Titulo::create([
                'titulo' => $request->input('titulo'),
                'descricao' => $request->input('descricao'),
            ]);

            return response()->json([
                'success' => true,
                'message' => "Título cadastrado com sucesso.",
                'data' => $titulo
            ], 201);
        } catch (\Exception $e) {
            return $this->error("Erro ao cadastrar título: " . $e->getMessage(), 500);
        }
    }

    public function update(TituloRequest $request, $id)
    {
        try {
            $titulo = Titulo::find($id);

            if (!$titulo) {
                return $this->error("Título não encontrado", 404);
            }

            $titulo->update([
                'titulo' => $request->input('titulo'),
                'descricao' => $request->input('descricao'),
            ]);

            return response()->json([
                'success' => true,
                'message' => "Título atualizado com sucesso.",
                'data' => $titulo
            ], 200);

        } catch (\Exception $e) {
            return $this->error("Erro ao atualizar título: " . $e->getMessage(), 500);
        }
    }

    public function delete($id)
    {
        try {
            $titulo = Titulo::find($id);

            if (!$titulo) {
                return $this->error("Título não encontrado", 404);
            }

            $titulo->delete();

            return response()->json([
                'success' => true,
                'message' => "Título excluído com sucesso.",
            ], 200);

        } catch (\Exception $e) {
            return $this->error("Erro ao excluir título: " . $e->getMessage(), 500);
        }
    }
}
