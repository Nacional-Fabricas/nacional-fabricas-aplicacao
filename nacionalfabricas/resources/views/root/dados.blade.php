@extends('layouts.painel')
@section('content')

<div class="controle-root">

    <div class="lista-ocoes">

        <a class="opcao" href="?pagina=fabricas">

            <img class="icon" src="/icons/factory.svg">

            <h2>
                Fábricas
            </h2>

        </a>

        <a class="opcao" href="?pagina=usuarios">

            <img class="icon" src="/icons/users.svg">

            <h2>

                Usuários

            </h2>

        </a>

        <a class="opcao" href="?pagina=produtos">

            <img class="icon" src="/icons/product-design.svg">

            <h2>

                Produtos

            </h2>

        </a>

        <a class="opcao" href="?pagina=cotacoes">

            <img class="icon" src="/icons/invoice-green.svg">

            <h2>

                Cotações

            </h2>

        </a>

        <a class="opcao" href="?pagina=suporte">

            <img class="icon" src="/icons/question.svg">

            <h2>

                Suporte

            </h2>

        </a>

    </div>

    <div class="dados-root">

        <div class="info">

            @if($pagina == "cotacoes")

                <livewire:root.root-cotacoes/>

            @elseif($pagina == "fabricas")

                <livewire:root.root-fabricas/>

            @elseif($pagina == "produtos")

                <livewire:root.root-produtos/>

            @elseif($pagina == "suporte")

                <livewire:root.root-suporte/>

            @elseif($pagina == "usuarios")

                <livewire:root.root-usuarios/>

            @endif

        </div>

    </div>

</div>


@endsection
