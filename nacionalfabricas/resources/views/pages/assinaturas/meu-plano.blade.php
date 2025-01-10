@extends('layouts.dashboard')
@section('content')

    <div class="meu-plano">

        <div class="plano">

            <div class="cabecalho">

                <h1>Dados do seu Plano</h1>

            </div>

            <div class="conteudo-plano">

                <div class="linha">

                    <span class="label">Nome do plano</span>

                    <span class="valor">{{$dadosPlano -> name}}</span>

                </div>

                <div class="linha">

                    <span class="label">Valor do plano</span>

                    @if($dadosPlano -> preco == 0)

                        <span class="valor">Grátis</span>

                    @else

                        <span class="valor">{{$dadosPlano -> preco}}</span>

                    @endif

                </div>

                <div class="linha">

                    <span class="label">Data de aquisição</span>

                    <span class="valor">{{\Carbon\Carbon::parse($dadosPlano -> created_at)-> format('d/m/Y')}}</span>

                </div>

                <div class="linha">

                    <span class="label">Benefícios</span>

                    <span class="valor">{{$dadosPlano -> descricao}}</span>

                </div>

            </div>

        </div>

        <div class="lista-planos">

            <h1>Outros Planos</h1>

            @foreach($planos as $plano)

                @if($plano -> id != $dadosPlano -> id)

                <div class="linha">

                    <div class="info">

                        <h1>{{$plano -> name}}</h1>
                        <span>{{$plano -> descricao}}</span>

                    </div>

                    <div class="acoes">

                        <div class="preco">

                            @if($plano -> price == 0)

                                GRÁTIS

                            @else

                                R${{number_format($plano -> price, 2 , ',', '.')}}

                            @endif

                        </div>

                        @if( $dadosPlano != null && $dadosPlano -> id == $plano -> id)

                            <a class="btn-assinar" href="{{route('meu_plano')}}">Seu plano</a>

                        @else

                            <a href="{{ route('assinar_plano', ['plano' => $plano->slug]) }}" class="btn-assinar">Assinar</a>

                        @endif

                    </div>

                </div>

                @endif

            @endforeach

        </div>

    </div>

@endsection
