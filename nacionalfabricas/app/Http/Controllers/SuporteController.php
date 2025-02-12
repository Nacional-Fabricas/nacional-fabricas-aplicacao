<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use App\Models\Chamado;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

class SuporteController extends Controller
{

    public function suporte(){

        $user = Auth::user();

        $assinatura = Assinatura::where('id_conta', $user -> id ) -> where('status', 'Ativo') -> first();

        if($assinatura -> nome_plano == "Membro"){

            $userId = $user -> current_team_id;

        }else{

            $userId = $user -> id;

        }

        $chamados = Chamado::where('id_conta', $userId) -> get();

        return view('pages.suporte.suporte', compact("user", "chamados" ));
    }

    public function chamado($id)
    {

        $chamado = Chamado::where('id', $id) -> first();

        return view('pages.suporte.chamado', compact('chamado') );
    }

    public function create(Request $request)
    {
        try {

            $regras = [
                'nome' => 'required|string',
                'email' => 'required|email',
                'motivoChamado' => 'required|string',
                'descricao' => 'required|string',
            ];

            $menssagens = [
                'required' => 'O campo :attribute é obrigatório.',
                'email' => 'O :attribute precisa ser um endereço de e-mail válido.',
                'string' => 'O :attribute deve ser uma string.',
            ];

            $validacao = Validator::make($request->all(), $regras, $menssagens);

            if ($validacao->fails()) {
                return redirect()->back()->withErrors($validacao)->withInput();
            }

            $user = \Illuminate\Support\Facades\Auth::user();
            $assinatura = Assinatura::where('id_conta', $user->id)->first();

            $userId = ($assinatura->nome_plano == "Membro") ? $user->current_team_id : $user->id;

            $chamado = new Chamado();
            $chamado->id_conta = $userId;
            $chamado->nome = $request->nome;
            $chamado->email = $request->email;
            $chamado->status_chamado = "Aberto";
            $chamado->motivoChamado = $request->motivoChamado;
            $chamado->descricao = $request->descricao;
            $chamado->save();

            return redirect()->route('suporte')->with('sucesso', 'Chamado registrado com sucesso');

        } catch (\Exception $e) {
            return redirect()->back()->with('erro', 'Erro ao registrar chamado: ' . $e->getMessage())->withInput();
        }
    }

    public function update(Request $request)
    {
        try {

            $regras = [
                'nome' => 'required|string',
                'email' => 'required|email',
                'motivoChamado' => 'required|string',
                'descricao' => 'required|string',
            ];

            $menssagens = [
                'required' => 'O campo :attribute é obrigatório.',
                'email' => 'O :attribute precisa ser um endereço de e-mail válido.',
                'string' => 'O :attribute deve ser uma string.',
            ];

            $validacao = Validator::make($request->all(), $regras, $menssagens);

            if ($validacao->fails()) {
                return redirect()->back()->withErrors($validacao)->withInput();
            }

            $chamado = Chamado::findOrFail($request -> id);
            $chamado->nome = $request->nome;
            $chamado->email = $request->email;
            $chamado->motivoChamado = $request->motivoChamado;
            $chamado->descricao = $request->descricao;
            $chamado->save();

            return redirect()->route('chamados')->with('sucesso', 'Chamado atualizado com sucesso');

        } catch (\Exception $e) {
            return redirect()->back()->with('erro', 'Erro ao atualizar chamado: ' . $e->getMessage())->withInput();
        }
    }
}
