<?php

namespace App\Livewire;

use App\Models\Assinatura;
use App\Models\Produto;
use Livewire\Component;
use Auth;

class Visualizacoes extends Component
{

    public $busca;
    public $filtroBusca = '';

    public function render()
    {

        $busca = $this->busca;

        $filtroBusca = $this->filtroBusca;

        $user = Auth::user() ;

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;

        }

        if ($busca) {

            $produtos = produto::where('id_conta', $usuarioId)->where(function ($query) use ($busca) {

                $query->Where('produto_nome', 'like', '%' . $this->busca . '%')
                    ->orWhere('sku', 'like', '%' . $this->busca . '%')
                    ->orWhere('visualizacoes', 'like', '%' . $this->busca . '%')
                    ->orWhere('visualizacoes', 'like', '%' . $this->busca . '%')
                    ->orWhere('id', 'like', '%' . $this->busca . '%');

            })
            ->orderBy('visualizacoes')
            ->orderBy('produto_nome')
            ->orderBy('created_at')
            ->paginate(10);

        } elseif ($filtroBusca){

            if ($filtroBusca == 'Ativo') {

                $produtos = produto::where('id_conta', $usuarioId)->where(function ($query) use ($busca) {

                    $query->Where('ativo','Sim');

                })
                    ->orderBy('produto_nome')
                    ->orderBy('created_at')
                    ->paginate(10);

            } else {

                $produtos = produto::where('id_conta', $usuarioId)->where(function ($query) use ($busca) {

                    $query->Where('ativo',  'Não');

                })
                    ->orderBy('produto_nome')
                    ->orderBy('created_at')
                    ->paginate(10);
            }

        }  else {

            $produtos = produto::where('id_conta', $usuarioId)->paginate(10);

        }

        return view('livewire.visualizacoes',['produtos' => $produtos]);
    }
}
