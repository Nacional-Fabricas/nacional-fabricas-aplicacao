@extends('layouts.main')
@section('content')

<div class="ajuda">

    <div class="cabecalho">

        <h1>
            Ajuda
        </h1>

    </div>

    <div class="conteudo">

        <div class="info-ajuda">
            <h1>Olá, como podemos ajudar?</h1>

            <img src="{{asset('images/help-faq.png')}}" alt="">
        </div>

        <div class="questoes">

            <h1>Perguntas frequentes sobre o <strong>Nacional Fábricas!</strong></h1>

            <div class="accordion accordion-flush lista" id="accordionFlushExample">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Como a opção de negociação online funciona ?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        A opção de negociação online na plataforma da Nacional Fábricas permite que compradores e fornecedores se conectem e realizem
                        negócios de maneira mais eficiente e transparente. A plataforma funciona como um mercado online, onde os fornecedores podem criar
                        perfis e listar seus produtos, e os compradores podem buscar e comprar produtos diretamente da fonte. A plataforma oferece ferramentas
                        de comunicação e negociação, como chats online e propostas de preços, que permitem que as partes se comuniquem e cheguem a um acordo sem a
                        necessidade de intermediários.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        A Nacional Fábricas recebe comissão sobre as vendas ?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        A Nacional Fábricas não recebe comissão sobre as vendas. Todas as negociações são feitas diretamente com o fornecedor,
                        desde a emissão da nota fiscal até os prazos, condições de pagamento e fretes, sem a intervenção da empresa para receber
                        qualquer tipo de comissão.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Tenho empresa mas não sou fabricante posso me cadastrar ?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Sim, é possível para uma empresa que não é fabricante se cadastrar na plataforma da Nacional Fábricas.
                        A plataforma é aberta a empresas de diferentes segmentos e tamanhos, e permite que compradores e fornecedores
                        se conectem e realizem negócios de maneira eficiente e transparente. Ao fazer o cadastro na plataforma, é possível
                        buscar produtos de acordo com as necessidades da sua empresa e realizar negociações diretamente com os fabricantes locais.
                        É importante ressaltar que a Nacional Fábricas exige que as empresas tenham CNPJ válido e que sigam as políticas de uso da plataforma.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Qual é o requisito para ofertar produtos na plataforma da Nacional Fábricas?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        Para ofertar produtos na plataforma da Nacional Fábricas é necessário ser um fabricante.
                        Somente fabricantes podem fazer sua página de perfil e cadastrar produtos na plataforma, garantindo assim
                        visibilidade e exclusividade aos fabricantes locais
                      </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection
