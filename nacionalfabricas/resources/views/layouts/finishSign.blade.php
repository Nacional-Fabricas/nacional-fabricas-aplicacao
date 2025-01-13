<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Nacional Fábricas é uma plataforma inovadora desenvolvida em Laravel, projetada para simplificar e otimizar as negociações entre fábricas nacionais e outras empresas. Com um modelo de negócios B2F (Business-to-Factory), o aplicativo serve como um espaço centralizado onde fábricas podem anunciar e exibir seus produtos, enquanto outras empresas têm a oportunidade de solicitar cotações para esses produtos.">
        <meta name="keywords" content="fábricas, fábricas nacionais, produtos nacionais, negociações B2F, negociações entre fábricas, cotações de produtos, anúncio de produtos, plataforma de negociação, indústria nacional, produtos fabricados localmente, nacional fábricas">

        <title>Nacional Fábricas</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.css" />

    </head>
    <body class="finalizar-cadastro-body">
        <header>

            <div class="finalizar-cadastro">

                <a href="/"><img src="{{asset('/images/logo.svg')}}" width="180" alt=""></a>

                <span class="welcome">Olá,<span class="name">{{$usuario -> name}}</span></span>

            </div>
        </header>
        <main>

            @if(session('msg'))

                <p class="msg">{{session('msg')}}</p>

            @elseif(session('sucesso'))

                <p class="msg">{{session('sucesso')}}</p>

            @elseif(session('erro'))

                <p class="error">{{session('erro')}}</p>

            @endif

            @yield('content')
        </main>

        <livewire:layout.footer />

        {{-- Scripts --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

        {{-- Scripts das páginas --}}
        <script src="{{ asset('js/index.js') }}" type="module"></script>
        <script src="{{ asset('js/cadastro/cadastro.js') }}" type="module"></script>
        @stack('scripts')

    </body>
</html>
