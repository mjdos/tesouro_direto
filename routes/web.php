<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesouroDiretoController;
use App\Http\Controllers\TitulosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tesouro_direto', [TesouroDiretoController::class, 'index'])->name('tesouro_direto.index');
Route::get('/titulosLista', [TitulosController::class, 'index'])->name('tituloa.index');
Route::get('/titulosDetalhes/{id}', [TitulosController::class, 'show'])->name('tituloa.show');