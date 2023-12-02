<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    TesouroDiretoController,
    MarketPlaceController,
    TitulosController,
    LoginController,
    AuthController,
    AuditoriaController,
    AutorizarCarteirasController,
    BlackListController,
};


Route::get('/', function () {
    return view('index');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);

Route::get('/tesouro_direto', [TesouroDiretoController::class, 'index'])->name('tesouro_direto.index');
Route::get('/titulosLista', [TitulosController::class, 'index'])->name('titulos.lista.index');
Route::get('/titulosDetalhes/{id}', [TitulosController::class, 'show'])->name('titulos.show');
Route::get('/titulosDetalhes/{id}', [TitulosController::class, 'show'])->name('titulos.show');
Route::get('/titulosComprar/{id}', [TitulosController::class, 'comprar'])->name('titulos.comprar');
Route::any('/titulos/cancelar/{id}', [TitulosController::class, 'cancelar'])->name('titulos.cancelar');
Route::any('/titulos/finalizar/{id}', [TitulosController::class, 'finalizar'])->name('titulos.finalizar');

Route::get('/market-place', [MarketPlaceController::class, 'index'])->name('mp.index');
Route::get('/exchange', [MarketPlaceController::class, 'exchange'])->name('exchange.index');

///Rotas Autenticadas
Route::middleware('auth')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // Criação dos Títulos 
    Route::get('/CriarTitulos', [TitulosController::class, 'indexCriar'])->name('criarTitulos.index');
    Route::get('/CriarTitulo', [TitulosController::class, 'createIndex'])->name('createTitulos.index');
    Route::post('/CriarTitulo', [TitulosController::class, 'store'])->name('criarTitulos.store');
    Route::get('/Titulo/edit/{id}', [TitulosController::class, 'editIndex'])->name('editTitulo.edit');
    Route::post('/Titulo/update', [TitulosController::class, 'update'])->name('updateTitulo.update');
    Route::get('/EmitirTitulos', [TitulosController::class, 'indexEmitir'])->name('emitirTitulos.index');
    Route::get('/EmitirTitulo', [TitulosController::class, 'createEmitir'])->name('emitirTitulo.index');
    Route::post('/EmitirTitulo', [TitulosController::class, 'storeEmitir'])->name('emitirTitulos.store');

    //Rotas de Auditoria
    Route::any('/auditoria', [AuditoriaController::class, 'index'])->name('auditoria.index');

    //Rotas de Autorizar Carteiras
    Route::get('/AutorizarCarteitas', [AutorizarCarteirasController::class, 'index'])->name('autorizarCateiras.index');
    Route::post('/AutorizarCarteita', [AutorizarCarteirasController::class, 'store'])->name('autorizarCateira.store');

    //Rotas de BlackList
    Route::get('/BlackListCarteitas', [BlackListController::class, 'index'])->name('blackListCateiras.index');
    Route::post('/BlackListCarteita', [BlackListController::class, 'store'])->name('blackListCateira.store');
    Route::post('/BlackListCarteita/{id}', [BlackListController::class, 'delete'])->name('blackListCateira.delete');

});