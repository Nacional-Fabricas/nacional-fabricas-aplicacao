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

        $categorias = Categoria::where('id_conta', $site -> id_conta)->where('nivel', 'Categoria Solo')->where('ativo', 'Ativo')->get();

        $endereco = Cadastro::where('id_conta', $site -> id_conta)->first();

        if ($busca){

            $produtos = Produto::where('id_conta', $site -> id_conta) -> where(function ($query) use($busca) {
                $query->where('produto_nome', 'like', '%' . $busca . '%')
                    ->orWhere('categorias', 'like', '%' . $busca. '%');
            })->paginate(16);

        }else{

            $produtos = Produto::where('id_conta', $site -> id_conta)->paginate(16);

        }

        $dataHoje = strftime('%A');

        $diasSemana = [
            'Sunday' => 'Domingo',
            'Monday' => 'Segunda-feira',
            'Tuesday' => 'Terça-feira',
            'Wednesday' => 'Quarta-feira',
            'Thursday' => 'Quinta-feira',
            'Friday' => 'Sexta-feira',
            'Saturday' => 'Sábado'
        ];

        $horaAtual = date('H:i');

        // Traduz o nome do dia da semana para português
        $dataHoje = $diasSemana[$dataHoje];

        $atendimento = json_decode($site -> atendimento, true);

        $estados =  Estado::all();

        return view ('pages.site.busca-site', compact(
            'user',
            'site',
            'produtos',
            'busca',
            'atendimento',
            'categorias',
            'endereco'
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
    public function site( $id ){

        $user = Auth::user();

        $estados =  Estado::all();

        $produtos = Produto::where('destaque', 'Sim')->where('status', 'Ativo')->take(5)->get();

        $site = Site::where('id' , $id)->first();

        $categorias = Categoria::where('id_conta', $site -> id_conta)->where('ativo', 'Ativo') -> get();

        $dataHoje = strftime('%A');

        $diasSemana = [
            'Sunday' => 'Domingo',
            'Monday' => 'Segunda-feira',
            'Tuesday' => 'Terça-feira',
            'Wednesday' => 'Quarta-feira',
            'Thursday' => 'Quinta-feira',
            'Friday' => 'Sexta-feira',
            'Saturday' => 'Sábado'
        ];

        $horaAtual = date('H:i');

        // Traduz o nome do dia da semana para português
        $dataHoje = $diasSemana[$dataHoje];

        $atendimento = json_decode($site -> atendimento, true);

        $endereco = Cadastro::where('id_conta', $site -> id_conta )->first();

        return view ('pages.site.site',
            compact('user',
                'horaAtual',
                'estados',
                'dataHoje',
                'atendimento',
                'categorias',
                'endereco',
                'produtos',
                'site')
        );
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
    public function update(Request $request)
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

            Site::findOrFail($request -> id)->update($data);

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

        try{

            $image = $request->file('image');
            $field = $request->input('field');
            $id = $request->input('id');

            $request->validate([
                'image' => 'required|image',
                'id_site' => 'required|integer',
            ]);

            $site = Site::find($request->id_site);

            if (!$site) {
                return response()->json(['sucesso' => false, 'mensagem' => 'Site não encontrado.']);
            }

            $caminho = $request->file('image')->store('images/sites/banners', 'public');
            $site->banner = basename($caminho);
            $site->save();

            return response()->json([
                'sucesso' => true,
                'nova_imagem' => asset('storage/' . $caminho),
            ]);

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Erro ao atualizar banner: ' . $e->getMessage()]);
        }
    }
    public function recortarLogo(Request $request)
    {

        try {

            $image = $request->file('image');
            $field = $request->input('field');
            $id = $request->input('id');

            $request->validate([
                'image' => 'required|image',
                'id_site' => 'required|integer',
            ]);

            $site = Site::find($request->id_site);

            if (!$site) {
                return response()->json(['sucesso' => false, 'mensagem' => 'Site não encontrado.']);
            }

            $caminho = $request->file('image')->store('images/sites/logos', 'public');
            $site->logo = basename($caminho);
            $site->save();

            return response()->json([
                'sucesso' => true,
                'nova_imagem' => asset('storage/' . $caminho),
            ]);

        } catch (\Exception $e) {
            // Em caso de erro, retornar a mensagem de erro
            return redirect()->route('meu_site')->withInput()->with('erro', 'Erro ao atualizar logo: ' . $e->getMessage());
        }
    }
    public function recortarDestaque(Request $request)
    {
        try {
            // Validação dos campos
            $request->validate([
                'image' => 'required|image',
                'id_site' => 'required|integer',
                'field' => 'required|in:primeiro_destaque,segundo_destaque,terceiro_destaque',
            ]);

            // Buscar o site no banco
            $site = Site::find($request->id_site);

            if (!$site) {
                return response()->json(['sucesso' => false, 'mensagem' => 'Site não encontrado.']);
            }

            // Salvar a imagem no armazenamento público
            $caminho = $request->file('image')->store('images/sites/destaques', 'public');

            // Atualizar apenas o campo correspondente
            $campo = $request->field; // Primeiro, segundo ou terceiro destaque
            $site->$campo = basename($caminho);
            $site->save();

            return response()->json([
                'sucesso' => true,
                'nova_imagem' => asset('storage/' . $caminho),
            ]);

        } catch (\Exception $e) {
            return response()->json(['sucesso' => false, 'mensagem' => 'Erro ao salvar a imagem: ' . $e->getMessage()]);
        }
    }
    public function dicas(){

        return view ('pages.site.dicas');
    }
}
