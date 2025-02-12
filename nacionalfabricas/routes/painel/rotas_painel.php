<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AreaComprasController;
use App\Http\Controllers\AreaVendasController;


/** Dashboard */
Route::get('/painel', [EventController::class, 'painel'])->name('painel');

/** Área de compras */
Route::get('/minhas-compras', [AreaComprasController::class, 'minhasCompras'])->name('minhas_compras');

/** Área de Vendas */
Route::get('/lista-cotacoes', [AreaVendasController::class, 'listarCotacoes'])->name('lista_cotacoes');
