@extends('layouts.main')
@section('content')

    <div class="container">

        <div class="sucesso">

            <div class="conteudo">

                <img class="like" src="{{ asset('icons/like.svg')}}">

                <h1><strong class="verde">Párabéns</strong> seu Plano foi adquirido com sucesso!!!</h1>

                <span>Estamos processando o pagamento. Enquanto isso </span>

                <span>Obrigado por confiar nos nossos serviços.</span>

            </div>

            <img class="fundo-fabrica" src="{{ asset('icons/factory.svg')}}">

        </div>

    </div>

@endsection
