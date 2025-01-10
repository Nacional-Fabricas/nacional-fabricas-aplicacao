@extends('layouts.dashboard')
@section('content')

    <div class="minhas-notificacoes">

        @if($notificacoesNum > 0)

        <div class="notificacoes">

            <div class="cabecalho">
                <p>ID</p>
                <p>Fabricante</p>
                <p>Ultima Atualização</p>
                <p>Ação</p>
            </div>

            <div class="bloco-notificacoes">

            @if(count($solicitacoesComprador) > 0)

            <h2 class="titulo">Minhas Compras</h2>

            @endif

            @foreach($solicitacoesComprador as $notificaoCompr)

                <a class="notificacao" href="{{ route('negociacao_cotacao', ['id' => $notificaoCompr -> id ])}}">
                    <p>{{$notificaoCompr -> id}}</p>
                    @foreach($empresas as $empresa)
                        @if($empresa -> id_conta == $notificaoCompr -> id_receptor)
                        <p>{{$empresa -> nome_empresa}}</p>
                        @endif
                    @endforeach
                    <p>{{ Carbon\Carbon::parse($notificaoCompr -> updated_at)->format('d/m/Y') }}</p>
                </a>

            @endforeach

            @if(count($solicitacoesFabricante) > 0)

             <h2 class="titulo">Solicitações</h2>

            @endif

            @foreach($solicitacoesFabricante as $notificaoVEnd)

                <a class="notificacao" href="{{ route('negociacao_cotacao', ['id' => $notificaoCompr -> id ])}}">
                    <p>{{$notificaoVEnd -> id}}</p>
                    @foreach($empresas as $empresa)
                        @if($empresa -> id_conta == $notificaoVEnd -> id_receptor)
                            <p>{{$empresa -> nome_empresa}}</p>
                        @endif
                    @endforeach
                    <p>{{ Carbon\Carbon::parse($notificaoVEnd -> updated_at)->format('d/m/Y') }}</p>
                </a>

            @endforeach

            </div>

        </div>

        @else

        <div class="sem-notificacoes">

            <h1>

                Nenhuma notificação por enquanto!!!

            </h1>

            <img src="{{ asset('images/contact-us.png')}}">

        </div>

        @endif

    </div>

@endsection
