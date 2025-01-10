<div>

    <div class="dados">

        <h1>Todas as Cotações registradas</h1>

        <div class="pesquisa">

            <input class="pesquisa" wire:model.live="busca" placeholder="Busque pelo seu chamado">

        </div>

        <div class="lista-dados">

            <div class="cabecalho">

                <p>ID</p>
                <p>Fabricante</p>
                <p>Solicitante</p>
                <p>Criado em</p>

            </div>

            <div class="resultados">
                @foreach($cotacoes as $cotacao)

                    <a class="resultado" href="{{ route('negociacao_cotacao', ['id' => $cotacao -> id])}}">
                        <p>{{$cotacao -> id}}</p>

                        @foreach($empresas as $empresa)

                            @if($empresa -> id_conta == $cotacao -> id_remetente)

                                <p>{{$empresa -> nome_empresa }}</p>

                            @endif

                        @endforeach

                        @foreach($usuarios as $usuario)

                            @if($usuario -> id == $cotacao -> id_receptor)

                                <p>{{$usuario -> name }}</p>

                            @endif

                        @endforeach

                        <p>
                            {{Carbon\Carbon::parse($cotacao -> created_at)->format('d/m/Y')}}
                        </p>
                    </a>
                @endforeach
            </div>

        </div>

        <div class="paginacao">

            {{ $cotacoes -> links() }}

        </div>

    </div>

</div>
