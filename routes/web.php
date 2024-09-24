<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ClienteProductoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ClienteProductoController::class, 'index'])->name('index');
Route::get('/productos',[ClienteProductoController::class, 'show'])->name('show.productos');
Route::post('/producto-store',[ProductoController::class, 'store'])->name('productos.store');


Route::post('/clientes-store',[ClienteController::class, 'store'])->name('clientes.store');

Route::post('/deuda',[ClienteProductoController::class, 'store'])->name('deuda.store');

