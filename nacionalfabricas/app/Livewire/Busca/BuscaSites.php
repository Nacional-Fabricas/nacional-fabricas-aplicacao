<?php

namespace App\Livewire\Busca;

use App\Models\Cadastro;
use App\Models\Produto;
use App\Models\Site;
use Livewire\Component;

class BuscaSites extends Component
{
    public function render()
    {

        $sites = Site::all();

        $produtos = Produto::all();

        $cadastros = Cadastro::all();

        return view('livewire.busca.busca-sites', compact('sites', 'produtos', 'cadastros'));
    }
}
