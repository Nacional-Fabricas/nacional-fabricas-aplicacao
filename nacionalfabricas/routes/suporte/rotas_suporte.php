<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuporteController;

Route::get('/suporte', [SuporteController::class, 'suporte'])->name('suporte');
Route::post('/criar-chamado', [SuporteController::class, 'create'])->name('criar_chamado');
Route::put('/atualizar-chamado', [SuporteController::class, 'update'])->name('atualizar_chamado');
Route::get('/chamado-{id}', [SuporteController::class, 'chamado'])->name('chamado');
