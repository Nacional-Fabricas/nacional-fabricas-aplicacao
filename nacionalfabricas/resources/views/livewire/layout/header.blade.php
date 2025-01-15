<div>

    {{--

    <nav class="menu-padrao navbar navbar-expand-lg navbar-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <a href="{{route('home')}}" class="hiddenMobile"><img src="{{asset('images/logo.svg')}}" width="180" alt=""></a>

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('funcionalidades')}}">Funcionalidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('planos')}}">Planos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contato')}}">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('ajuda')}}">Ajuda</a>
                </li>

            </ul>

        </div>

        @auth

            <div class="dropdown d-flex align-items-center">

                <a class="orcamento" href="{{route('cotacoes')}}"><img height="30" src="{{asset('icons/cart.svg')}}">

                    @if(\Cart::getContent()->count() > 0 )

                        <p class="countOrc">{{\Cart::getContent()->count()}}</p>

                    @endif

                </a>

                <button class="btn-drop" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <div class="values">
                        <span class="name">{{ Auth::user()-> name}}</span>
                        <span>{{Auth::user() -> email}}</span>
                    </div>
                    <img class="icon" src="{{asset('icons/chevron-down.svg')}}" alt="">
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                    @if($cadastro)

                        <livewire:layout.acesso-rapido/>

                    @else

                        <a class="dropdown-item dash" href="{{route('finalizar_cadastro')}}">Finalizar cadastro</a>

                    @endif

                    <form action="/logout'" method="POST">
                        @csrf
                        <a class="dropdown-item out"
                           href="/logout"
                           onclick="event.preventDefault();
                            this.closest('form').submit();"
                        >Sair da conta</a>
                    </form>

                </div>

            </div>

        @elseguest

            <ul class="d-flex noLogged">

                <li class="nav-item hiddenMobile">

                    <a class="btnRegister" onclick="registrar()">Experimentar Grátis</a>

                </li>

                <li class="nav-item hidden-desk">

                    <a href="{{route('home')}}" ><img src="{{asset('images/logo.svg')}}" width="180" alt=""></a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Entrar</a>
                </li>
                <li class="nav-item hiddenMobile">
                    <a class="orcamento" href="{{route('cotacoes')}}"><img height="30" src="{{asset('icons/cart.svg')}}"></a>
                </li>

            </ul>

        @endauth

    </nav>

    --}}

    <nav class="menu">

        <a class="logo" href="/"><img src="{{asset('images/logo.svg')}}" width="180" alt=""></a>

        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

        <ul class="nav-list">
            <li><a href="#">Início</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Projetos</a></li>
            <li><a href="#">Contato</a></li>
        </ul>

    </nav>

</div>
