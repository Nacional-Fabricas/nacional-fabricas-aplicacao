<?php

namespace App\Livewire\Categorias;

use App\Models\Assinatura;
use App\Models\Categoria;
use Livewire\Component;
use Auth;

class ListarCategorias extends Component
{

    public $buscar;
    public $filtroCategorias = '';

    public function render()
    {
        $buscar = $this->buscar;

        $filtroCategorias = $this->filtroCategorias;

        $user = Auth::user();

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        if ($buscar) {

            $categorias = Categoria::where('id_conta', $usuarioId)->where(function ($query) use ($buscar) {

                $query->Where('nome', 'like', '%' . $this->buscar . '%')
                    ->orWhere('descricao', 'like', '%' . $this->buscar . '%')
                    ->orWhere('id', 'like', '%' . $this->buscar . '%');

            })
                ->orderBy('nome')
                ->orderBy('created_at')
                ->paginate(10);

        } elseif ($filtroCategorias){

            if ($filtroCategorias === 'Ativo') {

                $categorias = Categoria::where('id_conta', $usuarioId)->where(function ($query) use ($buscar) {

                    $query->Where('ativo','Ativo');

                })
                    ->orderBy('nome')
                    ->orderBy('created_at')
                    ->paginate(10);

            } else {

                $categorias = Categoria::where('id_conta', $usuarioId)->where(function ($query) use ($buscar) {

                    $query->Where('ativo',  'Inativo');

                })
                    ->orderBy('nome')
                    ->orderBy('created_at')
                    ->paginate(10);
            }

        }  else {

            $categorias = Categoria::where('id_conta', $usuarioId)->paginate(10);

        }


        return view('livewire.categorias.listar-categorias', ['categorias' => $categorias]);
    }
}
