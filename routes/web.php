<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');

Route::get('/productos/edit/{id}', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');

Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.delete');


Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');

Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');

Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');

Route::get('/categorias/edit/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update');

Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.delete');
