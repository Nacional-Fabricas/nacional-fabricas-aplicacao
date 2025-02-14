<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

use App\Http\Controllers\VisualizacoesController;
use App\Http\Controllers\NotificacoesController;
use App\Http\Controllers\RootController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/** páginas gerais */
require base_path('routes/publicas/rotas_publicas.php');

Route::get('/sitemap.xml', [EventController::class, 'sitemap'])->name('sitemap');
Route::post('/formulario-contato', [EventController::class, 'enviarForm'])->name('formulario_contato');

/** Validação para acesso apenas quando logado */
Route::middleware(['auth'])->group(function () {

    /** Páginas do Root */
    Route::get('/controle-geral', [RootController::class, 'root'])->name('controle_geral');

    /** Cadastro */
    require base_path('routes/cadastros/rotas_cadastros.php');

    /** Assinaturas */
    require base_path('routes/assinaturas/rotas_assinatura.php');


});

Route::middleware(['auth', 'cadastroFinalizado'])->group(function () {

    /** Notificações */
    Route::get('/notificacoes', [NotificacoesController::class, 'notificacoes'])->name('notificacoes');

    /** Visualizações */
    Route::get('/visualizacoes', [VisualizacoesController::class, 'visualizacoes'])->name('visualizacoes');

});

Route::middleware(['auth', 'cadastroFinalizado'])->group(function () {

    require base_path('routes/painel/rotas_painel.php');

    /** Produtos */
    require base_path('routes/produtos/rotas_produtos.php');

    /** Categorias */
    require base_path('routes/categorias/rotas_categorias.php');

    /** Cotação */
    require base_path('routes/cotacoes/rotas_cotacoes.php');

    /** Site */
    require base_path('routes/site/rotas_site.php');

    /** Chamados */
    require base_path('routes/suporte/rotas_suporte.php');

    /** Time */
    Route::get('/meu-time', [EventController::class, 'teams'])->name('meu_time');

});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

