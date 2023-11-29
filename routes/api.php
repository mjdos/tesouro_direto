<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TituloApiController;
use App\Http\Controllers\MercadoApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/apiteste', function () {
    $teste = 'teste';
    return $teste;
 });

//titulos
Route::get('/titulos/listar', [TituloApiController::class, 'index'])->name('listarTitulos');
Route::get('/titulos/show/{id}', [TituloApiController::class, 'show'])->name('obterTitulo');
Route::post('/titulos', [TituloApiController::class, 'store'])->name('cadastrarTitulo');
Route::put('/titulos/update/{id}', [TituloApiController::class, 'update'])->name('atualizarTitulo');
Route::delete('/titulos/delete{id}', [TituloApiController::class, 'delete'])->name('excluirTitulo');

//mercado
Route::get('/mercado/index', [MercadoApiController::class, 'index'])->name('indexOperacao');
Route::get('/mercado/{id}', [MercadoApiController::class, 'show'])->name('showOperacao');
Route::post('/mercado/registrar', [MercadoApiController::class, 'store'])->name('storeOperacao');
Route::put('/mercado/atualizar/{id}', [MercadoApiController::class, 'update'])->name('updateOperacao');
Route::delete('/mercado/excluir/{id}', [MercadoApiController::class, 'delete'])->name('deleteOperacao');
Route::get('/grafico-mercados/{id}', [MercadoApiController::class, 'graficoMercados'])->name('graficoMercados');

Route::get('/grafico-teste', [MercadoApiController::class, 'graficoTeste'])->name('graficoTeste');

