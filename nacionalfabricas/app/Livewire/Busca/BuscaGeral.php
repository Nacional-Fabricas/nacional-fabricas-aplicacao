<?php
namespace App\Livewire\Busca;

use App\Models\Estado;
use App\Models\Produto;
use App\Models\Segmento;
use App\Models\Site;
use Livewire\Component;
use Livewire\WithPagination;

class BuscaGeral extends Component
{

    use WithPagination;

    public $tipo = 'Produtos';
    public $busca = '';
    public $buscar;
    public $estado = [];
    public $segmento = [];

    public function render()
    {

        $buscar = $this->buscar;
        $tipo = $this->tipo;
        $estados =  Estado::orderBy('sigla', 'asc') -> get();
        $segmentos = Segmento::orderBy('nomeSegmento', 'asc') -> get();

        $produtos = Produto::where(function ($query) use ($buscar) {

            $query->Where('produto_nome', 'like', '%' . $this->buscar . '%')
                ->orWhere('sku', 'like', '%' . $this->buscar . '%');

        })
            ->orderBy('produto_nome')
            ->orderBy('created_at')
            ->paginate(4);

        $sites = Site::all();

        return view('livewire.busca.busca-geral', [
            'estado' => $this->estado,
            'estados' => $estados,
            'segmentos' => $segmentos,
            'buscar' => $buscar,
            'produtos' => $produtos,
            'segmento' => $this->segmento,
            'sites' => $sites,
            'tipo' => $this->tipo,
            'usuario' => auth()->user(),

        ]);
    }
}
