<?php

namespace App\Livewire\Produtos;

use App\Models\Assinatura;
use App\Models\Cadastro;
use App\Models\Categoria;
use App\Models\Plano;
use App\Models\Produto;
use App\Models\Site;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CadastrarProduto extends Component
{
    public function render()
    {

        $user = Auth::user() ;

        if($user -> current_team_id){

            $usuarioId = $user -> current_team_id;

        }else{

            $usuarioId = $user -> id;
        }

        $assinatura = Assinatura::where('id_conta', $usuarioId )->first();

        $meuPlano = $assinatura ? Plano::where('id', $assinatura -> id_plano) -> first () : null;

        $maxProdutos = $meuPlano ? $meuPlano -> max_produtos : 10;

        $meusProdutos = Produto::where('id_conta', $usuarioId ) -> count();

        if ( $meusProdutos < $maxProdutos  ){

            $cadastro =  Cadastro::where('id_conta', $usuarioId)->first();

            $categoria =  Categoria::where('id_conta', $usuarioId)->get();

            $site =  Site::where('id_conta', $usuarioId)->first();

            $produto = Produto::where('id_conta',  $usuarioId)->get();

            if ($cadastro -> fabricante == null) {

                return redirect()->route('home')-> with('msg','Sua conta não permite acessar está página');

            }elseif( !$site ){

                return redirect()->route('meu_site')-> with('msg','Crie sua página para criar um produto.');

            } elseif( !$categoria ){

                return redirect()->route('criar_categoria')-> with('msg','Crie uma categoria para criar um produto.');

            }

        }else{

            return redirect()->route('lista_produtos')-> with('erro','Você já atingiu o limite de produtos cadastrados para seu Plano');

        }

        return view('livewire.produtos.cadastrar-produto', compact('user', 'produto','site'));
    }
}
