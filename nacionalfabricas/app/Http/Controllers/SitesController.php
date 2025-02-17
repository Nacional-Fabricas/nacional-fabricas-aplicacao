<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use App\Models\Categoria;
use App\Models\Estado;
use App\Models\Cadastro;
use App\Models\Produto;
use App\Models\Rating;
use App\Models\Segmento;
use App\Models\Site;
use Intervention\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SitesController extends Controller
{
    public function buscaSite($id){

        $user = Auth::user() ;

        $busca = request('busca');

        $site = Site::where('id_conta', $id)->first();

        $categorias = Categoria::where('id_conta', $id)->where('nivel', 'Categoria Solo')->where('ativo', 'Ativo')->get();

        $categoriasPai = Categoria::where('id_conta', $id)->where('nivel', 'Categoria Pai')->where('ativo', 'Ativo') -> get();

        $categoriasFilho = Categoria::where('id_conta', $id)->where('nivel', 'Sub Categoria')->where('ativo', 'Ativo') -> get();

        if ($busca){

            $produtos = Produto::where('id_conta', $site -> id_conta) -> where(function ($query) use($busca) {
                $query->where('produto_nome', 'like', '%' . $busca . '%')
                    ->orWhere('categorias', 'like', '%' . $busca. '%');
            })->paginate(16);

        }else{

            $produtos = Produto::where('id_conta', $site -> id_conta)->paginate(16);

        }

        $estados =  Estado::all();

        return view ('pages.site.busca-site', compact(
            'user',
            'site',
            'produtos',
            'busca',
            'categorias',
            'categoriasPai',
            'categoriasFilho'

        ));
    }
    public function meuSite(){

        $user = Auth::user();

        $estados =  Estado::all();

        $segmentos = Segmento::all();

        $assinatura = Assinatura::where('id_conta', $user -> id) -> first ();

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $cadastro = Cadastro::where('id_conta', $usuarioId)->first();

        $site = Site::where('id_conta', $usuarioId) -> first();


        if ($cadastro -> fabricante == null) {

            return redirect()->route('home')->with('msg', 'Você não tem acesso a  esta página');
        }

        return view ('pages.site.meu-site', compact( 'user', 'estados', 'site', 'cadastro', 'site', 'segmentos'));
    }
    public function site( $id){

        $user = Auth::user();

        $estados =  Estado::all();

        $produtos = Produto::all()->where('id_conta', $id)->where('destaque', 'Sim')->where('ativo', 'Sim');

        $categorias = Categoria::where('id_conta', $id)->where('nivel', 'Categoria Solo')->where('ativo', 'Ativo') -> get();

        $categoriasPai = Categoria::where('id_conta', $id)->where('nivel', 'Categoria Pai')->where('ativo', 'Ativo') -> get();

        $categoriasFilho = Categoria::where('id_conta', $id)->where('nivel', 'Sub Categoria')->where('ativo', 'Ativo') -> get();

        $site = Site::where('id_conta' , $id)->first();

        $endereco = Cadastro::where('id_conta', $id )->first();

        $produtosNotas = Produto::where('id_conta', $id )->get();



        return view ('pages.site.site',
            compact('user', 'estados', 'categorias', 'endereco', 'produtos', 'site', 'categoriasPai', 'categoriasFilho') );
    }
    public function create(Request $request)
    {
        try {
            $user = Auth::user();

            $site = new Site();

            if ($site->nome_plano == "Membro") {
                $site->id_conta = $user->current_team_id;
            } else {
                $site->id_conta = $user->id;
            }

            $site->nome_industria = $request->nome_industria;
            $site->descricao_industria = $request->descricao_industria;
            $site->segmento = $request->segmento;
            $site->produtos_tipo = $request->produtos_tipo;
            $site->tributacao = $request->tributacao;
            $site->tempo_resposta = $request->tempo_resposta;
            $site->atendimento = json_encode($request->atendimento); // Serialize the array
            $site->email = $request->email;
            $site->telefone = $request->telefone;
            $site->local_atuacao = $request->local_atuacao;
            $site->slug = str_replace(" ", "-", $request->nome_industria);

            $request->validate([
                'banner' => ['sometimes', 'image', 'max:4096'],
                'logo' => ['sometimes', 'image', 'max:4096'],
                'primeiro_destaque' => ['sometimes', 'image', 'max:4096'],
                'segundo_destaque' => ['sometimes', 'image', 'max:4096'],
                'terceiro_destaque' => ['sometimes', 'image', 'max:4096'],
            ]);

            $site->save();

            return redirect()->route('meu_site')->with('sucesso', 'Site criado com sucesso');

        } catch (\Exception $e) {
            return redirect()->route('meu_site')->withInput()->with('erro', 'Erro ao criar site: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();

            // Manipulação de arquivos
            $inputs = ['primeiro_destaque', 'segundo_destaque', 'terceiro_destaque', 'logo', 'banner'];
            foreach ($inputs as $input) {
                if ($request->hasFile($input) && $request->file($input)->isValid()) {
                    $requestImage = $request->$input;
                    $extension = $requestImage->extension();
                    $imagemNome = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                    $request->$input->move(public_path("/images/sites/" . ($input === 'logo' ? "logos/" : "imagens-destaque/")), $imagemNome);
                    $data[$input] = $imagemNome;
                }
            }

            Site::findOrFail($id)->update($data);
            return redirect()->route('meu_site')->with('sucesso', 'Site atualizado com sucesso');
        } catch (\Exception $e) {
            return redirect()->route('meu_site')->withInput()->with('erro', 'Erro ao atualizar site: ' . $e->getMessage());
        }
    }
    public function delete($id)
    {
        try {
            $site = Site::findOrFail($id);

            // Exclui arquivos associados ao site
            $inputs = ['banner', 'logo', 'primeiro_destaque', 'segundo_destaque', 'terceiro_destaque'];
            foreach ($inputs as $input) {
                if ($site->$input && $site->$input !== "sem-imagem") {
                    $path = public_path("/images/sites/" . ($input === 'logo' ? "logos/" : "imagens-destaque/") . $site->$input);
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
            }

            $site->delete();
            return redirect()->route('meu_site')->with('sucesso', 'Site excluído com sucesso');
        } catch (\Exception $e) {
            return redirect()->route('meu_site')->with('erro', 'Erro ao excluir site: ' . $e->getMessage());
        }
    }
    public function recortarBanner(Request $request)
    {
        try {
            $image = $request->file('image');
            $field = $request->input('field');
            $id = $request->input('id');

            // Process the image
            $img = Image::make($image->getRealPath());
            $img->resize(800, 600); // Example resize

            // Save the cropped image
            $path = 'images/sites/backgrounds/' . $field . '_' . $id . '.jpg';
            $img->save(public_path($path));

            return response()->json(['success' => true, 'message' => 'Banner atualizado com sucesso!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Erro ao atualizar banner: ' . $e->getMessage()]);
        }
    }
    public function recortarLogo(Request $request)
    {
        try {
            // Alterei o nome do campo para 'image'
            $request->validate([
                'image' => 'required', // Aqui, 'image' é o campo correto
                'id' => 'required|exists:sites,id',
            ]);

            // Definir o diretório para salvar a imagem
            $pasta = public_path('images/sites/logos/');

            // Obter a imagem em base64
            $imagemBase64 = $request->input('image');
            $partesImagem = explode(";base64,", $imagemBase64);

            // Decodificar a imagem base64
            $imagemBase = base64_decode($partesImagem[1]);
            $imagemNome = uniqid() . '.png'; // Nome único para a imagem

            // Salvar a imagem no diretório
            file_put_contents($pasta . $imagemNome, $imagemBase);

            // Atualizar o modelo Site
            $site = Site::find($request->id);
            $site->logo = $imagemNome; // Atualizando o campo logo
            $site->save();

            // Retornar sucesso
            return redirect()->route('meu_site')->with('sucesso', 'Logo atualizada com sucesso!');
        } catch (\Exception $e) {
            // Em caso de erro, retornar a mensagem de erro
            return redirect()->route('meu_site')->withInput()->with('erro', 'Erro ao atualizar logo: ' . $e->getMessage());
        }
    }
    public function recortarDestaque(Request $request)
    {
        $pasta = public_path('images/sites/imagens-destaque/');

        // Verificar qual campo foi enviado
        $campo = $request->input('field');  // Espera-se que seja 'primeiro_destaque', 'segundo_destaque', ou 'terceiro_destaque'

        if (in_array($campo, ['primeiro_destaque', 'segundo_destaque', 'terceiro_destaque'])) {
            $partesImagem = explode(";base64,", $request->input('image'));
        } else {
            return redirect()->route('meu_site')->with('erro', 'Nenhuma Imagem foi selecionada.');
        }

        $imagemTipoAux = explode("image/", $partesImagem[0]);
        $imagemTipo = $imagemTipoAux[1];
        $imagemBase = base64_decode($partesImagem[1]);

        $imagemNome = uniqid() . '.png';
        $imagemCaminhoCompleto = $pasta . $imagemNome;

        file_put_contents($imagemCaminhoCompleto, $imagemBase);

        $site = Site::find($request->id);

        // Atualiza o campo específico
        $site->$campo = $imagemNome;
        $site->save();

        return redirect()->route('meu_site')->with('sucesso', 'Cadastro finalizado com sucesso');
    }
    public function dicas(){

        return view ('pages.site.dicas');
    }
}
