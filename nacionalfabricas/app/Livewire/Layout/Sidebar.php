<?php

namespace App\Livewire\Layout;

use App\Models\Assinatura;
use App\Models\Cadastro;
use App\Models\Team;
use Livewire\Component;
use Auth;

class Sidebar extends Component
{
    public function render()
    {

        $user = Auth::user() ;

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $time = Team::where('user_id', $usuarioId)->first();

        $assinatura = Assinatura::where('id_conta', $usuarioId)->first();

        $cadastro = Cadastro::where('id_conta', $usuarioId)-> first();

        return view('livewire.layout.sidebar', compact('cadastro', 'user', 'time','assinatura'));
    }
}
