<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CadastrosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\AssinaturaController;
use App\Http\Controllers\VisualizacoesController;
use App\Http\Controllers\NotificacoesController;
use App\Http\Controllers\AreaComprasController;
use App\Http\Controllers\AreaVendasController;
use App\Http\Controllers\RootController;
use App\Http\Controllers\SitesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\SuporteController;
use App\Http\Controllers\CotacoesController;

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
Route::get('/', [EventController::class, 'home'])->name('home');
Route::get('/funcionalidades', [EventController::class, 'funcionalidades'])->name('funcionalidades');
Route::get('/planos', [AssinaturaController::class, 'planos'])->name('planos');
Route::get('/contato', [EventController::class, 'contato'])->name('contato');
Route::get('/ajuda', [EventController::class, 'ajuda'])->name('ajuda');
Route::get('/termos-de-uso', [EventController::class, 'termosUso'])->name('termos_de_uso');
Route::get('/politica-de-privacidade', [EventController::class, 'politicaPrivacidade'])->name('politica_privacidade');
Route::get('/produto/{id}', [ProdutosController::class, 'produto'])->name('produto');
Route::get('/busca-geral', [EventController::class, 'buscaGeral'])->name('busca_geral');
Route::get('/industria/busca-{site_id}/{industria_nome}', [SitesController::class, 'buscaSite'])->name('busca_site');
Route::get('/industria/{site_id}/{site_slug}', [SitesController::class, 'site'])->name('site_industria');
Route::get('/cotacoes', [CotacoesController::class, 'carrinho'])->name('cotacoes');
Route::get('/sitemap.xml', [EventController::class, 'sitemap'])->name('sitemap');
Route::post('/formulario-contato', [EventController::class, 'enviarForm'])->name('formulario_contato');

/** Validação para acesso apenas quando logado */
Route::middleware(['auth'])->group(function () {

    /** Páginas do Root */
    Route::get('/controle-geral', [RootController::class, 'root'])->name('controle_geral');

    /** Cadastro */
    Route::get('/finalizar-cadastro', [CadastrosController::class, 'finalizarCadastro'])->name('finalizar_cadastro');
    Route::post('/criar-cadastro', [CadastrosController::class, 'create'])->name('criar_cadastro');
    Route::put('/atualizar-cadastro', [CadastrosController::class, 'update'])->name('atualizar_cadastro');
    Route::get('/dados-cadastrais', [CadastrosController::class, 'dadosCadastrais'])->name('dados_cadastrais');
    Route::delete('/excluir-cnae', [CadastrosController::class, 'deleteCnae'])->name('excluir_cnae');

    //Route::post('/criar-mensagem', [ManipulationController::class, 'create'])->name('criar_mensagem');
    //Route::post('/rating', [ManipulationController::class, 'postStar'])->name('rating');
    //Route::post('/comentar', [ManipulationController::class, 'comentar'])->name('comentar');

    /** Assinaturas */
    Route::get('/checkout/{plano}-{customer_id}-{cadastro_id}', [AssinaturaController::class, 'checkout'])->name('checkout');
    Route::post('/processar-checkout/{plano}', [AssinaturaController::class, 'processarCheckout'])->name('processar');
    Route::get('/finaliza-assinatura', [AssinaturaController::class, 'sucesso'])->name('sucesso');

});

Route::middleware(['auth', 'cadastroFinalizado'])->group(function () {

    /** Assinaturas
    Route::get('/checkout-{stripe_customer_id}-{id_preco}', [AssinaturaController::class, 'create'])->name('checkout');
    Route::get('/subscription/complete', [AssinaturaController::class, 'finalizaPagamento'])->name('completa_assinatura');
    Route::get('/fatura/{id}', [FaturaController::class, 'handleAction'])->name('faturas.handle');

    Notificações */

    Route::get('/notificacoes', [NotificacoesController::class, 'notificacoes'])->name('notificacoes');

    /** Visualizações */
    Route::get('/visualizacoes', [VisualizacoesController::class, 'visualizacoes'])->name('visualizacoes');
});

