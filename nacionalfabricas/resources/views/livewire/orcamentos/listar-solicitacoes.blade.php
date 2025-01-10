<div>

    @if( count($cotacoes) > 0)

        <div class="texto-filtro">

            <div class="titulo">

                <span class="sub-titulo">Área de Vendas / </span>
                <h1>Lista de  <div class="verde">Orçamentos.</div></h1>

            </div>

            <div class="pesquisa">

                <input class="barra-pesquisa" type="text" placeholder="Pesquise um orcamento">

            </div>

        </div>

        <div class="dados-cotacao">

            <div class="cabecalho">

                <p>ID</p>
                <p>Status</p>
                <p>Data</p>
                <p>Cliente</p>
                <p>Total</p>
                <p>Acessar</p>

            </div>

            @foreach ($cotacoes as $cotacao)

                <a class="linha" href="{{ route('negociacao_cotacao', [ 'id' => $cotacao -> id])}}">

                    <p>{{ $cotacao -> id}}</p>

                    @if ( $cotacao -> status_receptor === 'Aguardando')

                        <p class="status azul"> &bull; <strong>{{ $cotacao -> status_receptor}}</strong></p>

                    @elseif ( $cotacao -> status_receptor === 'Cancelado')

                        <p class="status vermelho"> &bull; <strong>{{ $cotacao -> status_receptor}}</strong></p>

                    @elseif ( $cotacao -> status_receptor === 'Finalizado')

                        <p class="status cinza"> &bull; <strong>{{ $cotacao -> status_receptor}}</strong></p>

                    @elseif ( $cotacao -> status_receptor === 'Aprovado')

                        <p class="status verde"> &bull; <strong>{{ $cotacao -> status_receptor}}</strong></p>

                    @elseif ( $cotacao -> status_receptor === 'Atualizado')

                        <p class="status amarelo"> &bull; <strong>{{ $cotacao -> status_receptor}}</strong></p>

                    @elseif ( $cotacao -> status_receptor === 'Nova Proposta')

                        <p class="status roxo"> &bull; <strong>{{ $cotacao -> status_receptor}}</strong></p>

                    @endif

                    <p>{{ Carbon\Carbon::parse($cotacao -> created_at)->format('d/m/Y') }}</p>

                    <p>

                        @foreach($usuarios as $usuario)

                            @if( $cotacao -> id_remetente == $usuario -> id) {{$usuario -> name}} @endif

                        @endforeach

                    </p>

                    <p>R$ {{ number_format($cotacao -> valor, 2, ',', '.')}}</p>

                </a>

            @endforeach

        </div>
    @else

        <div class="lista-vazia">

            <img src="{{ asset('icons/cancel.svg')}}" alt="">

            <h1><strong>Lista de orçamentos vazia!</strong></h1>

            <span>Assim que receber alguma você será notificado</span>

        </div>

    @endif

</div>
