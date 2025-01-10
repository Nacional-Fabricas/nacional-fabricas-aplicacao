@extends('layouts.main')
@section('content')

<div class="funcionalidades">

    <div class="explicacao">

        <div class="conteudo">

            <div class="cabecalho">

                <h1><span class="roxo">Conectamos</span>
                    clientes com as fábricas nacionais!
                </h1>

            </div>

            <div class="texto-explicacao">

                <p>
                    Aqui na Nacional Fábricas, acreditamos no potencial dos fornecedores locais e estamos comprometidos
                    em ajudar a impulsionar a economia brasileira. Nossa plataforma oferece aos clientes uma maneira fácil
                    e conveniente de acessar produtos de alta qualidade diretamente dos fabricantes locais, eliminando intermediários
                    e reduzindo custos.
                </p>

                <p>
                    Além disso, oferecemos a opção de negociação online, para garantir que sua experiência de compra seja simples e satisfatória.
                    Com a Nacional Fábricas, você pode ter certeza de que está fazendo negócio com fornecedores confiáveis e apoiando a indústria
                    de transformação brasileira.
                </p>

            </div>

        </div>

        <img src="{{ asset('images/features.png')}}" alt="">

    </div>

    <div class="bloco-ajuda">

        <div class="cabecalho">

            <h1>Veja como a <span class="verde">Nacional Fábricas</span> te ajuda!</h1>

        </div>

        <ul class="cards">

            <li class="card">

                <img src="{{ asset('icons/agile-transition.svg')}}" alt="">

                <h2>Mais agilidade</h2>

                <span>Nosso sistema de busca e negociação online proporciona a
                    agilidade necessária para encontrar o melhor parceiro nacional
                    para o seu negócio.
                </span>

            </li>

            <li class="card">

                <img src="{{ asset('icons/puzzle.svg')}}" alt="">

                <h2>Mais interações</h2>

                <span>
                    Faça cotações com diversas fábricas de maneira rápida. Além disso,
                    oferecemos um sistema de chat dedicado para cada
                    cotação, permitindo que você se comunique facilmente com as empresas.
                </span>

            </li>

            <li class="card">

                <img src="{{ asset('icons/internet-cloud.svg')}}" alt="">

                <h2>Visibilidade</h2>

                <span>
                    Incremente seu negócio cadastrando sua fábrica em nossa plataforma.
                    Com nossa ferramenta de criação de sites fácil de usar, você pode criar
                    rapidamente uma vitrine online para mostrar seus produtos e serviços de transformação.
                </span>

            </li>

        </ul>

    </div>

</div>

<div class="rodape-funcionalidades">

    <div class="informacao">

        <h1>Bora testar? <br> Experimente, <span class="branco">é grátis!</span></h1>

    </div>

    <div class="informacao">

        <a onclick="registrar()">Experimente grátis</a>

    </div>

</div>

@endsection
