<?php

namespace App\Livewire\Root;

use App\Models\Assinatura;
use App\Models\Cadastro;
use App\Models\Site;
use Livewire\Component;
use Auth;

class RootFabricas extends Component
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

            $fabricas = Cadastro::where(function ($query) use ($busca) {

                $query->Where('nome_empresa', 'like', '%' . $this -> busca . '%')
                    ->orWhere('id', 'like', '%' . $this -> busca . '%')
                    ->orWhere('estado', 'like', '%' . $this -> busca . '%')
                    ->orWhere('cep', 'like', '%' . $this -> busca . '%')
                    ->orWhere('cidade', 'like', '%' . $this -> busca . '%');

            })
                ->orderBy('id')
                ->orderBy('created_at')
                ->paginate(10);

        }else{

            $fabricas = Cadastro::paginate(10);

        }

        $sites = Site::all();

        return view('livewire.root.root-fabricas', compact("fabricas", "sites"));
    }
}
