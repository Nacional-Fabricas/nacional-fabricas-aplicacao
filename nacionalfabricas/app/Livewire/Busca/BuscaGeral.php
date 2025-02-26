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
    public $segmento = '';
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
            $estado = $this->estado;
            $tipo = $this->tipo;
            $estados = Estado::orderBy('sigla', 'asc')->get();
            $segmentos = Segmento::orderBy('nomeSegmento', 'asc')->get();

            if ($tipo == "Produtos"){

                $produtos = Produto::where(function ($query) use ($buscar) {
                    $query->where('status', 'like', 'Ativo')
                        ->where(function ($query) use ($buscar) {
                            $query->where('produto_nome', 'like', '%' . $buscar . '%')
                                ->orWhere('sku', 'like', '%' . $buscar . '%');
                        });
                })
                    ->orderBy('produto_nome')
                    ->orderBy('created_at')
                    ->paginate(9);

                if ( $estado){
                    $produtos->where('estado', $this->estado);
                }

                $sites = Site::all();

                $cadastros = Cadastro::all();

            }elseif($tipo == "Fábricas"){

                $sites = Site::where(function ($query) use ($buscar) {
                    $query->where('status', 'like', 'Ativo')
                        ->where(function ($query) use ($buscar) {
                            $query->where('nome_industria', 'like', '%' . $buscar . '%')
                                ->orWhere('produtos_tipo', 'like', '%' . $buscar . '%');
                        });
                })
                    ->orderBy('nome_industria')
                    ->orderBy('created_at')
                    ->paginate(9);;

                $produtos = Produto::where('status', 'Ativo')->where('destaque', 'Sim')->get();

                $cadastros = Cadastro::all();

            }

            return view('livewire.busca.busca-geral', [
                'estado' => $this->estado,
                'estados' => $estados,
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
