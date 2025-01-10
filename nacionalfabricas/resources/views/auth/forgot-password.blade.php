@extends('layouts.access')
@section('content')

<div class="esqueceu-senha">

    <div class="conteudo-esqueceu">

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="error" />

        <form method="POST" action="{{ route('password.email') }}" class="form-esqueceu">
            @csrf

            <div class="bloco">

                <h1>Esqueceu sua senha? <br> Sem problemas.</h1>

                <div class="texto-info">

                    Basta nos informar seu endereço de e-mail e enviaremos por e-mail um link de redefinição de senha que permitirá que você escolha uma nova.

                </div>

            </div>

            <div class="bloco">
                <label for="email"> Email </label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="btn-esqueci">
                    Enviar link para nova senha
                </button>
            </div>
        </form>

    </div>

    <div class="col-6 login-background"></div>

</div>

@endsection
