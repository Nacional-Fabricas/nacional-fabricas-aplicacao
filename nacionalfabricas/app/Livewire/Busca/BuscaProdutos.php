<?php

namespace App\Livewire\Busca;

use App\Models\Produto;
use App\Models\Site;
use Livewire\Component;
use Livewire\WithPagination;

class BuscaProdutos extends Component
{
    use WithPagination;

    public $busca = '';
    public $buscar = '';
    public $estado;
    public $segmento;
    public $cidade;

    protected $queryString = ['buscar']; // Mantém a busca na URL

    public function updatingBuscar()
    {
        $this->resetPage(); // Reseta a paginação ao mudar a busca
    }

    public function render()
    {
        $produtos = Produto::where('status', 'Ativo');

        if (!empty($this->buscar)) {
            $produtos = $produtos->where(function ($query) {
                $query->where('produto_nome', 'like', '%' . $this->buscar . '%')
                    ->orWhere('quantidade', 'like', '%' . $this->buscar . '%')
                    ->orWhere('sku', 'like', '%' . $this->buscar . '%');
            });
        }

        $produtos = $produtos->orderBy('produto_nome')
            ->orderBy('created_at')
            ->paginate(10);

        return view('livewire.busca.busca-produtos', [
            'produtos' => $produtos,
            'sites' => Site::all(),
            'usuario' => auth()->user(),
        ]);
    }
}
