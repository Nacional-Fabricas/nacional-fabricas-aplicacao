<?php

namespace App\Livewire;

use App\Models\Assinatura;
use Livewire\Component;
use Auth;
use App\Models\Cotacao;
use App\Models\Site;
use App\Models\User;



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

        return view('livewire.listar-solicitacoes', compact('cotacoes', 'usuarios'));
    }
}
