@extends('layouts.dashboard')
@section('content')

    <div class="painel">

        @if($notificacoesNum > 0)

        <div class="notificacoes">

            <div class="alerta">

                <p>
                    <img src="{{ asset('icons/ring.svg')}}" alt=""> Aqui aparecerão avisos e atualizações disponíveis.
                </p>

                <a class="btn-alerta" href="{{route('notificacoes')}}">Visualizar</a>

            </div>

        </div>

        @endif

        <div class="contador">

            <div class="nome">Olá, <strong>{{Auth::user()-> name}} !</strong>, Que bom te ver por aqui.</div>

        </div>

        <div class="dados-loja">

            <div class="cabecalho">

                <h2>Seu uso neste mês</h2>

            </div>

            <ul class="dados">

                <li class="dado">

                    <h4 class="label">Dados do assinatura</h4>

                    <div class="conteudo-dados">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/calendar.svg')}}" alt="">

                        </div>

                        <div class="info">

                            <span class="value">

                                {{$assinatura -> current_period_start  }} Dias

                            </span>

                            <span class="desc">
                                para acabar o assinatura
                            </span>

                        </div>

                    </div>

                    <div class="rodapeDado">

                        <span class="info">Acaba em <strong>{{ Carbon\Carbon::parse($assinatura -> current_period_end)->format('d/m/Y') }}</strong></span>

                        <a href="{{route('meu_plano')}}" class="acao">Ver assinatura</a>

                    </div>

                </li>

                <li class="dado">

                    <h4 class="label">Visitas no site</h4>

                    <div class="conteudo-dados">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/eye.svg')}}" alt="">

                        </div>

                        <div class="info">

                        <span class="value">
                            {{ $ultimasVisualizacoes }} visitas
                        </span>

                        </div>

                    </div>

                    <div class="rodapeDado">

                        <span class="info">Produtos ativos <strong>{{$produtos}}</strong></span>

                        <a href="{{route('visualizacoes')}}" class="acao">Ranking the visualizações</a>

                    </div>

                </li>

                <li class="dado">

                    <h4 class="label">Produto destaque</h4>

                    <div class="conteudo-dados">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/box.svg')}}" alt="">

                        </div>

                        <div class="info">

                        <span class="nomeProduto">

                            @if($produto != null)

                                {{$produto -> produto_nome}}

                            @else

                                Sem produtos

                            @endif


                        </span>

                            <span class="desc">
                            @if($produto != null)

                                    {{$produto -> visualizacoes}} visualizações

                                @else

                                    Nenhum Produto registrado

                                @endif
                        </span>

                        </div>

                    </div>

                    <div class="rodapeDado">

                        <span class="info">Produtos ativos <strong>{{$produtos}}</strong> </span>

                        <a href="{{route('lista_produtos')}}" class="acao">Seus produtos</a>

                    </div>

                </li>

                <li class="dado">

                    <h4 class="label">Controle de membros</h4>

                    <div class="conteudo-dados">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/user.svg')}}" alt="">

                        </div>

                        <div class="info">

                            <span class="value">
                                {{$usuariosTime}}
                            </span>

                            <span class="desc">

                                de {{$assinatura -> max_usuarios}} usuários

                            </span>

                        </div>

                    </div>

                    <div class="rodapeDado">

                        @if( $meuPLano -> max_usuarios > $usuariosTime )

                            <span class="info">Sua loja permite mais <strong> {{$meuPLano -> max_usuarios - $usuariosTime}} usuários</strong></span>

                        @else

                            <span class="info">Sua loja atingiu o <strong>limite de usuários</strong></span>

                        @endif

                        <a href="{{route('planos')}}" class="acao">Subir assinatura</a>

                    </div>

                </li>

                <li class="dado">

                    <h4 class="label">Balanço de orçamentos</h4>

                    <div class="conteudo-dados">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/signature-document.svg')}}" alt="">

                        </div>

                        <div class="info">

                            <span class="value">
                                {{ number_format($cotacoes , 2, ',')}}% concluídos
                            </span>

                            <span class="desc">Cotações recebidas - {{$todasCotacoes}}</span>

                        </div>

                    </div>

                    <div class="rodapeDado">

                        <span class="info">Orçamentos em aberto <strong>{{$cotacoesAbertas}} </strong></span>

                        <a href="{{route('lista_cotacoes')}}" class="acao">Ver orçamentos</a>

                    </div>

                </li>

                <li class="dado">

                    <h4 class="label">Sua avaliação</h4>

                    <div class="conteudo-dados">

                        <div class="icon">

                            <img class="ico" src="{{ asset('icons/star.svg')}}" alt="">

                        </div>

                        <div class="info">

                            @if($pontuacao != null)

                                @if( $pontuacao == 100 )

                                    <span class="value">

                                        Perfil Completo

                                    </span>

                                @else

                                    <span class="value">

                                        Perfil Imcompleto

                                    </span>

                                @endif

                            @else

                                <span class="value">Não avaliado</span>

                            @endif

                            <span class="desc">Seu perfil está {{$pontuacao}}% completo</span>

                        </div>

                    </div>

                    <div class="rodape-dado">

                        <span class="info">Seu nível é <strong>{{$nivel}}</strong></span>

                        <a href="{{route('dicas')}}" class="acao">Dicas para evoluir</a>

                    </div>

                </li>

            </ul>

        </div>

    </div>

@endsection
