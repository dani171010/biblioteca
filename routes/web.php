<?php

use App\Http\Controllers\autor\autorcontroller;
use App\Http\Controllers\categoria\categoriacontroller;
use App\Http\Controllers\editorial\editorialcontroller;
use App\Http\Controllers\libro\librocontroller;
use App\Http\Controllers\prestamo\prestamocontroller;
use App\Http\Controllers\usuario\usuariocontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('usuario', usuariocontroller::class);
    Route::resource('prestamo', prestamocontroller::class);
    Route::resource('libro', librocontroller::class);
    Route::resource('editorial', editorialcontroller::class);
    Route::resource('categorias', categoriacontroller::class);
    Route::resource('autor', autorcontroller::class);
});
