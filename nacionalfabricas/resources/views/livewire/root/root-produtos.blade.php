<div>

    <div class="dados">

        <div class="cabecalho">

            <h1>Todos os Produtos registrados</h1>

        </div>

        <div class="pesquisa">

            <input class="pesquisa" wire:model.live="busca" placeholder="Busque pelo seu chamado">

        </div>

        <div class="lista-dados">

            <div class="cabecalho">

                <th>ID</th>
                <th>Foto</th>
                <th>Nome do Produto</th>
                <th>Fabricante</th>
                <th>Visitar</th>
            </div>

            <div class="resultados">
            @foreach($produtos as $produto)
                <a class="resultado" href="{{ route('produto', ['id' => $produto -> id])}}">
                    <img class="thumbnail" src="{{ asset('images/thumbnails/' .$produto -> produto_thumbnail) }}">
                    <p>{{$produto -> id}}</p>
                    <p>{{$produto -> produto_nome }}</p>

                    @foreach($empresas as $empresa)
                        @if($empresa -> id_conta == $produto -> id_conta)
                            <p>{{$empresa -> nome_empresa }}</p>
                        @endif
                    @endforeach

                </a>

            @endforeach

            </div>

        </div>

        <div class="paginacao">

            {{ $produtos -> links() }}

        </div>

    </div>

</div>
