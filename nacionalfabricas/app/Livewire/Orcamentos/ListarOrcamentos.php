<?php

namespace App\Livewire\Orcamentos;

use App\Models\Assinatura;
use App\Models\Cotacao;
use App\Models\Site;
use Livewire\Component;
use Auth;

class ListarOrcamentos extends Component
{
    public $search;

    public function render()
    {

        $search = $this -> search;

        $user = Auth::user();

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;

        }

        if ($search) {

            $cotacoes = Cotacao::where('id_remetente', $usuarioId)->where(function ($query) use ($search) {

                $query->Where('status_remetente', 'like', '%' . $this -> search . '%')
                    ->orWhere('tipo_frete', 'like', '%' . $this -> search . '%')
                    ->orWhere('subtotal', 'like', '%' . $this -> search . '%')
                    ->orWhere('id', 'like', '%' . $this -> search . '%');

            })
                ->orderBy('id')
                ->orderBy('created_at')
                ->paginate(10);

        }else{

            $cotacoes = Cotacao::where('id_remetente', $usuarioId)->paginate(10);

        }

        $sites = Site::all();

        return view('livewire.orcamentos.listar-orcamentos', compact('cotacoes', 'sites', 'search'));
    }
}
