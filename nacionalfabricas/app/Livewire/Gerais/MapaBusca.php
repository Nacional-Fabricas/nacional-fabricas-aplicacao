<?php

namespace App\Livewire\Gerais;

use App\Models\Cadastro;
use App\Models\Produto;
use App\Models\Site;
use Livewire\Component;
use Auth;

class MapaBusca extends Component
{
    public function render()
    {
        $user = Auth::user() ;

        $search = request('busca');

        $state = request('estado');

        $segmento = request('segmento');

        $cidade = request('cidade');

        $tipo = request('tipo');

        if($tipo == 'Produtos'){

            if ($search || $state || $segmento || $cidade){

                $resultados = Produto::where(function ($query) use ($search, $state, $segmento, $cidade) {
                    $query->where(function ($queryResultados) use ($search) {
                        $queryResultados->where('produto_nome', 'like', '%' . $search . '%')
                            ->orWhere('id', 'like', '%' . $search. '%')
                            ->orWhere('categorias', 'like', '%' . $search. '%')
                            ->orWhere('sku', 'like', '%' . $search. '%');
                    });

                    if ($state != null) {
                        $query->where('estado', 'like', '%' . $state . '%');
                    }

                    if ($segmento != null) {
                        $query->where('segmento', 'like', '%' . $segmento . '%');
                    }

                    if ($cidade != null) {
                        $query->where('cidade', 'like', '%' . $cidade . '%');
                    }
                })
                    ->paginate(10);

                $resultados->appends(['busca' => $search, 'estado' => $state, 'tipo' => $tipo, 'segmento' => $segmento]);

                if(count($resultados) === 0){

                    $produtos = 0;

                }else{

                    foreach ($resultados as $produto) {

                        $meuId = $produto -> id_conta ;
                        $produtos = Produto::findOrFail($meuId)
                            ->where('destaque', 'Sim')
                            ->where('ativo', 'Sim')
                            ->latest('created_at')
                            ->take(4)
                            ->get();

                    }

                }

            }else{

                $resultados = Produto::paginate(10);

                if(count($resultados) === 0){

                    $produtos = 0;

                }else{

                    $produtos = Produto::where('destaque', 'Sim')
                        ->where('ativo', 'Sim')
                        ->latest('created_at')
                        ->take(4)
                        ->get();

                }

            }

        }else{

            $resultados = Site::join('cadastros', 'sites.id_conta', '=', 'cadastros.id_conta')
                ->where(function ($query) use ($search, $state, $segmento, $cidade) {
                    $query->where(function ($queryResultados) use ($search) {
                        $queryResultados->where('nome_industria', 'like', '%' . $search . '%')
                            ->orWhere('produtos_tipo', 'like', '%' . $search . '%');
                    });

                    if ($state != null) {
                        $query->where('cadastros.estado', 'like', '%' . $state . '%');
                    }

                    if ($segmento) {
                        $query->where('segmento', 'like', '%' . $segmento . '%');
                    }

                    if ($cidade != null) {
                        $query->where('cadastros.cidade', 'like', '%' . $cidade . '%');
                    }
                })
                ->paginate(10);

            $resultados->appends(['busca' => $search, 'estado' => $state, 'tipo' => $tipo, 'segmento' => $segmento]);

            if(count($resultados) == 0){

                $produtos = 0;

            }else{

                $produtos = Produto::all()
                    ->where('destaque', 'Sim')
                    ->where('ativo', 'Sim');

            }

        }

        $siteids = Site::pluck('id_conta')->toArray();

        if (count($siteids) > 0 && $resultados -> count() > 0) {

            $enderecos = Cadastro::where('fabricante', 'Sim')
                ->whereIn('id_conta', $siteids)
                ->get();

            $sites = Site::whereIn('id_conta', $siteids)
                ->get();

        }else{

            $enderecos = null;
            $sites = null;
        }

        return view('livewire.gerais.mapa-busca', compact('enderecos', 'sites', 'resultados'));
    }
}
