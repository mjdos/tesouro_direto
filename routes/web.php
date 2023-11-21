<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TesouroDiretoController,
    MarketPlaceController,
    TitulosController
};

Route::get('/teste', function () {
    return view('painel.vendas.index');
});

Route::get('/tesouro_direto', [TesouroDiretoController::class, 'index'])->name('tesouro_direto.index');
Route::get('/titulosLista', [TitulosController::class, 'index'])->name('tituloa.index');
Route::get('/titulosDetalhes/{id}', [TitulosController::class, 'show'])->name('tituloa.show');


Route::get('/mp', [MarketPlaceController::class, 'index'])->name('mp.index');