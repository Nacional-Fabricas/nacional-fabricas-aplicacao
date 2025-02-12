<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastrosController;

Route::get('/finalizar-cadastro', [CadastrosController::class, 'finalizarCadastro'])->name('finalizar_cadastro');
Route::post('/criar-cadastro', [CadastrosController::class, 'create'])->name('criar_cadastro');
Route::put('/atualizar-cadastro', [CadastrosController::class, 'update'])->name('atualizar_cadastro');
Route::get('/dados-cadastrais', [CadastrosController::class, 'dadosCadastrais'])->name('dados_cadastrais');
Route::delete('/excluir-cnae', [CadastrosController::class, 'deleteCnae'])->name('excluir_cnae');
