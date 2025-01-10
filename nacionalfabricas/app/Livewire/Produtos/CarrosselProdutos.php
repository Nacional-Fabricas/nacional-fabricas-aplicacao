<?php

namespace App\Livewire\Produtos;

use App\Models\Produto;
use Livewire\Component;

class CarrosselProdutos extends Component
{
    public function render()
    {

        $produtos = Produto::inRandomOrder()->take(10)->get();

        return view('livewire.produtos.carrossel-produtos', compact('produtos'));
    }
}
