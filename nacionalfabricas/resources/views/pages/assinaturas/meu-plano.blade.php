@extends('layouts.painel')
@section('content')

    <div class="meu-plano">

        <div class="plano">

            <div class="cabecalho">

                <h1>Dados do seu Plano</h1>

            </div>

            <div class="conteudo-plano">

                <div class="linha">

                    <span class="label">Nome do plano</span>

                    <span class="valor">{{$meuPlano -> nome}}</span>

                </div>

                <div class="linha">

                    <span class="label">Valor do plano</span>

                    <span class="valor">{{$meuPlano -> preco}}</span>

                </div>

                <div class="linha">

                    <span class="label">Data de aquisição</span>

                    <span class="valor">{{\Carbon\Carbon::parse($assinatura -> dateCreated)-> format('d/m/Y')}}</span>

                </div>

                <div class="linha">

                    <span class="label">Recorrência</span>

                    <span class="valor">{{ $meuPlano -> recorrencia }}</span>

                </div>

                <div class="linha">

                    <span class="label">Benefícios</span>

                    <span class="valor">{{$meuPlano -> descricao}}</span>

                </div>

            </div>

        </div>

        <div class="lista-faturas">

            <div class="cabecalho">
                <span>Código da Fatura</span>
                <span>Gerado em</span>
                <span>Valor</span>
                <span>Status</span>
            </div>

            @foreach($pagamentos as $pagamento)

                <div class="fatura">

                    <span>{{ $pagamento['invoiceNumber'] }}</span>
                    <span>{{ $pagamento['dateCreated'] }}</span>
                    <span>{{ $pagamento['value'] }}</span>
                    <span>{{ $pagamento['status'] }}</span>

                </div>

            @endforeach

        </div>

    </div>

@endsection
