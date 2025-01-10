<?php

namespace App\Livewire\Root;

use App\Models\Assinatura;
use App\Models\Cotacao;
use App\Models\Cadastro;
use App\Models\User;
use Livewire\Component;
use Auth;

class RootCotacoes extends Component
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

            $cotacoes = Cotacao::where(function ($query) use ($busca) {

                $query->Where('id', 'like', '%' . $this -> busca . '%')
                    ->orWhere('valor', 'like', '%' . $this -> busca . '%')
                    ->orWhere('leitura_remetente', 'like', '%' . $this -> busca . '%')
                    ->orWhere('leitura_receptor', 'like', '%' . $this -> busca . '%')
                    ->orWhere('status_receptor', 'like', '%' . $this -> busca . '%')
                    ->orWhere('status_receptor', 'like', '%' . $this -> busca . '%')
                    ->orWhere('created_at', 'like', '%' . $this -> busca . '%')
                    ->orWhere('updated_at', 'like', '%' . $this -> busca . '%');

            })
                ->orderBy('id')
                ->orderBy('created_at')
                ->paginate(10);

        }else{

            $cotacoes = Cotacao::paginate(10);

        }

        $usuarios = User::all();

        $empresas = Cadastro::all();

        return view('livewire.root.root-cotacoes', compact("cotacoes", "usuarios", "empresas"));
    }
}
