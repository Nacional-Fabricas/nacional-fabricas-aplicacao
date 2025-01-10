<div>

    <a class="dropdown-item dash" href="{{route('painel')}}">Dashboard</a>
    <a class="dropdown-item noti" href="{{route('notificacoes')}}">

        Notificações

        @if($notificacoes > 0)

            <p class="contador">{{$notificacoes}}</p>

        @endif

    </a>
    <a class="dropdown-item config" href="/user/profile">Configurações da Empresa</a>
    <div class="dropdown-divider"></div>

</div>
