<div>

    <div class="lista-meus-produtos">

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

            <div class="cabecalho">

                <p>Thumbnail</p>
                <p>Nome do produto</p>
                <p>Quantidade</p>
                <p>SKU</p>
                <p>Situação</p>
                <p>Ação</p>

            </div>

            <div class="produtos">

            @foreach($produtos as $produto)

                <div class="produto">

                    <img class="thumbnail" src="{{ asset('images/thumbnails/' .$produto-> produto_thumbnail)}}">

                    <p>{{$produto -> produto_nome }}</p>
                    <p>{{$produto -> quantidade }}</p>
                    <p>{{$produto -> sku }}</p>
                    <p>@if($produto -> ativo === "Sim" )
                            Ativo
                        @else
                            Inativo
                        @endif
                    </p>

                    <a class="botao-editar" href="{{ route('editar_produto', [ 'id' => $produto -> id])}}">Editar</a>

                </div>
            @endforeach

            </div>

        </div>

        <div class="links">

            {{$produtos -> links()}}

        </div>

    </div>

</div>
