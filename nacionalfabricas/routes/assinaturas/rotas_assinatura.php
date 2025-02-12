<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssinaturaController;

Route::get('/meu-plano', [AssinaturaController::class, 'meuPlano'])->name('meu_plano');
Route::get('/checkout/{plano}-{customer_id}-{cadastro_id}', [AssinaturaController::class, 'checkout'])->name('checkout');
Route::post('/processar-checkout/{plano}', [AssinaturaController::class, 'processarCheckout'])->name('processar');
Route::get('/finaliza-assinatura', [AssinaturaController::class, 'sucesso'])->name('sucesso');
