<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/home', 'welcome');

require __DIR__.'/auth.php';
