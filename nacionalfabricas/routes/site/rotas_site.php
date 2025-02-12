<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitesController;

/** Rtoas para ações no cadastro do Site */
Route::get('/dicas', [SitesController::class, 'dicas'])->name('dicas');
Route::get('/meu-site', [SitesController::class, 'meuSite'])->name('meu_site');
Route::post('/criar-site', [SitesController::class, 'create'])->name('criar_site');
Route::put('/atualizar-site', [SitesController::class, 'update'])->name('atualizar_site');

/** Rtoas para ações nas imagens Site */
Route::post('/recortar-plano-fundo', [SitesController::class, 'recortarBanner'])->name('recortar_plano_fundo');
Route::post('/recortar-logo', [SitesController::class, 'recortarLogo'])->name('recortar_logo');
Route::post('/recortar-destaque', [SitesController::class, 'recortarDestaque'])->name('recortar_destaque');
