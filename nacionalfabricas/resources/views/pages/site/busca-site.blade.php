@extends('layouts.meuSite')
@section('content')

<div class="busca-site">

    <div class="cabecalho">

        <div class="breadcrumb">

            <a href="{{ route('industria', ['conta_id' => $site -> id_conta, 'slug' => $site -> slug])}}">Início</a> > Categoria > <strong>{{$busca}}</strong>

        </div>

        <div class="contagem-produtos">

            <strong>{{count($produtos)}}</strong> resultados encontrados

        </div>

    </div>

    <ul class="lista-produtos">

        @foreach($produtos as $produto)

        <li class="produto">

            <img class="thumbnail" src="{{ asset('images/thumbnails/'. $produto-> produto_thumbnail) }}">

            <div class="informacoes-produto">

                <span class="titulo">{{$produto -> produto_nome}}</span>

                <span class="codigo"><strong>SKU</strong> {{$produto -> sku}}</span>

                <div class="acoes">

                <a class="ver-produto" href="{{route('produto', [ 'id' => $produto -> id])}}">Ver Produto</a>

                @if($produto -> id_conta != Auth::id() )

                <form action="{{route('adicionar_cotacao')}}" class="formulario-cotacao" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{$produto -> id}}">
                    <input type="hidden" name="name" value="{{$produto -> produto_nome}}">
                    <input type="hidden" name="sku" value="{{$produto -> sku}}">
                    <input type="hidden" name="ean" value="{{$produto -> ean}}">
                    <input type="hidden" name="id_receptor" value="{{$produto -> id_conta}}">
                    <input type="hidden" name="id_produto" value="{{$produto -> id}}">
                    <input type="hidden" name="price" value="1">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="image" value="{{$produto-> produto_thumbnail}}">

                    <button class="adicionar-cotacao">Cotar produto</button>

                </form>

                @else

                <a class="adicionar-cotacao" href="{{ route('editar_produto', [ 'id' => $produto -> id])}}">Editar Produto</a>

                @endif

                </div>

            </div>

        </li>

        @endforeach

    </ul>

    {{$produtos -> links()}}

</div>

@endsection
