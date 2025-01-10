@extends('layouts.main')
@section('content')

<div class="verificar-email">

    <div class="conteudo">

        <div class="texto-principal text-sm text-gray-600">
            {{ __('Antes de continuar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, teremos prazer em lhe enviar outro.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="texto-secundario font-medium text-sm text-green-600">
                {{ __('Um novo link de verificação foi enviado para o endereço de e-mail que você forneceu nas configurações do seu perfil.') }}
            </div>
        @endif

        <div class="bloco-acoes">
            <form method="POST" class="formulario" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit">
                        {{ __('Reenviar email de verificação') }}
                    </x-button>
                </div>
            </form>

            <div class="acoes-usuario">
                <a
                    href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    {{ __('Editar Perfil') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ms-2">
                        {{ __('Sair') }}
                    </button>
                </form>
            </div>
        </div>

    </div>

</div>

@endsection
