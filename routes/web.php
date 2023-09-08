<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route;

// Rota para o painel de administração
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

// Rota para a página de consulta de dados no painel de administração
Route::get('/admin/consulta', 'AdminController@consulta')->name('admin.consulta');

// Rota para a página de detalhes de máquinas no painel de administração
Route::get('/admin/maquinas/{id}', 'AdminController@detalhesMaquina')->name('admin.detalhes_maquina');

// Rota para a API de recebimento de dados das máquinas
Route::post('/api/machines', 'MachineController@receberDados')->name('api.receber_dados');


require __DIR__.'/auth.php';
