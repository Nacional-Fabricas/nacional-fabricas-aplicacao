<?php

namespace App\Livewire\Orcamentos;

use App\Models\Assinatura;
use App\Models\Cotacao;
use App\Models\User;
use Livewire\Component;
use Auth;

class ListarSolicitacoes extends Component
{
    public function render()
    {

        $user = Auth::user();

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;

        }

        $cotacoes = Cotacao::where(function ($query) use ($usuarioId) {
            $query->where('id_receptor', $usuarioId );
            //->orwhere('status', 'Nova Proposta');
        })->get();


        $usuarios = User::all();

        return view('livewire.orcamentos.listar-solicitacoes', compact('cotacoes', 'usuarios'));
    }
}
