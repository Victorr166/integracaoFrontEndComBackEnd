<?php

use App\Http\Controllers\NivelAcessoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nivel-acesso/cadastro',[NivelAcessoController::class, 'cadastro'])
->name('nivel-acesso.cadastro');
Route::post('/nível-acesso/salvar', [NívelAcessoController::class, 'add'])
->name('nível-acesso.salvar');
Route::get('/nivel-acesso/listar', [NivelAcessoController::class, 'listar'])
->name('nivel-acesso.listar');
