<?php

namespace App\Livewire;

use App\Models\Assinatura;
use App\Models\Chamado;
use Livewire\Component;
use Auth;

class Chamados extends Component
{
    public $busca;

    public function render()
    {
        $busca = $this -> busca;

        $user = Auth::user();

        $assinatura = Assinatura::where('id_conta', $user -> id) -> first ();

        if($assinatura -> nome_plano == "Membro"){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;

        }

        if ($busca) {

            $chamados = Chamado::where('id_conta', $usuarioId)->where(function ($query) use ($busca) {

                $query->Where('nome', 'like', '%' . $this -> busca . '%')
                    ->orWhere('descricao', 'like', '%' . $this -> busca . '%')
                    ->orWhere('status_chamado', 'like', '%' . $this -> busca . '%')
                    ->orWhere('motivoChamado', 'like', '%' . $this -> busca . '%')
                    ->orWhere('id', 'like', '%' . $this -> busca . '%');

            })
                ->orderBy('id')
                ->orderBy('created_at')
                ->paginate(10);

        }else{

            $chamados = Chamado::where('id_conta', $usuarioId) -> get();

        }

        return view('livewire.chamados', compact("chamados"));
    }
}
