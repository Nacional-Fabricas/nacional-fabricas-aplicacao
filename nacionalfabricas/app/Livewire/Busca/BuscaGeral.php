<?php
namespace App\Livewire\Busca;

use App\Models\Estado;
use App\Models\Produto;
use App\Models\Segmento;
use App\Models\Site;
use Livewire\Component;
use Livewire\WithPagination;
use Exception;

class BuscaGeral extends Component
{
    use WithPagination;

    public $tipo = 'Produtos';
    public $busca = '';
    public $buscar;
    public $estado = [];
    public $segmento = [];
    public $page = 1;

    protected $queryString = [
        'buscar' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function updatingBuscar()
    {
        $this->resetPage();
    }

    public function render()
    {
        try {
            $buscar = $this->buscar;
            $tipo = $this->tipo;
            $estados = Estado::orderBy('sigla', 'asc')->get();
            $segmentos = Segmento::orderBy('nomeSegmento', 'asc')->get();

            $produtos = Produto::where(function ($query) use ($buscar) {
                $query->where('status', 'like', 'Ativo')
                    ->where(function ($query) use ($buscar) {
                        $query->where('produto_nome', 'like', '%' . $buscar . '%')
                            ->orWhere('sku', 'like', '%' . $buscar . '%');
                    });
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
        } catch (Exception $e) {
            return view('livewire.busca.busca-geral', [
                'error' => 'Ocorreu um erro ao realizar a busca. Por favor, tente novamente.',
            ]);
        }
    }
}
