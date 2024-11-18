<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(MarcaController::class)->group( function() {
    Route::get('marcas', 'index')->name('marcas');
});
Route::middleware(['auth'])->group( function() {
    Route::controller(ProductoController::class)->group( function() {
        Route::get('productos', 'index')->name('productos');
        Route::get('productos_por_marca/{slug}', 'indexProductoMarca')->name('productos.marca');
        Route::post('obtener-producto-por-id', 'obtenerProductoPorId')->name('obtener.producto.id');
        Route::get('detalles-producto/{id}', 'show')->name('productos.detalles.producto');
    });
});

