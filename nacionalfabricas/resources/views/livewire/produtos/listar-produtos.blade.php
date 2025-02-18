<div>

    <div class="listar-produtos-fabrica">

        <div class="bloco-pesquisa">

            <div class="pesquisa">

                <input wire:model.live="pesquisa" type="text" placeholder="Pesquisar produtos pelo nome"/>

                <a class="botao-pesquisar" href="{{route('criar_produto')}}">+ Novo Produto</a>

            </div>

            <div class="dados-plano">

                <span>Seu plano permite: <strong>{{$maxProdutos}} produtos cadastrados.</strong></span>

                <span>Você ainda pode cadastrar: <strong>{{$maxProdutos - $totalProdutos}} produtos.</strong></span>

            </div>

        </div>

        <div class="lista-produtos">

            @foreach($produtos as $produto)

                <div class="bloco-produto">
                    <span class="status {{$produto -> ativo}}">
                        @if($produto -> ativo === "Sim" )
                            Ativo
                        @else
                            Inativo
                        @endif
                    </span>

                    <a class="produto" href="{{ route('editar_produto', [ 'id' => $produto -> id])}}">

                        <img class="thumbnail" src="{{ asset('storage/images/thumbnails/' . $produto->produto_thumbnail) }}">
                        <p class="nome">{{$produto -> produto_nome }}</p>
                        <p class="sku">SKU: {{$produto -> sku }}</p>

                    </a>

                </div>

            @endforeach


        </div>

        <div class="links">

            {{$produtos -> links()}}

        </div>

    </div>

</div>
