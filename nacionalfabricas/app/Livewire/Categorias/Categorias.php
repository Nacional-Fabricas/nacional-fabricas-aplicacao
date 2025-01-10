<?php

namespace App\Livewire\Categorias;

use App\Models\Assinatura;
use App\Models\Categoria;
use App\Models\Produto;
use Livewire\Component;
use Auth;
use Request;

class Categorias extends Component
{

    public $search;

    public function render()
    {

        $user = Auth::user();

        $search = $this->search;

        $url = Request::path();

        $verificaUrl = explode("/", $url);

        if ($verificaUrl[0] == "editar-produto"){

            $produto = Produto::where('id', $verificaUrl[1]) -> first();

        }else{

            $produto = null;
        }

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;

        }

        if ($search) {

            $categorias = Categoria::where('id_conta', $usuarioId)
                ->where('categoria_pai', '!=', 'Categoria Pai')
                ->where(function ($query) use ($search) {
                    $query->where('nome', 'like', '%' . $search . '%')
                        ->orWhere('id', 'like', '%' . $search . '%')
                        ->orWhere('descricao', 'like', '%' . $search . '%');
                })
                ->orderBy('nome')
                ->get();

        } else {

            $categorias = Categoria::where('id_conta', $usuarioId)
                ->where('nivel', '!=', 'Categoria Pai')
                ->get();
        }

        return view('livewire.categorias.categorias', ['categorias' => $categorias, 'produto' => $produto]);
    }
}
