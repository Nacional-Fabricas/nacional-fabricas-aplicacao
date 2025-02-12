@extends('layouts.painel')
@section('content')

<div class="listar-categorias">

    <div class="bloco-categorias">

        @if(count($categorias) > 0)

        <div class="cabecalho">

            <h4>Produtos /</h4>
            <h1 class="verde">Categorias</h1>

        </div>

        <livewire:categorias.listar-categorias />

        @else

            <div class="lista-vazia">

                <img src="{{ asset('icons/cancel.svg')}}" alt="">

                <h1><strong>Nenhuma categoria registrada!</strong></h1>

                <span>Comece a criar suas categorias para classificar seus produtos <a href="{{route('criar_categoria')}}">clicando aqui</a></span>

            </div>

        @endif

    </div>

</div>

@endsection
