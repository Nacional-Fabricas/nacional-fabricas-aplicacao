<?php

namespace App\Livewire\Produtos;

use App\Models\Assinatura;
use App\Models\Plano;
use App\Models\Produto;
use Livewire\Component;
use Auth;
use Exception;


class ListarProdutos extends Component
{

    public $buscar;
    public $status;
    public $page = 1;

    protected $queryString = [
        'buscar' => ['except' => ''],
        'page' => ['except' => 1],
    ];


    public function updatingBuscar()
    {
        $this->page = 1;
    }

    public function render()
    {

        $buscar = $this->buscar;
        $status = $this->status;

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

        try{

            $produtos = Produto::where('id_conta', $usuarioId )->where(function ($query) use ($buscar) {
                $query->Where('produto_nome', 'like', '%' . $this->buscar . '%')
                    ->orWhere('quantidade', 'like', '%' . $this->buscar . '%')
                    ->orWhere('sku', 'like', '%' . $this->buscar . '%');

            });

            if ($status) {
                $produtos = $produtos->where('status', $status);
            }

            $produtos = $produtos ->orderBy('produto_nome')
                ->orderBy('created_at')
                ->orderBy('quantidade')
                ->paginate(10);

            return view('livewire.produtos.listar-produtos',
                compact(
                    'produtos' ,
                    'totalProdutos' ,
                    'maxProdutos')
            );

        }catch (Exception $e){

            return view('livewire.busca.busca-geral', [
                'erro' => 'Ocorreu um erro ao realizar a busca. Por favor, tente novamente.',
            ]);
        }

    }
}