Route::middleware(['auth', 'cadastroFinalizado','temPlano', 'verified'])->group(function () {

    /** Assinaturas */
    Route::get('/meu-plano', [AssinaturaController::class, 'meuPlano'])->name('meu_plano');

    /** Dashboard */
    Route::get('/painel', [EventController::class, 'painel'])->name('painel');

    /** Área de compras */
    Route::get('/minhas-compras', [AreaComprasController::class, 'minhasCompras'])->name('minhas_compras');

    /** Área de Vendas */
    Route::get('/lista-cotacoes', [AreaVendasController::class, 'listarCotacoes'])->name('lista_cotacoes');

    /** Produtos */
    Route::post('/criar-produto', [ProdutosController::class, 'create'])->name('criar_produto');
    Route::put('/salvar-produto', [ProdutosController::class, 'update'])->name('salvar_produto');
    Route::put('/deletar-produto', [ProdutosController::class, 'update'])->name('deletar_produto');
    Route::get('/editar-produto/{id}', [ProdutosController::class, 'editarProduto'])->name('editar_produto');
    Route::get('/criar-produto', [ProdutosController::class, 'criarProdutos'])->name('criar_produto');
    Route::get('/lista-de-produtos', [ProdutosController::class, 'listarProdutos'])->name('lista_produtos');

    /** Imagens produtos */
    Route::delete('/deletar-foto-galeria', [ProdutosController::class, 'deletarFotoGaleria'])->name('deletar_foto_galeria');
    Route::post('/recortar-imagem-produto', [ProdutosController::class, 'recortarImagemProduto'])->name('recortar_imagem_produto');
    Route::post('/recortar-imagem-galeria', [ProdutosController::class, 'recortarImageGaleria'])->name('salvar_imagem_galeria');

    /** Categorias */
    Route::get('/categorias', [CategoriasController::class, 'categorias'])->name('categorias');
    Route::get('/criar-categoria', [CategoriasController::class, 'criarCategoria'])->name('criar_categoria');
    Route::get('/categoria/{id}', [CategoriasController::class, 'categoria'])->name('categoria');
    Route::post('/criar-categoria', [CategoriasController::class, 'create'])->name('criar_categoria_post');
    Route::put('/atualizar-categoria', [CategoriasController::class, 'update'])->name('atualizar_categoria');
    Route::delete('/excluir-categoria', [CategoriasController::class, 'delete'])->name('excluir_categoria');

    /** Cotação */
    Route::post('/adicionar-cotacao', [CotacoesController::class, 'adicionaProdutoCotacao'])->name('adicionar_cotacao');
    Route::post('/remover-cotacao', [CotacoesController::class, 'removeProdutoCotacao'])->name('remover_cotacao');
    Route::post('/criar-cotacao/{id}', [CotacoesController::class, 'create'])->name('criar_cotacao');
    Route::put('/aprovar-cotacao', [CotacoesController::class, 'aprovar'])->name('aprovar_cotacao');
    Route::put('/finalizar-cotacao', [CotacoesController::class, 'finalizar'])->name('finalizar_cotacao_put');
    Route::put('/cancelar-cotacao-{id}', [CotacoesController::class, 'cancelar'])->name('cancelar_cotacao');
    Route::put('/atualizar-cotacao', [CotacoesController::class, 'update'])->name('atualizar_cotacao');
    Route::get('/limpar-cotacao', [CotacoesController::class, 'limpaOrcamento'])->name('limpar_cotacao');
    Route::get('/negociacoes/cotacao-{id}', [CotacoesController::class, 'cotacao'])->name('negociacao_cotacao');

    /** Site */
    Route::get('/dicas', [SitesController::class, 'dicas'])->name('dicas');
    Route::get('/meu-site', [SitesController::class, 'meuSite'])->name('meu_site');
    Route::post('/criar-site', [SitesController::class, 'create'])->name('criar_site');
    Route::put('/atualizar-site', [SitesController::class, 'update'])->name('atualizar_site');

    /** Imagens Site */
    Route::post('/recortar-plano-fundo', [SitesController::class, 'recortarBanner'])->name('recortar_plano_fundo');
    Route::post('/recortar-logo', [SitesController::class, 'recortarLogo'])->name('recortar_logo');
    Route::post('/recortar-destaque', [SitesController::class, 'recortarDestaque'])->name('recortar_destaque');

    /** Time */
    Route::get('/meu-time', [EventController::class, 'teams'])->name('meu_time');

    /** Chamados */
    Route::get('/suporte', [SuporteController::class, 'suporte'])->name('suporte');
    Route::post('/criar-chamado', [SuporteController::class, 'create'])->name('criar_chamado');
    Route::put('/atualizar-chamado', [SuporteController::class, 'update'])->name('atualizar_chamado');
    Route::get('/chamado-{id}', [SuporteController::class, 'chamado'])->name('chamado');

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

