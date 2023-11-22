<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    TesouroDiretoController,
    MarketPlaceController,
    TitulosController,
    LoginController
};

Route::get('/login', function () {
    return view('painel.vendas.index');
});

Route::middleware('guest')->group(function () {

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store']);

});

Route::get('/', function () {
    return view('welcome');});
Route::get('/teste', function () {
    return view('painel.vendas.index');
});

Route::middleware('auth')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // criação de títulos 
    Route::get('/CriarTitulos', [TitulosController::class, 'indexCriar'])->name('criarTitulos.index');
    Route::get('/CriarTitulo', [TitulosController::class, 'createIndex'])->name('createTitulos.index');
    Route::post('/CriarTitulo', [TitulosController::class, 'store'])->name('criarTitulos.store');
    Route::get('/Titulo/edit/{id}', [TitulosController::class, 'editIndex'])->name('editTitulo.edit');
    Route::post('/Titulo/update', [TitulosController::class, 'update'])->name('updateTitulo.update');

});
Route::get('/tesouro_direto', [TesouroDiretoController::class, 'index'])->name('tesouro_direto.index');
Route::get('/titulosLista', [TitulosController::class, 'index'])->name('tituloa.index');
Route::get('/titulosDetalhes/{id}', [TitulosController::class, 'show'])->name('tituloa.show');

Route::get('/', [TitulosController::class, 'index'])->name('tituloa.index');
Route::get('/titulosDetalhes/{id}', [TitulosController::class, 'show'])->name('tituloa.show');
Route::get('/titulosLista', [TitulosController::class, 'index'])->name('tituloa.index');
Route::get('/titulosComprar', [TitulosController::class, 'comprar'])->name('tituloa.comprar');
//Route::get('/tesouro_direto', [TesouroDiretoController::class, 'index'])->name('tesouro_direto.index');

Route::get('/mp', [MarketPlaceController::class, 'index'])->name('mp.index');