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
};


Route::get('/welcome', function () {
    return view('welcome');
});
Route::middleware('guest')->group(function () {

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store']);
    Route::get('/loginCliente', [AuthController::class, 'index'])->name('login.cliente');
    Route::post('/loginCliente', [AuthController::class, 'store']);

});



Route::get('/teste', function () {
    return view('painel.vendas.index');
});

Route::get('/site', function () {
    return view('site.index');
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


    Route::get('/EmitirTitulos', [TitulosController::class, 'indexEmitir'])->name('emitirTitulos.index');
    Route::get('/EmitirTitulo', [TitulosController::class, 'createEmitir'])->name('emitirTitulo.index');
    Route::post('/EmitirTitulo', [TitulosController::class, 'storeEmitir'])->name('emitirTitulos.store');
    // Route::get('/Titulo/edit/{id}', [TitulosController::class, 'editIndex'])->name('editTitulo.edit');
    // Route::post('/Titulo/update', [TitulosController::class, 'update'])->name('updateTitulo.update');

});


Route::get('/tesouro_direto', [TesouroDiretoController::class, 'index'])->name('tesouro_direto.index');
Route::get('/titulosLista', [TitulosController::class, 'index'])->name('titulos.index');
Route::get('/titulosDetalhes/{id}', [TitulosController::class, 'show'])->name('titulos.show');

Route::get('/', [TitulosController::class, 'index'])->name('titulos.index');
Route::get('/titulosDetalhes/{id}', [TitulosController::class, 'show'])->name('titulos.show');
Route::get('/titulosLista', [TitulosController::class, 'index'])->name('titulos.index');
Route::get('/titulosComprar/{id}', [TitulosController::class, 'comprar'])->name('titulos.comprar');
Route::any('/titulos/cancelar/{id}', [TitulosController::class, 'cancelar'])->name('titulos.cancelar');
Route::any('/titulos/finalizar/{id}', [TitulosController::class, 'finalizar'])->name('titulos.finalizar');
//Route::get('/tesouro_direto', [TesouroDiretoController::class, 'index'])->name('tesouro_direto.index');

Route::get('/mp', [MarketPlaceController::class, 'index'])->name('mp.index');
Route::get('/exchange', [MarketPlaceController::class, 'exchange'])->name('exchange.index');


Route::get('/rotaTeste', [TitulosController::class, 'teste'])->name('teste.meu');

//Rotas de Auditoria
Route::any('/auditoria', [AuditoriaController::class, 'index'])->name('auditoria.index');
