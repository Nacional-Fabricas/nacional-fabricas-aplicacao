@extends('layouts.contact')
@section('content')

<div class="contato">

    <div class="conteudo">

        <h1>Entre em contato <span class="verde">conosco!</span></h1>

        <span class="descricao">Ficou com alguma dúvida? <strong>Mande uma mensagem para nós ;)</strong></span>

        <img src="{{ asset('images/contact-us.png')}}" alt="">

    </div>

    <form action="{{ route('formulario_contato') }}" method="post" class="formulario-contato">
        @csrf

        <div class="grupo">

            <div class="linha">
                <input type="text" placeholder="Nome" name="nome">
            </div>

            <div class="linha">
                <input type="text" placeholder="Email" name="email">
            </div>

            <div class="linha">
                <input type="text" placeholder="Telefone" id="telefone" name="telefone">
            </div>

            <div class="linha">
                <textarea placeholder="Mensagem" name="mensagem"></textarea>
            </div>

        </div>

        <button type="submit">Enviar mensagem</button>

    </form>

</div>

@endsection

