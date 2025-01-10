<?php

namespace App\Livewire\Root;

use App\Models\Assinatura;
use App\Models\User;
use Livewire\Component;
use Auth;

class RootUsuarios extends Component
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

            $usuarios = User::where(function ($query) use ($busca) {

                $query->Where('name', 'like', '%' . $this -> busca . '%')
                    ->orWhere('id', 'like', '%' . $this -> busca . '%')
                    ->orWhere('created_at', 'like', '%' . $this -> busca . '%')
                    ->orWhere('role', 'like', '%' . $this -> busca . '%');

            })
                ->orderBy('id')
                ->orderBy('created_at')
                ->paginate(10);

        }else{

            $usuarios = User::paginate(10);

        }

        return view('livewire.root.root-usuarios', compact("usuarios"));
    }
}
