<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmission;
use App\Models\Cadastro;
use App\Models\Cotacao;
use App\Models\Plano;
use App\Models\Assinatura;
use App\Models\Estado;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Site;
use App\Models\Segmento;
use App\Models\Rating;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class EventController extends Controller
{
    public $user;

    public function painel (){

        $usuario = Auth::user();

        $usuarioId = $usuario -> current_team_id ?? $usuario -> id;

        $assinatura = Assinatura::where('id_conta', $usuarioId)->first();

        $nomeCompleto = $usuario ->name;

        $produto = Produto::where('id_conta', $usuarioId)
            ->orderBy('visualizacoes', 'desc')
            ->first();

        $produtos = Produto::where('id_conta',$usuarioId)->count();

        $produtosNotas = Produto::where('id_conta', $usuarioId)->get();

        if(count($produtosNotas) > 0){

            $classificacoes = [];

            foreach ($produtosNotas as $produtoNota) {

                $classificacaoNumero = Rating::where('id_produto', $produtoNota->id)->avg('rating');

                $classificacoes[$produtoNota->id] = $classificacaoNumero;
            }

            $classificacoes = $classificacoes[$produtoNota->id];

        }else{

            $classificacoes = 0;
        }

        $cotacoes = Cotacao::where('id_receptor', $usuarioId)->where('status_receptor', 'Aprovado')->orwhere('status_remetente', 'Aprovado')->count();

        $todasCotacoes = Cotacao::where('id_receptor', $usuarioId)->count();

        $cotacoesAbertas = Cotacao::where('id_receptor', $usuarioId)->where('status_receptor','!=', 'Aprovado')->orwhere('status_remetente','!=', 'Aprovado')
            ->orwhere('status_remetente','!=', 'Cancelado')->orwhere('status_remetente','!=', 'Finalizado')->count();

        if ($todasCotacoes > 0 ) {

            $cotacoes = ($cotacoes / $todasCotacoes) * 100 ;

        } else {

            $cotacoes = 0;
        }

        $ultimasVisualizacoes = Produto::where('id_conta', $usuarioId)->sum('visualizacoes');

        $cadastro  = Cadastro::where('id_conta', $usuarioId)->first();

        if ($cadastro-> fabricante == null) {

            return redirect()->route('minhas_compras');
        }

        $pontuacao = 25;

        $site = Site::where('id_conta', $usuarioId)->get();

        if(count($site) > 0){

            $pontuacao += 25;
        }

        if ($produtos > 0){

            $pontuacao += 25;
        }

        if (Auth::user() -> nivel_usuario > 10){

            $pontuacao += 25;
        }

        $pontuacao = $pontuacao;

        if($pontuacao == null || !$pontuacao ){

            $nivel = 'Bronze';

        }
        else{

            if($pontuacao > 0 && $pontuacao < 26){

                $nivel = 'Bronze';

            }elseif($pontuacao > 25 && $pontuacao < 51  ) {

                $nivel = 'Prata';

            }elseif($pontuacao > 50 && $pontuacao < 76  ){

                $nivel = 'Ouro';

            }else{

                $nivel = 'Platina';

            }

        }

        $orcamentoUltimos60Dias = Cotacao::where('id_receptor', $usuarioId)
            ->whereBetween('created_at', [Carbon::now()->subDays(60), Carbon::now()])
            ->get();

        $orcamentoUltimos30Dias = Cotacao::where('id_receptor', $usuarioId)
            ->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])
            ->get();


        $usuariosTime = User::where('current_team_id', $usuarioId)->count();

        $meuPLano = Plano::where('id', $assinatura -> id_plano)-> first();

        $solicitacoesFabricante = Cotacao::where('id_receptor', $usuarioId)->where('leitura_receptor', 'naolido')->get();

        $solicitacoesComprador = Cotacao::where('id_remetente', $usuarioId)->where('leitura_remetente', 'naolido')->get();

        $notificacoesNum = count($solicitacoesFabricante) + count($solicitacoesComprador);

        return view ('painel', compact(

            'produto',
            'produtos',
            'ultimasVisualizacoes',
            'cotacoes',
            'todasCotacoes',
            'cotacoesAbertas',
            'nomeCompleto',
            'classificacoes',
            'pontuacao',
            'nivel',
            'assinatura',
            'orcamentoUltimos30Dias',
            'orcamentoUltimos60Dias',
            'usuariosTime',
            'meuPLano',
            'notificacoesNum'
        ));
    }

    public function home(){

        $user = Auth::user();

        $estados =  Estado::all();

        $segmentos = Segmento::all();

        $produtos = Produto::where('ativo', 'Sim') -> inRandomOrder()->limit(5)->get();

        $depoimentos = 0;

        //dd(URL::previous());

        return view ('pages.gerais.home', compact('user', 'produtos', 'depoimentos', 'estados', 'segmentos'));
    }

    public function funcionalidades(){

        $user = Auth::user() ;

        return view ('pages.gerais.funcionalidades', compact('user'));
    }

    public function planos(){

        $planos = Plano::all();

        $meuPlano = Assinatura::where('customer_id', Auth::id())->where('status', 'ativo')->first();

        if ($meuPlano) {

            $dadosPlano = Plano::where('id', $meuPlano -> id_plano)->first();

        } else {

            $dadosPlano = null;

        }

        return view('pages.gerais.planos', compact('planos' , 'dadosPlano' , 'meuPlano'));
    }

    public function contato(){

        $user = Auth::user() ;

        return view ('pages.gerais.contato', compact('user'));
    }
    public function sitemap(){

        $produtos = Produto::all(); // Retrieve all produtos (adjust as needed)
        $sites = Site::all();
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>
            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($produtos as $produto) {
            $sitemap .= '
                <url>
                    <loc>' . 'https://nacionalfabricas.com.br/' . 'produto/' . $produto->id . '</loc>
                    <lastmod>' . $produto -> updated_at->tz('UTC')->toAtomString() . '</lastmod>
                </url>';
        }

        foreach ($sites as $site) {
            $sitemap .= '
                <url>
                    <loc>' . 'https://nacionalfabricas.com.br/' . 'industria/' . $site->id . '/' . $site -> slug . '</loc>
                    <lastmod>' . $site -> updated_at->tz('UTC')->toAtomString() . '</lastmod>
                </url>';
        }

        $sitemap .= '
            </urlset>';

        return Response::make($sitemap, 200, ['Content-Type' => 'text/xml']);
    }
    public function buscaGeral(){

        $user = Auth::user();

        if ($user != null){

            $assinatura = Assinatura::where('id_conta', $user -> id ) -> where('status', 'Ativo') -> first();

            if( $assinatura && $assinatura -> nome_plano == "Membro"){

                $usuarioId = $user -> current_team_id;

            }else{

                $usuarioId = $user -> id;
            }

        }else{

            $usuarioId = null;
        }

        $busca = request('busca');

        $estado = request('estado');

        $segmento = request('segmento');

        $cidade = request('cidade');

        $tipo = request('tipo');

        $cadastros = Cadastro::all();

        $sites = Site::all();

        if($tipo == 'Produtos'){

            if ($busca || $estado || $segmento || $cidade){

                $resultados = Produto::where(function ($query) use ($busca, $estado, $segmento, $cidade) {
                        $query->where(function ($queryResultados) use ($busca) {
                            $queryResultados->where('produto_nome', 'like', '%' . $busca . '%')
                                ->orWhere('id', 'like', '%' . $busca. '%')
                                ->orWhere('categorias', 'like', '%' . $busca. '%')
                                ->orWhere('sku', 'like', '%' . $busca. '%');
                        });

                        if ($estado != null) {
                            $query->where('estado', 'like', '%' . $estado . '%');
                        }

                        if ($segmento != null) {
                            $query->where('segmento', 'like', '%' . $segmento . '%');
                        }

                        if ($cidade != null) {
                            $query->where('cidade', 'like', '%' . $cidade . '%');
                        }
                    })
                    ->paginate(10);

                $resultados->appends(['busca' => $busca, 'estado' => $estado, 'tipo' => $tipo, 'segmento' => $segmento]);


                if(count($resultados) === 0){

                    $produtos = 0;

                }else{

                    foreach ($resultados as $produto) {

                        $meuId = $produto -> id_conta ;
                        $produtos = Produto::findOrFail($meuId)
                        ->where('destaque', 'Sim')
                        ->where('ativo', 'Sim')
                        ->latest('created_at')
                        ->take(4)
                        ->get();
                    }
                }

            }else{

                $resultados = Produto::paginate(10);

                if(count($resultados) === 0){

                    $produtos = 0;

                }else{

                    $produtos = Produto::where('destaque', 'Sim')
                    ->where('ativo', 'Sim')
                    ->latest('created_at')
                    ->take(4)
                    ->get();
                }

            }

        }else{

            $resultados = Site::join('cadastros', 'sites.id_conta', '=', 'cadastros.id_conta')
                ->where(function ($query) use ($busca, $estado, $segmento, $cidade) {
                    $query->where(function ($queryResultados) use ($busca) {
                        $queryResultados->where('nome_industria', 'like', '%' . $busca . '%')
                            ->orWhere('produtos_tipo', 'like', '%' . $busca . '%');
                    });

                    if ($estado != null) {
                        $query->where('cadastros.estado', 'like', '%' . $estado . '%');
                    }

                    if ($segmento != null) {
                        $query->where('segmento', 'like', '%' . $segmento . '%');
                    }

                    if ($cidade != null) {
                        $query->where('cadastros.cidade', 'like', '%' . $cidade . '%');
                    }
                })
                ->paginate(10);

            $resultados->appends(['busca' => $busca, 'estado' => $estado, 'tipo' => $tipo, 'segmento' => $segmento]);

            if(count($resultados) == 0){

                $produtos = 0;

            }else{

                $produtos = Produto::all()
                ->where('destaque', 'Sim')
                ->where('ativo', 'Sim');

            }
        }

        $estados =  Estado::all();
        $segmentos = Segmento::all();

        return view ('pages.gerais.busca-geral', compact(
            'cadastros',
            'usuarioId',
            'user',
            'tipo',
            'produtos',
            'estados',
            'estado',
            'cidade' ,
            'segmento' ,
            'segmentos' ,
            'sites' ,
            'resultados' ,
            'busca'   ));
    }

    public function ajuda(){

        $user = Auth::user() ;

        return view ('pages.gerais.ajuda', compact('user'));
    }
    public function politicaPrivacidade(){

        return view ('pages.politicaPrivacidade');
    }
    public function termosUso(){

        return view ('pages.gerais.termosUso');
    }
    public function enviarForm(Request $request){

        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'telefone' => 'required|string',
            'mensagem' => 'required|string',
        ]);

        Mail::to("nacionalfabricas@nacionalfabricas.com.br")
            ->send(new ContactFormSubmission($request->all()));

        return redirect()->route('contato')->with('sucesso','Mensagem enviada com sucesso, retornaremos o máis possível, Obrigado!!');

    }

}
