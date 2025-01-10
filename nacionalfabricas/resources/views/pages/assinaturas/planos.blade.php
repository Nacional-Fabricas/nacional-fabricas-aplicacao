@extends('layouts.main')
@section('content')

<div class="planos">

    <div class="cabecalho">

        <h1>Nosso <span class="verde">Plano</span> é te ajudar! </h1>
        <span class="sub-titulo">Escolha um plano que funcione melhor para você e sua equipe</span>

    </div>

    <div class="bloco-planos">

        <div class="informacao">

            <img src="{{ asset('images/planos.png')}}" alt="">

            <p>
                A renovação do plano escolhido será mensal e automática (via Boleto), porém sem fidelização,
                ou seja, no momento que você desejar pode cancelar o serviço.
            </p>

            <p>
                A opção de planos é reservada para fabricantes. No entanto, empresas de diferentes segmentos
                podem se cadastrar gratuitamente na plataforma para gerenciar seus orçamentos.
            </p>

        </div>

        <livewire:gerais.planos/>

    </div>

</div>

@endsection
