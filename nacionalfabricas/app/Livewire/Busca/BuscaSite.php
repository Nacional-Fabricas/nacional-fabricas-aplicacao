<?php

namespace App\Livewire\Busca;

use App\Models\Album;
use App\Models\Cadastro;
use App\Models\Categoria;
use App\Models\Estado;
use App\Models\Produto;
use App\Models\Segmento;
use App\Models\Site;
use Livewire\Component;
use Exception;
use Livewire\WithPagination;

class BuscaSite extends Component
{

    use WithPagination;

    public $buscar;

    public $id;

    public $categoria;

    protected $queryString = [
        'buscar' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function updatingBuscar()
    {
        $this->resetPage();
    }
    public function resetSearch()
    {
        $this->buscar = null;
        $this->categoria = null;

    }
    public function selectCategory($categoria)
    {
        $this->categoria = $categoria;
        $this->resetPage(); // Reseta a paginação ao selecionar uma nova categoria
    }

    public function render()
    {

        $site = Site::find($this -> id);

        $buscar = $this->buscar;

        $categoriaEscolhida = $this -> categoria;

        $this -> id_site = $site -> id_conta;

        $site = Site::where('id_conta', $this -> id_site) -> first();

        $endereco = Cadastro::where('id_conta', $this -> id_site) -> first();

        $fotosAlbum = Album::all();

        //try {

            $produtos = Produto::where(function ($query) use ($buscar) {
                $query->where('status', 'like', 'Ativo')
                    ->where(function ($query) use ($buscar) {
                        $query->where('produto_nome', 'like', '%' . $buscar . '%')
                            ->orWhere('sku', 'like', '%' . $buscar . '%');
                    });
            });

            if ($this->categoria && !$buscar) {
                $produtos = $produtos->where('categorias', $this->categoria);
            }

            $produtos = $produtos->orderBy('produto_nome')
                ->orderBy('created_at')
                ->paginate(10);

            $categorias = Categoria::where('id_conta', $site -> id_conta)->where('ativo', 'Ativo') -> get();

            return view('livewire.busca.busca-site', [

                'fotosAlbum' => $fotosAlbum,
                'endereco' => $endereco,
                'buscar' => $buscar,
                'produtos' => $produtos,
                'site' => $site,
                'categoriaEscolhida' => $categoriaEscolhida,
                'categorias' => $categorias,
                'usuario' => auth()->user(),
            ]);

        //} catch (Exception $e) {
          //  return view('livewire.busca.busca-site', [
               // 'error' => 'Ocorreu um erro ao realizar a busca. Por favor, tente novamente.',
            //]);
        //}
    }
}
