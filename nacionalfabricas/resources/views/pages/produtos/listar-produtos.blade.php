@extends('layouts.dashboard')
@section('content')

<div class="listar-produtos">

    @if(count($produtos) > 0)

        <livewire:produtos.listar-produtos/>

    @else

        <div class="lista-vazia">

            <img src="{{ asset('icons/cancel.svg')}}" alt="">

            <h1><strong>Lista de produtos vazia!</strong></h1>

            <span>Comece a criar seus produtos <a href="{{route('criar_produto')}}">clicando aqui</a></span>

        </div>

    @endif

</div>

@endsection
