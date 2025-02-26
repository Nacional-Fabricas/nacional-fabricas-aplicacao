<?php
namespace App\Livewire\Busca;

use App\Models\Cadastro;
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

    public $tipo = 'Fábricas';
    public $busca = '';
    public $buscar;
    public $estado;
    public $segmento;
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

            $tipo = $this->tipo;
            $buscar = $this->buscar;
            $estado = $this->estado;
            $segmento = $this->segmento;

            $estados = Estado::orderBy('sigla', 'asc')->get();
            $segmentos = Segmento::orderBy('nomeSegmento', 'asc')->get();

            if ($tipo == "Produtos"){

                $produtos = Produto::where(function ($query) use ($buscar) {
                    $query->where('status', 'like', 'Ativo')
                        ->where(function ($query) use ($buscar) {
                            $query->where('produto_nome', 'like', '%' . $buscar . '%')
                                ->orWhere('sku', 'like', '%' . $buscar . '%');
                        });
                });

                if ($segmento) {
                     $produtos = $produtos->where('segmento', $segmento);
                }

                if ($estado) {
                    $cadastros = Cadastro::where('estado', $estado)->pluck('id_conta')->toArray();
                    $produtos = $produtos->whereIn('id_conta', $cadastros);
                }

                $produtos = $produtos->orderBy('produto_nome')
                    ->orderBy('created_at')
                    ->paginate(9);

                $sites = Site::all();

                $cadastros = Cadastro::all();

            } elseif ($tipo == "Fábricas") {

                $sites = Site::where(function ($query) use ($buscar) {
                    $query->where('status', 'like', 'Ativo')
                        ->where(function ($query) use ($buscar) {
                            $query->where('nome_industria', 'like', '%' . $buscar . '%')
                                ->orWhere('produtos_tipo', 'like', '%' . $buscar . '%');
                        });
                });

                if ($segmento) {
                    $sites = $sites->where('segmento', $segmento);
                }

                if ($estado) {
                    $cadastros = Cadastro::where('estado', $estado)->pluck('id_conta')->toArray();
                    $sites = $sites->whereIn('id_conta', $cadastros);
                }

                $sites = $sites->orderBy('nome_industria')
                    ->orderBy('created_at')
                    ->paginate(9);

                $produtos = Produto::where('status', 'Ativo')->where('destaque', 'Sim')->get();

                $cadastros = Cadastro::all();

            }

            return view('livewire.busca.busca-geral', [
                'estados' => $estados,
                'estado' => $this->estado,
                'cadastros' => $cadastros,
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
