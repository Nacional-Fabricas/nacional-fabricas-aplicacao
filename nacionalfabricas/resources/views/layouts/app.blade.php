<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Nacional Fábricas é uma plataforma inovadora desenvolvida em Laravel, projetada para simplificar e otimizar as negociações entre fábricas nacionais e outras empresas. Com um modelo de negócios B2F (Business-to-Factory), o aplicativo serve como um espaço centralizado onde fábricas podem anunciar e exibir seus produtos, enquanto outras empresas têm a oportunidade de solicitar cotações para esses produtos.">
        <meta name="keywords" content="fábricas, fábricas nacionais, produtos nacionais, negociações B2F, negociações entre fábricas, cotações de produtos, anúncio de produtos, plataforma de negociação, indústria nacional, produtos fabricados localmente, nacional fábricas">


        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="font-sans antialiased">

    <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($headera))

                <header class="bg-white shadow">

                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                        {{ $header }}

                    </div>

                </header>

            @endif

            <livewire:sidebar/>

            <main>
                {{ $slot }}
            </main>

        </div>

        @stack('modals')

    @livewireScripts

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>

    {{-- Scripts das páginas --}}
    <script src="{{ asset('js/index.js') }}" type="module"></script>
    @stack('scripts')

    </body>
</html>
