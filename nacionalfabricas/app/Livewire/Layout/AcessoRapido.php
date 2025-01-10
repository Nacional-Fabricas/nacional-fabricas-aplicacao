<?php

namespace App\Livewire\Layout;

use App\Models\Assinatura;
use App\Models\Cotacao;
use App\Models\Customer;
use Auth;
use Livewire\Component;

class AcessoRapido extends Component
{
    public function render()
    {
        $user = Auth::user();

        $notificacoes = 0;

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;

        }

        $solicitacoesFabricante = Cotacao::where('id_receptor', $usuarioId)->where('leitura_receptor', 'naolido')->count() ?? null;

        $solicitacoesComprador = Cotacao::where('id_remetente', $usuarioId)->where('leitura_remetente', 'naolido')->count();

        $notificacoes = $solicitacoesFabricante + $solicitacoesComprador;

        return view('livewire.layout.acesso-rapido', compact('notificacoes'));
    }
}
