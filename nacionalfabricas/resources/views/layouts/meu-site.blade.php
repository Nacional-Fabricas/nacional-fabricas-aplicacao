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
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/cropperjs@1.5.13/dist/cropper.min.css" rel="stylesheet">

    </head>
    <body>

    <header>

        <livewire:layout.header />

    </header>

    <main class="meu-site">

        <img class="banner" src="{{asset('storage/images/sites/banners/'. $site -> banner)}}">

        <div class="informacao-site">

            <img class="logo" src="{{ asset('storage/images/sites/logos/' . $site -> logo)}}" alt="{{$site -> nome_industria}}">

            <div class="bloco-informacoes">

                <div class="cabecalho">

                    <h1>{{$site -> nome_industria}}</h1>

                    <div class="informacoes-basica">

                        <h3>Informações básicas</h3>

                        <span class="descricao">{{$site -> descricao_industria}}</span>

                    </div>

                </div>

                <button class="ver-informacoes">Ver Informações</button>

                <ul class="informacoes-contato">

                    <img id="close" onclick="verInfo()" src="{{ asset('icons/close.svg')}}" />

                    <li class="informacao-contato">

                        <div class="sobre-info">

                            <img class="icone" src="{{ asset('icons/location.svg')}}" alt="">
                            <h4>Endereço</h4>

                        </div>

                        <div class="conteudo-destaque">

                            <span class="valor-destaque">

                                {{$endereco -> endereco}}, {{$endereco -> bairro}},{{$endereco -> numero}}, {{$endereco -> cidade}} - {{$endereco -> estado}}

                            </span>

                        </div>

                    </li>

                    <li class="informacao-contato">

                        <div class="sobre-info">

                            <img src="{{ asset('icons/call.svg')}}" alt="">
                            <h4>Contato</h4>

                        </div>

                        <div class="conteudo-destaque">

                        <span class="valor-destaque">

                            Email: {{$site -> email}}

                        </span>

                            <span class="valor-destaque">

                            Telefone: {{$site -> telefone}}

                        </span>

                        </div>

                    </li>

                    <li class="informacao-contato">

                        <div class="sobre-info">

                            <img src="{{ asset('icons/stopwatch.svg')}}" alt="">
                            <h4>Atendimento</h4>
                        </div>

                        <div class="conteudo-destaque">

                        <span class="valor-destaque">

                            Horário de atendimento:

                            <a class="ver-horarios">Ver Horários</a>

                            @foreach($atendimento as $dia => $info)

                                @if(isset($info['ativo']) && $info['ativo'] == 1)

                                    @if($dataHoje == ucfirst($dia) && $info['entrada'] <= $horaAtual && $info['saida'] >= $horaAtual)

                                        Aberto

                                    @else

                                        Fechado

                                    @endif

                                    <p>{{ ucfirst($dia) }}: {{ $info['entrada'] ?? 'N/A' }} - {{ $info['saida'] ?? 'N/A' }}</p>

                                @else

                                @endif
                            @endforeach

                        </span>

                        </div>

                    </li>

                </ul>

            </div>

        </div>

        @if(session('msg'))
            <p class="msg">{{ session('msg') }}</p>
        @elseif(session('sucesso'))
            <p class="sucesso">{{ session('sucesso') }}</p>
        @elseif(session('erro'))
            <p class="erro">{{ session('erro') }}</p>
        @endif

        @yield('content')

    </main>

    <livewire:layout.footer />

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    {{-- Scripts das páginas --}}
    <script src="{{ asset('js/index.js') }}" type="module"></script>
    @stack('scripts')

    </body>
</html>
