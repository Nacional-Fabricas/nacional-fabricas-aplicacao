@extends('layouts.painel')
@section('content')

<div class="chamado">

    <div class="cabecalho">

        <div class="grupo">

            <span class="label">Quem abriu o chamado:</span>
            <span class="valor">{{$chamado -> nome}}</span>

        </div>

        <div class="grupo">

            <span class="label">Criado em:</span>
            <span class="valor">{{ Carbon\Carbon::parse($chamado -> updated_at)->format('d/m/Y') }}</span>

        </div>

        <div class="grupo">

            <span class="label">Motivo:</span>
            <span class="valor">{{$chamado -> descricao}}</span>

        </div>

        <div class="grupo">

            <span class="label">Status:</span>
            <span class="valor">{{$chamado -> status_chamado}}</span>

        </div>

    </div>

    <div class="conteudo">

        <p class="descricao-chamado">

            {{$chamado -> descricao}}

        </p>

        <div class="status">

            <a class="btn-sucesso">Finalizar</a>

            <a class="btn-erro">Não Resolvido</a>

        </div>

    </div>

</div>

@endsection
