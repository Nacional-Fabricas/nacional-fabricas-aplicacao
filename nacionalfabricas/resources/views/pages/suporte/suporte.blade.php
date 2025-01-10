@extends('layouts.dashboard')
@section('content')

<div class="suporte">

    <div class="cabecalho">

        <h1>Suporte</h1>

        <h3>Está com problemas? abra um chamado que iremos resolver o mais rápido possível</h3>

    </div>

    <div class="conteudo">

        <div class="todos-chamados">

            @if(count($chamados) > 0)

            <livewire:suporte.chamados/>

            @else

            <div class="listaVazia">

                <img src="{{ asset('icons/cancel.svg')}}" alt="">

                <h1><strong>Nenhum Chamado!</strong></h1>

                <span>Esperamos que continue assim, aproveite nossa plataforma</span>

            </div>

            @endif

        </div>

        <form class="formulario-suporte" action="{{route('criar_chamado')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="grupo">

                <h2>Registro de chamado</h2>

            </div>

            <div class="grupo">

                <label for="name">Nome</label>

                <input required name="nome" id="name" type="text" value="{{$user -> name}}">

            </div>

            <div class="grupo">

                <label for="email">Email (se necessário contato)</label>

                <input required name="email" id="email" type="text" value="{{$user -> email}}">

            </div>

            <div class="grupo">

                <label for="motivoChamado">Motivo do chamado</label>

                <select required name="motivoChamado" id="motivoChamado">

                    <option value="">Selecione um motivo</option>
                    <option value="Cadastro">Cadastro</option>
                    <option value="Produtos">Produtos</option>
                    <option value="Categorias">Categorias</option>
                    <option value="Categorias">Solicitações</option>
                    <option value="Página da Fábrica">Página da Fábrica</option>
                    <option value="Cadastro de Membro">Cadastro de Membro</option>
                    <option value="Outro">Outro</option>

                </select>

            </div>

            <div class="grupo">

                <label for="descricao">Descrição do problema</label>

                <textarea required name="descricao" id="descricao" rows="10"></textarea>

            </div>

            <div class="grupo">

                <button class="btn-chamado" type="submit">Registrar Chamado</button>

            </div>

        </form>

    </div>

</div>

@endsection
