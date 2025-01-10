<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Assinatura;
use App\Models\Categoria;
use App\Models\Comentario;
use App\Models\Cotacao;
use App\Models\CotacaoProduto;
use App\Models\Cadastro;
use App\Models\Plano;
use App\Models\Produto;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutosController extends Controller
{
    public function criarProdutos(){

        $user = Auth::user() ;

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $assinatura = Assinatura::where('id_conta', $usuarioId )->first();

        $meuPlano = Plano::where('id', $assinatura -> id_plano) -> first ();

        $maxProdutos = $meuPlano -> max_produtos;

        $meusProdutos = Produto::where('id_conta', $usuarioId ) -> count();

        if ( $meusProdutos < $maxProdutos  ){

            $cadastro =  Cadastro::where('id_conta', $usuarioId)->first();

            $categoria =  Categoria::where('id_conta', $usuarioId)->get();

            $site =  Site::where('id_conta', $usuarioId)->first();

            $produto = Produto::where('id_conta',  $usuarioId)->get();

            if ($cadastro -> fabricante == null) {

                return redirect()->route('home')-> with('msg','Sua conta não permite acessar está página');

            }elseif( !$site){

                return redirect()->route('meu_site')-> with('msg','Crie sua página para criar um produto.');

            } elseif( !$categoria ){

                return redirect()->route('criar_categoria')-> with('msg','Crie uma categoria para criar um produto.');
            }

        }else{

            return redirect()->route('lista_produtos')-> with('erro','Você já atingiu o limite de produtos cadastrados para seu Plano');

        }

        return view ('pages.produtos.criar-produto', compact('user', 'produto','site'));
    }
    public function editarProduto($id){

        $user = Auth::user() ;

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $produto = Produto::where('id_conta', $usuarioId)->where('id', $id)->firstOrFail();

        $categorias =  Categoria::where('id_conta', $usuarioId) ->where('nivel', '!=', 'Categoria Pai') -> get();

        $album = Album::where('id_produto', $produto -> id)->get();

        return view ('pages.produtos.editar-produto', compact('user', 'produto', 'album', 'categorias' ));
    }

    public function produto($id){

        $user = Auth::user();

        $produto = Produto::findOrFail($id);

        $cotacoes = Cotacao::where('id_remetente', Auth::id())->where('status_remetente', 'finalizado')->get();

        if(count($cotacoes) > 0){

            foreach($cotacoes as $cotacao){

                $cotacaoProduto = CotacaoProduto::where('cotacao_id', $cotacao -> id)->count();

            }

        }else{

            $cotacaoProduto = 0;
        }

        $site = Site::where('id_conta', $produto -> id_conta) -> first();

        $endereco = Cadastro::where('id_conta', $produto -> id_conta)->first();

        $users = User::all();

        $comentarios = Comentario::where('id_produto', $id)-> get();

        $categorias = Categoria::where('id_conta', $produto -> id_conta)->where('nivel', 'Categoria Solo')->where('ativo', 'Ativo') -> get();

        $categoriasPai = Categoria::where('id_conta', $produto -> id_conta)->where('nivel', 'Categoria Pai')->where('ativo', 'Ativo') -> get();

        $categoriasFilho = Categoria::where('id_conta', $produto -> id_conta)->where('nivel', 'Sub Categoria')->where('ativo', 'Ativo') -> get();

        $album = Album::where('id_produto', $produto -> id) -> get();

        $produtosRelacionados = Produto::where('id_conta', $produto -> id_conta) -> get();

        return view ('pages.produtos.produto', compact(

            'user',
            'produto',
            'categorias',
            'album',
            'endereco',
            'categoriasPai',
            'categoriasFilho',
            'site',
            'comentarios',
            'users',
            'produtosRelacionados',
            'cotacaoProduto'

        ));
    }
    public function listarProdutos(){

        $user = Auth::user() ;

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $produtos =  Produto::where('id_conta', $usuarioId )->get();

        return view ('pages.produtos.listar-produtos', compact('user', 'produtos'));

    }

    public function create(Request $request) {

        try {

            $user = Auth::user() ;

            if($user -> current_team_id){

                $usuarioId = $user -> current_team_id;

            }else{

                $usuarioId = $user -> id;
            }

            $produto = new Produto();

            $produto->id_conta = $usuarioId;
            $produto->id_site = $usuarioId;

            $localizacao = Cadastro::where('id_conta', $usuarioId)->firstOrFail();
            $site = Site::where('id_conta', $usuarioId)->firstOrFail();

            $produto->categorias = $request->categorias;
            $produto->cidade = $localizacao->cidade ?? null;
            $produto->estado = $localizacao->estado ?? null;
            $produto->segmento = $site->segmento;
            $produto->ativo = $request->ativo;
            $produto->destaque = $request->destaque;

            if($request->preco_max && $request->preco_max > $request->preco_min ){

                $produto->preco_max = $request->preco_max;
                $produto->preco_min = $request->preco_min;
            }

            $produto->produto_nome = $request->produto_nome;
            $produto->descricao = $request->descricao;
            $produto->quantidade = $request->quantidade;
            $produto->slug = str_replace(" ", "-", $request->produto_nome);
            $produto->info_add = $request->info_add;
            $produto->largura = $request->largura ? $request->largura . " " . $request->unidade_largura : "Não se aplica.";
            $produto->altura = $request->altura ? $request->altura . " " . $request->unidade_altura : "Não se aplica.";
            $produto->peso = $request->peso ? $request->peso . " " . $request->unidade_peso : "Não se aplica.";
            $produto->profundidade = $request->profundidade ? $request->profundidade . " " . $request->unidade_profundidade : "Não se aplica.";
            $produto->ncm = $request->ncm ?? "Não se aplica.";
            $produto->gtin = $request->gtin ?? "Não se aplica.";
            $produto->sku = $request->sku ?? "Não se aplica.";
            $produto->ean = $request->ean ?? "Não se aplica.";

            $produto->save();

            return redirect()->route('lista_produtos')->with('sucesso', 'Produto cadastrado com sucesso');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('msg', 'Erro ao cadastrar o produto: ' . $e->getMessage());
        }
    }

    public function update(Request $request) {
        try {
            $data = $request->all();
            $produto = Produto::findOrFail($request->id);
            $produto->update($data);

            $albumProduto = $request->produto_album;
            $fotosAlbum = Album::where('id_produto', $request->id)->count();

            if ($albumProduto && $fotosAlbum < 6) {
                foreach ($request->file('produto_album') as $albumImage) {
                    if ($albumImage->isValid()) {
                        $extension = $albumImage->extension();
                        $imagemNome = md5($albumImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                        $albumImage->move(public_path('/images/album'), $imagemNome);

                        $site = Site::where('id_conta', Auth::id())->first();

                        $image = new Album();
                        $image->id_conta = Auth::id();
                        $image->site_id = $site->id;
                        $image->id_produto = $produto->id;
                        $image->url_imagem = $imagemNome;
                        $image->save();
                    }
                }
            }

            return redirect()->back()->with('sucesso', 'Produto atualizado com sucesso');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Erro ao atualizar o produto: ' . $e->getMessage());
        }
    }

    public function delete(Request $request)
    {

        try {
            $produto = Produto::findOrFail($request -> id);
            $produto->delete();

            return redirect()->route('produtos')->with('sucesso', 'Categoria deletada com sucesso');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao deletar categoria: ' . $e->getMessage());
        }
    }

    /** Funções para ações com os Produtos */
    public function contador($id){

        $produto = Produto::findOrFail( $id );

        $produto-> visualizacoes = $produto -> visualizacoes + 1;
        $produto -> save();

        return redirect()->route('produto', ['id' => $id]);
    }

    /** Funções para as imagens da Galeria */

    public function recortarImagemProduto(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'id_produto' => 'required|integer',
        ]);

        $produto = Produto::find($request->id_produto);

        if (!$produto) {
            return response()->json(['sucesso' => false, 'mensagem' => 'Produto não encontrado.']);
        }

        $caminho = $request->file('image')->store('images/thumbnails', 'public');
        $produto->produto_thumbnail = basename($caminho);
        $produto->save();

        return response()->json([
            'sucesso' => true,
            'nova_imagem' => asset('storage/' . $caminho),
        ]);
    }
    public function recortarImageGaleria(Request $request)
    {
        // Validação de entrada
        $request->validate([
            'image' => 'required|image|max:2048',  // Validação do arquivo de imagem (máximo 2MB)
            'id_imagem' => 'required|integer|exists:album,id',  // Verifica se o ID da imagem existe no banco
        ]);

        // Encontra a imagem no banco de dados
        $fotoAlbum = Album::find($request->id_imagem);

        if (!$fotoAlbum) {
            return response()->json(['sucesso' => false, 'mensagem' => 'Imagem não encontrada.'], 404);
        }

        // Armazenar a nova imagem
        $caminho = $request->file('image')->store('images/imagens-album', 'public');

        // Atualiza a URL da imagem no banco de dados
        $fotoAlbum->url_imagem = basename($caminho);
        $fotoAlbum->save();

        // Retorna a nova URL da imagem
        return response()->json([
            'sucesso' => true,
            'nova_imagem' => asset('storage/' . $caminho),
        ]);
    }
    public function deletarFotoGaleria(Request $request, $photoId, ){

        $user = Auth::user();

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;

        }

        Album::where('id', $photoId) -> first() ->delete();

        return redirect()->route('editar_produto', ['id' =>  $request -> produtoId])->with('sucesso','Foto excluida da galeria');
    }
}
