<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AssinaturaController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SitesController;

Route::get('/', [EventController::class, 'home'])->name('home');
Route::get('/funcionalidades', [EventController::class, 'funcionalidades'])->name('funcionalidades');
Route::get('/planos', [AssinaturaController::class, 'planos'])->name('planos');
Route::get('/contato', [EventController::class, 'contato'])->name('contato');
Route::get('/ajuda', [EventController::class, 'ajuda'])->name('ajuda');
Route::get('/termos-de-uso', [EventController::class, 'termosUso'])->name('termos_de_uso');
Route::get('/politica-de-privacidade', [EventController::class, 'politicaPrivacidade'])->name('politica_privacidade');
Route::get('/produto/{id}', [ProdutosController::class, 'produto'])->name('produto');
Route::get('/busca-geral', [EventController::class, 'buscaGeral'])->name('busca_geral');
Route::get('/industria/busca-{id}/{industria_nome}', [SitesController::class, 'buscaSite'])->name('busca_site');
Route::get('/industria/{id}/{slug}', [SitesController::class, 'site'])->name('site');
