<?php

namespace App\Livewire\Root;

use App\Models\Assinatura;
use App\Models\Chamado;
use Livewire\Component;
use Auth;

class RootSuporte extends Component
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

            $userId = $user -> id;

        }

        if ($busca) {

            $chamados = Chamado::where(function ($query) use ($busca) {

                $query->Where('nome', 'like', '%' . $this -> busca . '%')
                    ->orWhere('id', 'like', '%' . $this -> busca . '%')
                    ->orWhere('email', 'like', '%' . $this -> busca . '%')
                    ->orWhere('status_chamado', 'like', '%' . $this -> busca . '%')
                    ->orWhere('motivoChamado', 'like', '%' . $this -> busca . '%');

            })
                ->orderBy('id')
                ->orderBy('created_at')
                ->paginate(10);

        }else{

            $chamados = Chamado::paginate(10);

        }

        return view('livewire.root.root-suporte', compact("chamados"));
    }
}
