<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\NotaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('notas', 'App\Http\Controllers\NotaController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');