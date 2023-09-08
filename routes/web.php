<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/home', 'welcome');
Route::get('/admin', 'AdminController@index');


require __DIR__.'/auth.php';
