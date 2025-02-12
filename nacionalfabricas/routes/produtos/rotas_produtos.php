<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

/** Rotas para ações nos produtos */
Route::post('/criar-produto', [ProdutosController::class, 'create'])->name('criar_produto');
Route::put('/salvar-produto', [ProdutosController::class, 'update'])->name('salvar_produto');
Route::put('/deletar-produto', [ProdutosController::class, 'update'])->name('deletar_produto');
Route::get('/editar-produto/{id}', [ProdutosController::class, 'editarProduto'])->name('editar_produto');
Route::get('/criar-produto', [ProdutosController::class, 'criarProdutos'])->name('criar_produto');
Route::get('/lista-de-produtos', [ProdutosController::class, 'listarProdutos'])->name('lista_produtos');

/** Rotas para ações nas imagens produtos */
Route::delete('/deletar-foto-galeria', [ProdutosController::class, 'deletarFotoGaleria'])->name('deletar_foto_galeria');
Route::post('/recortar-imagem-produto', [ProdutosController::class, 'recortarImagemProduto'])->name('recortar_imagem_produto');
Route::post('/recortar-imagem-galeria', [ProdutosController::class, 'recortarImageGaleria'])->name('salvar_imagem_galeria');
