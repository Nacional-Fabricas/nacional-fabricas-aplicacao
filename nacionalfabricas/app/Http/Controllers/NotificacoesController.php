<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use App\Models\Cotacao;
use App\Models\Cadastro;
use Illuminate\Http\Request;
use Auth;

class NotificacoesController extends Controller
{

    public function notificacoes(){

        $user = Auth::user();

        $assinatura = Assinatura::where('id_conta', $user -> id ) -> where('status', 'Ativo') -> first();

        if($assinatura -> nome_plano == "Membro"){

            $userID = $user -> current_team_id;

        }else{

            $userID = $user -> id;

        }

        $solicitacoesFabricante = Cotacao::where('id_receptor', $userID)->where('leitura_receptor', 'naolido')->get();

        $solicitacoesComprador = Cotacao::where('id_remetente', $userID)->where('leitura_remetente', 'naolido')->get();

        $notificacoesNum = count($solicitacoesFabricante) + count($solicitacoesComprador);

        $empresas = Cadastro::all();

        return view('pages.notificacoes.notificacoes', compact('notificacoesNum', 'solicitacoesComprador', 'solicitacoesFabricante', 'empresas'));
    }

}
