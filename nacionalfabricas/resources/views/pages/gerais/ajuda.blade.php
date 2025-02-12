@extends('layouts.main')
@section('content')

<div class="ajuda">

    <div class="cabecalho">

        <h1>
            Central de Ajuda
        </h1>

        <h2>
            Tutoriais
        </h2>

    </div>

    <div class="tutoriais">

        <ul class="lista-tutoriais">

            <li class="tutorial">

                <h4>Cadastro</h4>

                <span class="active">Realizando seu cadastro</span>

                <span>Como editar seu endereço</span>

                <span>Como editar seu endereço</span>

            </li>

            <li class="tutorial">

                <h4>Produtos</h4>

                <span>Cadastre seu produto</span>

                <span>Editando as informações de um produto</span>

            </li>

            <li class="tutorial">

                <h4>Vitrine</h4>

                <span>Criando sua vitrine</span>

                <span></span>

            </li>

        </ul>

        <div class="tutorial-destaque">

            <iframe src="https://www.youtube.com/embed/kAa7SoFtaJ0?si=yq8vTEIeq8fQUraI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <h3>Primeiro Tutorial</h3>

            <span class="descricao">
                Teste descrição
            </span>

        </div>

    </div>

    <div class="cabecalho">

        <h2>
            Perguntas Frequentes
        </h2>

    </div>

    <div class="faq">

        <div class="bloco-perguntas-frequentes">

            <div class="perguntas-frequentes">

                <div class="respostas">

                    <span class="active">
                        A opção de negociação online na plataforma da Nacional Fábricas permite que compradores e fornecedores se conectem e realizem
                        negócios de maneira mais eficiente e transparente. A plataforma funciona como um mercado online, onde os fornecedores podem criar
                        perfis e listar seus produtos, e os compradores podem buscar e comprar produtos diretamente da fonte. A plataforma oferece ferramentas
                        de comunicação e negociação, como chats online e propostas de preços, que permitem que as partes se comuniquem e cheguem a um acordo sem a
                        necessidade de intermediários.
                    </span>

                    <span>
                        A Nacional Fábricas não recebe comissão sobre as vendas. Todas as negociações são feitas diretamente com o fornecedor,
                        desde a emissão da nota fiscal até os prazos, condições de pagamento e fretes, sem a intervenção da empresa para receber
                        qualquer tipo de comissão.
                    </span>

                    <span>
                        Sim, é possível para uma empresa que não é fabricante se cadastrar na plataforma da Nacional Fábricas.
                        A plataforma é aberta a empresas de diferentes segmentos e tamanhos, e permite que compradores e fornecedores
                        se conectem e realizem negócios de maneira eficiente e transparente. Ao fazer o cadastro na plataforma, é possível
                        buscar produtos de acordo com as necessidades da sua empresa e realizar negociações diretamente com os fabricantes locais.
                        É importante ressaltar que a Nacional Fábricas exige que as empresas tenham CNPJ válido e que sigam as políticas de uso da plataforma.
                    </span>

                    <span>
                        Para ofertar produtos na plataforma da Nacional Fábricas é necessário ser um fabricante.
                        Somente fabricantes podem fazer sua página de perfil e cadastrar produtos na plataforma, garantindo assim
                        visibilidade e exclusividade aos fabricantes locais.
                    </span>

                </div>

                <div class="perguntas">
                    <h4 class="active">Como a opção de negociação online funciona?</h4>
                    <h4>A Nacional Fábricas recebe comissão sobre as vendas?</h4>
                    <h4>Tenho empresa mas não sou fabricante posso me cadastrar?</h4>
                    <h4>Qual é o requisito para ofertar produtos na plataforma da Nacional Fábricas?</h4>
                </div>

            </div>

        </div>

    </div>

</div>

    @push('scripts')

        <script src="{{asset('js/gerais/ajuda.js')}}" type="module"></script>

    @endpush

@endsection
