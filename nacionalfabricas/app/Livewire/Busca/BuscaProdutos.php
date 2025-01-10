<?php

namespace App\Livewire\Busca;

use App\Models\Produto;
use Livewire\Component;

class BuscaProdutos extends Component
{

    public $busca;
    public $estado;
    public $segmento ;
    public $cidade ;

    public function render()
    {
        // Inicializando variáveis
        $produtos = Produto::query();
        $busca = $this->busca;
        $estado = $this->estado;
        $segmento = $this->segmento;
        $cidade = $this->cidade;

        // Adicionando filtros à consulta de forma mais limpa usando "when"
        $produtos->when($busca, function ($query) use ($busca) {
            return $query->where(function ($queryProdutos) use ($busca) {
                $queryProdutos->where('produto_nome', 'like', '%' . $busca . '%')
                    ->orWhere('id', 'like', '%' . $busca . '%')
                    ->orWhere('categorias', 'like', '%' . $busca . '%')
                    ->orWhere('sku', 'like', '%' . $busca . '%');
            });
        })
            ->when($estado, function ($query) use ($estado) {
                return $query->where('estado', 'like', '%' . $estado . '%');
            })
            ->when($segmento, function ($query) use ($segmento) {
                return $query->where('segmento', 'like', '%' . $segmento . '%');
            })
            ->when($cidade, function ($query) use ($cidade) {
                return $query->where('cidade', 'like', '%' . $cidade . '%');
            });

        // Paginação dos produtos com filtros aplicados
        $produtos = $produtos->paginate(10);

        // Anexando os filtros à paginação
        $produtos->appends([
            'busca' => $busca,
            'estado' => $estado,
            'segmento' => $segmento,
            'cidade' => $cidade
        ]);

        // Verifica se encontrou algum produto
        $produtosDestaque = Produto::where('destaque', 'Sim')
            ->where('ativo', 'Sim')
            ->latest('created_at')
            ->take(4)
            ->get();

        // Retorna a view com as variáveis necessárias

        return view('livewire.busca.busca-produtos', compact('produtos', 'produtosDestaque'));
    }
}
