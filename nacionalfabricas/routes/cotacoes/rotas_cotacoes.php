<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CotacoesController;

Route::get('/cotacoes', [CotacoesController::class, 'carrinho'])->name('cotacoes');
Route::post('/adicionar-cotacao', [CotacoesController::class, 'adicionaProdutoCotacao'])->name('adicionar_cotacao');
Route::post('/remover-cotacao', [CotacoesController::class, 'removeProdutoCotacao'])->name('remover_cotacao');
Route::post('/criar-cotacao/{id}', [CotacoesController::class, 'create'])->name('criar_cotacao');
Route::put('/aprovar-cotacao', [CotacoesController::class, 'aprovar'])->name('aprovar_cotacao');
Route::put('/finalizar-cotacao', [CotacoesController::class, 'finalizar'])->name('finalizar_cotacao_put');
Route::put('/cancelar-cotacao-{id}', [CotacoesController::class, 'cancelar'])->name('cancelar_cotacao');
Route::put('/atualizar-cotacao', [CotacoesController::class, 'update'])->name('atualizar_cotacao');
Route::get('/limpar-cotacao', [CotacoesController::class, 'limpaOrcamento'])->name('limpar_cotacao');
Route::get('/negociacoes/cotacao-{id}', [CotacoesController::class, 'cotacao'])->name('negociacao_cotacao');
