@extends('layouts.main')
@section('content')

    <div class="container">


            <div class="sucesso">

                <div class="conteudo">

                    <img class="like" src="{{ asset('icons/like.svg')}}">

                    @if($status == "sucesso")

                    <h1><strong class="verde">Párabéns</strong> seu Plano foi adquirido com sucesso!!!</h1>

                    <span>Seu plano foi ativado com sucesso. Obrigado por confiar nos nossos serviços.</span>

                    @else
                    <h1><strong class="verde">Párabéns</strong> seu Plano foi adquirido com sucesso!!!</h1>

                    <span>Aguarde enquanto processamos o pagamento. Obrigado por confiar nos nossos serviços.</span>

                    @endif

                </div>

                <img class="fundoFabrica" src="{{ asset('icons/factory.svg')}}">

            </div>

    </div>

@endsection
