<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;

Route::get('/categorias', [CategoriasController::class, 'categorias'])->name('categorias');
Route::get('/criar-categoria', [CategoriasController::class, 'criarCategoria'])->name('criar_categoria');
Route::get('/categoria/{id}', [CategoriasController::class, 'categoria'])->name('categoria');
Route::post('/criar-categoria', [CategoriasController::class, 'create'])->name('criar_categoria_post');
Route::put('/atualizar-categoria', [CategoriasController::class, 'update'])->name('atualizar_categoria');
Route::delete('/excluir-categoria', [CategoriasController::class, 'delete'])->name('excluir_categoria');
