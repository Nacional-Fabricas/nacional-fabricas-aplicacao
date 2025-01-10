@extends('layouts.access')
@section('content')

<x-validation-errors class="error" />

<div class="login">

    @if (session('status'))
        <div class="error">
            {{ session('status') }}
        </div>
    @endif

    <div class="login-wraper col-6 col-sm-6 login-content">

        <form class="formulario-login" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-header">
                <h1>Bem-vindo(a), novamente!</h1>
                <span>Por favor, preencha os campos abaixo.</span>
            </div>

            <div class="grupo">
                <label for="email" >E-mail: </label>
                <input id="email" class="block mt-1 w-full" placeholder="Digite seu E-mail" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="grupo">
                <label for="password" >Senha: </label>
                <input id="password" class="block mt-1 w-full" placeholder="Digite sua Senha" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="grupo">

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        Esqueceu a Senha?
                    </a>
                @endif

            </div>

            <div class="rodape-formulario">

                <button class="botao-login">
                    Entrar
                </button>

                <span class="registrar"><strong>Não</strong> tem uma conta? <a onclick="registrar()">Crie uma aqui!</a></span>

            </div>

        </form>

    </div>

    <div class="col-6 login-background"></div>

</div>


@endsection
