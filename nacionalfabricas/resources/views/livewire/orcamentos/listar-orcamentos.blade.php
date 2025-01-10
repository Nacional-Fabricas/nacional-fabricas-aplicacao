<div>

    <div class="lista-orcamento">

        @if(count($cotacoes) == 0 && !$search )

            <div class="lista-vazia">

                <img src="{{ asset('icons/cancel.svg')}}" alt="">

                <h1><strong>Lista de compras vazia!</strong></h1>

                <span>Comece a comprar <a href="{{ route('busca_geral', [ 'tipo' => 'Produtos'])}}">clicando aqui</a></span>

            </div>

        @else

            <div class="texto-filtro">

                <div class="titulo">

                    <span class="sub-titulo">Área de Compras / </span>
                    <h1>Minhas <div class="verde">Compras.</div></h1>

                </div>

                <div class="pesquisa">

                    <input class="barra-pesquisa" wire:model.live="search" placeholder="Pesquise um orcamento">

                </div>

            </div>

            @if(count($cotacoes) > 0)

                <div class="dados-cotacao">

                    <div class="cabecalho">

                        <p>Id</p>
                        <p>Status</p>
                        <p>Última Atualização</p>
                        <p>Fornecedor</p>
                        <p>Total</p>
                        <p>Acessar</p>

                    </div>

                    @foreach ($cotacoes as $cotacao)

                    <a href="{{ route('negociacao_cotacao', ['id' => $cotacao -> id])}}">

                        <p>{{ $cotacao -> id}}</p>

                        @if ( $cotacao -> status_s === 'Aguardando')

                            <p class="status azul"> &bull; <strong>{{ $cotacao -> status_remetente}}</strong></p>

                        @elseif ( $cotacao -> status_remetente === 'Cancelado')

                            <p class="status vermelho"> &bull; <strong>{{ $cotacao -> status_remetente}}</strong></p>

                        @elseif ( $cotacao -> status_remetente === 'Finalizado')

                            <p class="status cinza"> &bull; <strong>{{ $cotacao -> status_remetente}}</strong></p>

                        @elseif ( $cotacao -> status_remetente === 'Aprovado')

                            <p class="status verde"> &bull; <strong>{{ $cotacao -> status_remetente}}</strong></p>

                        @elseif ( $cotacao -> status_remetente === 'Atualizado')

                            <p class="status amarelo"> &bull; <strong>{{ $cotacao -> status_remetente}}</strong></p>

                        @elseif ( $cotacao -> status_remetente === 'Nova Proposta')

                            <p class="status roxo"> &bull; <strong>{{ $cotacao -> status_remetente}}</strong></p>

                        @endif

                        <p class="mobile">{{ Carbon\Carbon::parse($cotacao -> updated_at)->format('d/m/Y') }}</p>

                        <p>
                            @foreach($sites as $site)

                                @if( $cotacao -> id_receptor == $site -> id_conta) {{$site -> nome_industria}} @endif

                            @endforeach
                        </p>

                        <p>R$ {{ number_format($cotacao -> valor, 2, '.', ',')}}</p>

                    </a>

                    @endforeach

                </div>
            @else

                <span>Nenhum resultado encontrado</span>

            @endif

        @endif

    </div>

</div>
