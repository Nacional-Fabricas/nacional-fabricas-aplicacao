<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Cadastro;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriasController extends Controller
{
    public function criarCategoria(){

        $user = Auth::user() ;

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $categorias =  Categoria::all()
            ->where('id_conta', $usuarioId)
            ->where('nivel', 'Categoria Pai');

        $cadastro =  Cadastro::where('id_conta', $usuarioId)->first();

        $site = Site::where('id_conta', $usuarioId) -> first();

        if( !$site){

            return redirect()->route('meu_site')-> with('msg','Crie sua página para criar uma categoria.');
        }

        return view ('pages.categorias.criar-categoria', compact('user', 'categorias', 'site'));
    }

    public function categoria($id){

        $user = Auth::user() ;

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $categoriasPai =  Categoria::all()->where('id_conta', $usuarioId)->where('nivel', 'Categoria Pai');

        $categoria = Categoria::where(['id_conta' => $usuarioId, 'id' => $id])->firstOrFail();

        return view('pages.categorias.categoria', compact('categoria' , 'categoriasPai'));

    }

    public function categorias(){

        $user = Auth::user() ;

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $categorias =  Categoria::where('id_conta', $usuarioId)->get();

        return view ('pages.categorias.categorias', compact('user', 'categorias'));

    }

    public function create(Request $request)
    {

        try {

            $user = Auth::user() ;

            if($user -> current_team_id){

                $usuarioId = $user -> current_team_id;

            }else{

                $usuarioId = $user -> id;
            }

            $categoria = new Categoria();

            $categoria->id_conta = $usuarioId;
            $categoria -> id_site = $request -> id_site;
            $categoria->nome = $request->nome;
            $categoria->slug = str_replace(" ", "-", $request->nome);
            $categoria->nivel = "Categoria Solo";
            $categoria->ativo = $request->ativo;
            $categoria->descricao = $request->descricao;

            $categoria->save();

            return redirect()->route('categorias')->with('sucesso', 'Categoria cadastrada com sucesso');

        } catch (\Exception $e) {

            return redirect()->route('criar_categoria')->withInput()->with('erro', 'Erro ao cadastrar categoria: ' . $e->getMessage());

        }
    }

    public function update(Request $request)
    {

        try {

            $categoria = Categoria::findOrFail($request->id);
            $categoria->update($request->all());

            return redirect()->route('categorias')->with('sucesso', 'Categoria atualizada com sucesso');
        } catch (\Exception $e) {
            return redirect()->route('categorias')->withInput()->with('erro', 'Erro ao atualizar categoria: ' . $e->getMessage());
        }
    }

    public function delete(Request $request)
    {
        try {
            $categoria = Categoria::findOrFail($request -> id);
            $categoria->delete();

            return redirect()->route('categorias')->with('sucesso', 'Categoria deletada com sucesso');
        } catch (\Exception $e) {
            return redirect()->route('categorias')->with('erro', 'Erro ao deletar categoria: ' . $e->getMessage());
        }
    }

}
