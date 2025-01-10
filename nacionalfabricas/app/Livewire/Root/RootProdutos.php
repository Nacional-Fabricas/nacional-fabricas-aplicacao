<?php

namespace App\Livewire\Root;

use App\Models\Assinatura;
use App\Models\Cadastro;
use App\Models\Produto;
use Livewire\Component;
use Auth;

class RootProdutos extends Component
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

            $produtos = Produto::where(function ($query) use ($busca) {

                $query->Where('produto_nome', 'like', '%' . $this -> busca . '%')
                    ->orWhere('id', 'like', '%' . $this -> busca . '%')
                    ->orWhere('categorias', 'like', '%' . $this -> busca . '%')
                    ->orWhere('sku', 'like', '%' . $this -> busca . '%');

            })
                ->orderBy('id')
                ->orderBy('created_at')
                ->paginate(10);

        }else{

            $produtos = Produto::paginate(10);

        }

        $empresas = Cadastro::all();

        return view('livewire.root.root-produtos', compact("produtos", "empresas"));
    }
}
