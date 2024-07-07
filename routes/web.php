<?php

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
    Route::resource('categoria', categoriacontroller::class);
    Route::resource('autor', autorcontroller::class);
});
