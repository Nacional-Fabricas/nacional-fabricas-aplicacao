<?php

namespace App\Livewire\Produtos;

use App\Models\Assinatura;
use App\Models\Plano;
use App\Models\Produto;
use Livewire\Component;
use Auth;

class ListarProdutos extends Component
{

    public $busca ;

    public function render()
    {

        $busca = $this->busca;

        $user = Auth::user();

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $assinatura = Assinatura::where('id_conta', $usuarioId )->first();

        $dadosPlano = $assinatura ? Plano::where('id', $assinatura -> id_plano)->first() : null;

        $totalProdutos = Produto::where('id_conta', $usuarioId)->count();

        $maxProdutos = $dadosPlano ? $dadosPlano -> max_produtos : 10;

        if ($busca) {

            $produtos = Produto::where('id_conta', $usuarioId )->where(function ($query) use ($busca) {
                $query->Where('produto_nome', 'like', '%' . $this->busca . '%')
                    ->orWhere('quantidade', 'like', '%' . $this->busca . '%')
                    ->orWhere('sku', 'like', '%' . $this->busca . '%');

            })
                ->orderBy('produto_nome')
                ->orderBy('created_at')
                ->orderBy('quantidade')
                ->paginate(10);

        } else {

            $produtos = Produto::where('id_conta', $usuarioId )->paginate(10);
        }

        return view('livewire.produtos.listar-produtos', compact('produtos' , 'totalProdutos' , 'maxProdutos'));
    }
}
