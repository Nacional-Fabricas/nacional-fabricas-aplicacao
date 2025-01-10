@extends('layouts.access')
@section('content')

<div class="esqueceu-senha">

    <div class="conteudo-esqueceu">

        <x-validation-errors class="error" />

        <form method="POST" action="{{ route('password.update') }}" class="form-esqueceu">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="bloco">

                <h1>Escolha sua nova senha.</h1>

                <div class="texto-info">

                    Agora é só informar sua nova senha e confirmar para voltar a utilizar nosso sistema.

                </div>

            </div>

            <div class="bloco">
                <label for="email"> Email </label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="bloco">
                <label for="password"> Senha </label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="bloco">
                <label for="password_confirmation">Confirmar Senha</label>
                <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="btn-esqueci">
                    Resetar Senha
                </button>
            </div>
        </form>

    </div>

    <div class="col-6 login-background"></div>

</div>

@endsection
