<nav class="menu">

    <a class="logo" href="{{route('home')}}">
        <img src="{{asset('images/logo.svg')}}" width="180" alt="">
    </a>

    <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>

    <ul class="nav-list">

        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('busca_geral')}}">Indústrias Parceiras</a></li>
        {{--
        <li><a href="{{route('funcionalidades')}}">Funcionalidades</a></li>
        <li><a href="{{route('planos')}}">Planos</a></li>
        <li><a href="{{route('contato')}}">Contato</a></li>
        --}}
        <li><a href="{{route('ajuda')}}">Ajuda</a></li>


        @auth()
            <li class="dropdown">
                <a href="#" class="dropbtn">Olá, {{$usuario -> name}}</a>
                <div class="dropdown-content">
                    <a href="{{route('painel')}}">Dashboard</a>
                    <a href="#">Notificações</a>
                    <a href="#">Minha Fábrica</a>
                    <form action="/logout" method="POST">
                        @csrf
                        <a class="dropdown-item out"
                           href="/logout"
                           onclick="event.preventDefault();
                            this.closest('form').submit();"
                        >Sair</a>
                    </form>
                </div>
            </li>
        @elseguest()
            <li><a href="{{route('login')}}" class="btn-entrar">Entrar</a></li>
        @endguest

    </ul>

</nav>
