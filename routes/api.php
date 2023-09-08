<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Rota para a página de detalhes de máquinas no painel de administração
Route::get('/admin/maquinas/{id}', 'AdminController@detalhesMaquina')->name('admin.detalhes_maquina');

// Rota para a API de recebimento de dados das máquinas
Route::post('/api/machines', 'MachineController@receberDados')->name('api.receber_dados');

