<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TesouroDiretoController,
    MarketPlaceController,
    TitulosController
};

Route::get('/login', function () {
    return view('painel.vendas.index');
});


Route::get('/', [TitulosController::class, 'index'])->name('tituloa.index');
Route::get('/titulosDetalhes/{id}', [TitulosController::class, 'show'])->name('tituloa.show');
Route::get('/titulosLista', [TitulosController::class, 'index'])->name('tituloa.index');
Route::get('/titulosComprar', [TitulosController::class, 'comprar'])->name('tituloa.comprar');
//Route::get('/tesouro_direto', [TesouroDiretoController::class, 'index'])->name('tesouro_direto.index');

Route::get('/mp', [MarketPlaceController::class, 'index'])->name('mp.index');