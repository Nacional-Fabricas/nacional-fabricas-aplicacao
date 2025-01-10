@extends('layouts.dashboard')
@section('content')

    <div class="dashboard">

        <div class="notificacoes">

            <div class="alert">

                <p>
                    <img src="{{ asset('icons/ring.svg')}}" alt=""> Aqui aparecerão avisos e atualizações disponíveis.
                </p>

                <a class="btnAlert" href="">Visualizar</a>

            </div>

        </div>

        <div class="contador">

            <div class="nameLogged">Olá, <strong>{{Auth::user()-> name}} !</strong>, Que bom te ver por aqui.</div>

            <ul class="listaViews">

                <li>

                    <h4>Orçamentos recebidos</h4>

                    <div class="info">

                        <span class="label">Orçamentos recebidos nos últimos 30 dias:</span>

                        <div class="value">{{count($orcamentoUltimos30Dias)}}</div>

                    </div>

                    <span class="comparacao">Em comparacao com o perído anterior: {{count($orcamentoUltimos60Dias) - count($orcamentoUltimos60Dias) }}

                        @if($orcamentoUltimos30Dias > $orcamentoUltimos60Dias)

                            <img src="/icons/chevron-up.svg" alt="">

                        @elseif($orcamentoUltimos30Dias < $orcamentoUltimos60Dias)

                            <img src="{{ asset('icons/chevron-up.svg')}}" alt="">

                        @endif

                    </span>


                </li>

                <li>

                    <h4>Dia mais visitado </h4>

                    <div class="info">

                        <div class="label">Segunda-feira</div>

                        <div class="value">124 <img src="{{ asset('icons/chevron-up.svg')}}" alt=""></div>

                    </div>

                </li>

                <li>

                    <h4>Visitas no último mês</h4>

                    <div class="info">

                        <div class="label">Novas visitas na página</div>

                        <div class="value">474 <img src="{{ asset('icons/chevron-up.svg')}}" alt=""></div>

                    </div>

                </li>

            </ul>

        </div>

        <div class="dadosLoja">

            <div class="headerBloco">

                <h2>Seu uso neste mês</h2>

            </div>

            <ul class="listaDados">

                <li class="dado">

                    <h4 class="label">Dados do Plano</h4>

                    <div class="content">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/calendar.svg')}}" alt="">

                        </div>

                        <div class="info">

                        <span class="value">

                            {{$diferencaDatas}} Dias

                        </span>


                            <span class="desc">
                            para acabar o plano
                        </span>

                        </div>

                    </div>

                    <div class="rodapeDado">

                        <span class="info">Acaba em <strong>{{ Carbon\Carbon::parse($dataExpira)->format('d/m/Y') }}</strong></span>

                        <a href="/meu-plano" class="acao">Ver sobre Plano</a>

                    </div>

                </li>

                <li class="dado">

                    <h4 class="label">Visitas no site</h4>

                    <div class="content">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/eye.svg')}}" alt="">

                        </div>

                        <div class="info">

                        <span class="value">
                            {{ $ultimasVisualizacoes }} visitas
                        </span>

                            <span class="desc">
                            {{$ultimasVisualizacoes}} visitas - últimas 24 horas
                        </span>

                        </div>

                    </div>

                    <div class="rodapeDado">

                        <span class="info">Produtos ativos <strong>{{$ultimasVisualizacoes}}</strong></span>

                        <a href="" class="acao">Ranking the visualizações</a>

                    </div>

                </li>

                <li class="dado">

                    <h4 class="label">Produto destaque</h4>

                    <div class="content">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/box.svg')}}" alt="">

                        </div>

                        <div class="info">

                        <span class="value">

                            @if($produto != null)

                                {{$produto -> product_name}}

                            @else

                                Sem produtos

                            @endif


                        </span>

                            <span class="desc">
                            @if($produto != null)

                                    {{$produto -> visualizacoes}} visualizações - últimas 24 horas

                                @else

                                    Nenhum Produto registrado

                                @endif
                        </span>

                        </div>

                    </div>

                    <div class="rodapeDado">

                        <span class="info">Produtos ativos <strong>{{$produtos}}</strong> </span>

                        <a href="" class="acao">Seus produtos</a>

                    </div>

                </li>

                <li class="dado">

                    <h4 class="label">Ciclo do Plano</h4>

                    <div class="content">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/user.svg')}}" alt="">

                        </div>

                        <div class="info">

                            <span class="value">
                                {{$usuariosTime}}
                            </span>

                            <span class="desc">

                                de {{$plano -> max_usuarios}} usuários

                            </span>

                        </div>

                    </div>

                    <div class="rodapeDado">

                        <span class="info">Sua loja atingiu o <strong>limite de usuários</strong></span>

                        <span class="acao">Subir plano</span>

                    </div>

                </li>

                <li class="dado">

                    <h4 class="label">Balanço de orçamentos</h4>

                    <div class="content">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/signature-document.svg')}}" alt="">

                        </div>

                        <div class="info">

                        <span class="value">
                            {{ number_format($cotacoes , 2, ',')}}% concluídos
                        </span>

                            <span class="desc">
                            Cotações recebidas - {{$todasCotacoes}}
                        </span>

                        </div>

                    </div>

                    <div class="rodapeDado">

                        <span class="info">Orçamentos em aberto <strong>{{$cotacoesAbertas}} </strong></span>

                        <a href="/lista-orcamentos" class="acao">Ver orçamentos</a>

                    </div>

                </li>

                <li class="dado">

                    <h4 class="label">Sua avaliação</h4>

                    <div class="content">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/star.svg')}}" alt="">

                        </div>

                        <div class="info">

                            @if($classificacoes != null)

                                <span class="value">

                            Sua nota é {{number_format($classificacoes, 1, '.')}}

                        </span>

                            @else

                                <span class="value">

                            Não avaliado

                        </span>

                            @endif

                            <span class="desc">

                            Seu perfil está {{$pontuacao}}% completo

                        </span>

                        </div>


                    </div>

                    <div class="rodapeDado">

                        <span class="info">Seu nível é <strong>{{$nivel}}</strong></span>

                        <a href="" class="acao">Dicas para evoluir</a>

                    </div>

                </li>

            </ul>

        </div>

    </div>

@endsection
