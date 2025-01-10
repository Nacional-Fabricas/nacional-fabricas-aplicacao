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
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

    <header>

        <livewire:layout.menufabricas />

    </header>

        <livewire:registro />

        <main>

            <div class="meuSite">

                <img class="banner" src="{{asset('/images/sites/backgrounds/'. $site -> banner)}}">

                <div class="container">

                    <div class="headerSite">

                        <div class="menu">

                            <nav class="navbar navbar-expand-lg">

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <p>Menu - {{$site -> nome_industria }}</p>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

                                    <ul class="navbar-nav mr-auto">

                                        <li class="nav-item active">

                                            <a class="nav-link" href="{{ route('site_industria', [ 'site_id' => $site -> id_conta, 'site_slug' => $site -> nome_industria])}}">Home <span class="sr-only">(current)</span></a>

                                        </li>

                                        @foreach ($categorias as $categoria)

                                        <li class="nav-item">

                                            <a class="nav-link" href="{{ route('busca_site', ['site_id' => $site->id_conta, 'industria_nome' => $site->nome_industria, '?busca=' => $categoria->nome]) }}">{{$categoria -> nome}}</a>

                                        </li>

                                        @endforeach

                                        @foreach($categoriasPai as $categoriaPai)

                                            <li class="nav-item dropdown">

                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                    {{$categoriaPai -> nome}}

                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                                    @foreach($categoriasFilho as $categoriaFilho)


                                                        @if($categoriaFilho -> categoria_pai == $categoriaPai -> nome  )

                                                            <form action="{{route('busca_site', [ 'site_id' => $site -> id_conta , 'industria_nome' => $site -> nome_industria] ) }}" method="get">

                                                                <input class="dropdown-item" name="busca" value="{{$categoriaFilho -> nome}}" type="submit" placeholder="O que está procurando?">

                                                            </form>

                                                        @endif

                                                    @endforeach

                                                </div>

                                            </li>

                                        @endforeach

                                    </ul>

                                  <form class="form-inline my-2 my-lg-0" method="get" action="{{route('busca_site', [ 'site_id' => $site -> id_conta , 'industria_nome' => $site -> nome_industria] ) }}">

                                    <input class="form-control mr-sm-2" name="busca" type="search" placeholder="Pesquisar" aria-label="Search">

                                  </form>

                                </div>

                              </nav>

                        </div>

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

            </div>

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
