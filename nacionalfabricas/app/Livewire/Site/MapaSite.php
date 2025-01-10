<?php

namespace App\Livewire\Site;

use App\Models\Assinatura;
use App\Models\Cadastro;
use Livewire\Component;
use Auth;

class MapaSite extends Component
{
    public function render()
    {
        $user = Auth::user();

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $endereco =  Cadastro::where('id_conta', $usuarioId)->first();

        return view('livewire.site.mapa-site', compact('endereco'));
    }
}
