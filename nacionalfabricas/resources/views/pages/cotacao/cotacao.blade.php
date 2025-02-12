@extends('layouts.painel')
@section('content')

<div class="cotacao">

    <div class="cabecalho">

        @if($usuarioId == $cotacao -> id_remetente )

        <h1>Área de compras / Minhas Compras / <strong class="verde">Orçamento</strong></h1>

        <h2><a href="{{route('minhas_compras')}}"> <img src="{{ asset('icons/chevron-left.svg')}}" alt=""> </a>Cotação<strong>#{{$cotacao -> id}}</strong>- Criado {{ Carbon\Carbon::parse($cotacao -> created_at)->format('d/m/Y - H:i') }} <strong class="verde">(Atualizado {{ Carbon\Carbon::parse($cotacao -> updated_at)->format('d/m/Y - H:i')  }})</strong></h2>

        @else

        <h1>Área de vendas / Lista de Orçamentos / <strong class="verde">Orçamento</strong></h1>

        <h2> <a href="{{route('lista_cotacoes'}}"> <img src="{{ asset('icons/chevron-left.svg')}}" alt=""> </a>Cotação<strong>#{{$cotacao -> id}}</strong>- Criado {{Carbon\Carbon::parse($cotacao -> created_at)->format('d/m/Y - H:i') }} <strong class="verde">(Atualizado {{ Carbon\Carbon::parse($cotacao -> updated_at)->format('d/m/Y - H:i')  }})</strong></h2>

        @endif

    </div>

    <div class="conteudo-cotacao">

        <div class="infoormacao-fornecedor">

            <div class="linha">

                <span>Situação do pedido:

                    @if($usuarioId == $cotacao -> id_remetente )

                        {{-- Visualização da Cotação de quem solicitou o orçamento --}}

                        @if ( $cotacao -> status_remetente === 'Aguardando')

                        <div class="status azul">  <strong>{{ $cotacao -> status_remetente}}</strong></div><strong><p class="fonteazul">Proposta em</p> análise</strong></span>

                        @elseif ( $cotacao -> status_remetente === 'Cancelado')

                        <div class="status vermelho">  <strong>{{ $cotacao -> status_remetente}}</strong></div><strong><p class="fontevermelho">O orçamento foi</p> cancelado</strong></span>

                        @elseif ( $cotacao -> status_remetente === 'Finalizado')

                        <div class="status cinza">  <strong>{{ $cotacao -> status_remetente}}</strong></div><strong><p class="fontecinza">Este orçamento já foi finalizado.</p></strong></span>

                        @elseif ( $cotacao -> status_remetente === 'Aprovado')

                        <div class="status verdeStatus">  <strong>{{ $cotacao -> status_remetente}}</strong></div><strong><p class="fonteverdeStatus">Parabéns a! A proposta foi</p> aprovada.</strong></span>


                        @elseif ( $cotacao -> status_remetente === 'Atualizado')

                        <div class="status amarelo">  <strong>{{ $cotacao -> status_remetente}}</strong></div> <strong><p class="fonteamarelo">Você recebeu uma nova proposta!</p></strong></span>

                        @elseif ( $cotacao -> status_remetente === 'Nova Proposta')

                        <div class="status roxo">  <strong>{{ $cotacao -> status_remetente}}</strong></div><strong><div class="fonteroxo"><p> Você recebeu uma </p><br> <p>O fornecedor está aguardando seu retorno.</p></div> nova proposta!</strong></span>

                        @endif

                    @else

                        {{-- Visualização da Cotação de quem recebeu o orçamento --}}

                        @if ( $cotacao -> status_receptor === 'Aguardando')

                        <div class="status azul">  <strong>{{ $cotacao -> status_receptor}}</strong></div><strong><p class="fonteazul">Proposta em</p> análise</strong></span>

                        @elseif ( $cotacao -> status_receptor === 'Cancelado')

                        <div class="status vermelho">  <strong>{{ $cotacao -> status_receptor}}</strong></div><strong><p class="fontevermelho">O orçamento foi</p> cancelado</strong></span>

                        @elseif ( $cotacao -> status_receptor === 'Finalizado')

                        <div class="status cinza">  <strong>{{ $cotacao -> status_remetente}}</strong></div><strong><p class="fontecinza">Este orçamento já foi finalizado.</p></strong></span>

                        @elseif ( $cotacao -> status_receptor === 'Aprovado')

                        <div class="status verdeStatus">  <strong>{{ $cotacao -> status_receptor}}</strong></div><strong><p class="fonteverdeStatus">Parabéns a! A proposta foi</p> aprovada.</strong></span>


                        @elseif ( $cotacao -> status_receptor === 'Atualizado')

                        <div class="status amarelo">  <strong>{{ $cotacao -> status_receptor}}</strong></div> <strong><p class="fonteamarelo">Você recebeu uma nova proposta!</p></strong></span>

                        @elseif ( $cotacao -> status_receptor === 'Nova Proposta')

                        <div class="status roxo">  <strong>{{ $cotacao -> status_receptor}}</strong></div><strong><div class="fonteroxo"><p> Você recebeu uma</p></div> nova proposta!<p class="fonteroxo">O fornecedor está aguardando seu retorno.</p></strong></span>

                        @endif

                @endif

                @if($cotacao -> status_receptor == 'Aguardando' || $cotacao -> status_remetente == 'Aguardando' )

                    <form action="{{route('cancelar_cotacao')}}" method="POST" class="formulario-cancelar">
                        @csrf
                        @method('PUT')

                        <button>Cancelar Orçamento</button>

                    </form>

                @endif

            </div>

            <div class="linha">

                <span>Razão Social: <div class="informacao"><strong>{{$endereco -> nome_empresa}}</strong></div> </span>

            </div>

            <div class="linha">

                <span>CNPJ: <div class="informacao" ><strong>{{ preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $endereco->cnpj) }} </strong></div> </span>

                <span>nsc. Est.: <div class="informacao"><strong>{{$endereco -> registro_estadual}}</strong></div> </span>

            </div>

            <div class="linha">

                <span>Telefone celular: <div class="informacao"><strong> {{ preg_replace('/(\d{2})(\d{5})(\d{4})/','($1) $2-$3', $endereco -> celular_contato)}}</strong></div> </span>

                <span>Telefone residencial: <div class="informacao"><strong> {{ preg_replace('/(\d{2})(\d{4})(\d{4})/','($1) $2-$3', $endereco -> telefone_contato)}}</strong></div> </span>

                <span>Telefone comercial: <div class="informacao"><strong> {{ preg_replace('/(\d{2})(\d{5})(\d{4})/','($1) $2-$3', $endereco -> celular_contato)}}</strong></div> </span>

            </div>

            <div class="linha">

                <span>Endereço de entrega e pagamento:

                    <div class="informacao">

                        <strong>

                            {{$endereco -> endereco}}, {{$endereco -> num}} - {{$endereco -> complemento}} {{$endereco -> bairro}} -  {{$endereco -> cidade}} /  {{$endereco -> estado}}

                        </strong>

                    </div>

                </span>

            </div>

        </div>

        <form action="{{route('atualizar_cotacao')}}" id="atualizar_orcamento" method="POST" enctype="multipart/form-data" class="formulario-atualizar-orcamento">
            @csrf
            @method('PUT')

            <div class="faixa">
                <h3>Pedido</h3>
            </div>

            <div class="produtos-pedido">

                @foreach($produtosCotacao as $produtoCotacao)

                <div class="info-produto">

                    <img src="{{ asset('icons/close.svg')}}" alt="">

                    <div class="conteudo">

                        @foreach($produtos as $produto)

                        @if($produtoCotacao -> id_produto === $produto -> id)


                        <img class="thumb" src="{{ asset('images/thumbnails/'. $produto -> produto_thumbnail)}}" alt="">

                        <div class="textos">

                            <h3>{{$produto -> produto_nome}}</h3>

                            <div class="codigos">

                                <div class="grupo">

                                    <span class="label"><strong>SKU</strong></span>
                                    <span class="informacao">{{$produto -> sku}}</span>

                                </div>

                                <div class="grupo">

                                    <span class="label"><strong>EAN</strong></span>
                                    <span class="informacao">{{$produto -> ean}}</span>

                                </div>

                            </div>

                        </div>

                        @endif

                        @endforeach

                        <div class="campos">

                            <input type="hidden" name="cotacao_id_produtos[]" value="{{ $produtoCotacao ->id }}">

                            <div class="grupo">

                                <label for="quantidade">Quantidade</label>

                                <input name="quantidade[]" type="number" value="{{$produtoCotacao -> quantidade}}" min="1">

                            </div>

                            <div class="grupo">

                                <label for="preco">Preço (R$)</label>

                                <input type="number" step="any" name="preco[]" value="{{$produtoCotacao -> preco}}" min="1">

                            </div>

                            <div class="grupo">

                                <label for="icms_st">ICMS ST (%)</label>

                                <input type="number" step="any" name="icms_st[]"  value="{{$produtoCotacao -> icms_st}}" min="0">

                            </div>

                            <div class="grupo">

                                <label for="icms">ICMS (%)</label>

                                <input type="number" step="any" name="icms[]" value="{{$produtoCotacao -> icms}}" min="0">

                            </div>

                            <div class="grupo">

                                <label for="ipi">IPI (%)</label>

                                <input type="number" step="any" name="ipi[]" value="{{$produtoCotacao -> ipi}}" min="0">

                            </div>

                            <div class="grupo">

                                <label for="total">Total Líquido.</label>

                                <input type="number" step="any" name="total[]" value="{{$produtoCotacao -> total}}" min="0">

                            </div>
                            <div class="grupo">

                                <label for="total_imp">Total c/ imp.</label>

                                <input type="number" step="any" name="total_imp[]" value="{{$produtoCotacao -> total_imp}}" min="0">

                            </div>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

            <div class="faixa">
                <h3>Pagamento</h3>
            </div>

            <div class="pagamento">

                <div class="grupo">

                    <label for="condicoes">Condições</label>

                    <input type="text" name="condicoes" id="condicoes" placeholder="Informe uma condição de pagamento. Ex: 1x - Sem Juros" value="{{ $cotacao -> condicoes}}">

                </div>

                <div class="grupo">

                    <label for="forma_pagamento">Forma</label>

                    <select name="forma_pagamento" id="forma_pagamento">

                        @if($cotacao -> forma_pagamento != null)

                            <option value="{{ $cotacao -> forma_pagamento}}" >{{ $cotacao -> forma_pagamento}}</option>

                        @else

                            <option value="" >Selecione uma forma de pagamento</option>

                        @endif
                        <option value="Boleto">Boleto</option>
                        <option value="PIX">PIX</option>
                        <option value="Transferência bancária (TED ou DOC)">Transferência bancária (TED ou DOC)</option>
                        <option value="Carnê">Carnê</option>
                        <option value="Dinheiro">Dinheiro</option>
                        <option value="Cartão de crédito">Cartão de crédito</option>
                        <option value="Cartão de débito">Cartão de débito</option>

                    </select>

                </div>

            </div>

            <div class="faixa">

                <h3>Entrega</h3>

            </div>

            <div class="entrega">

                <div class="grupo">

                    <label for="tipo_frete">Tipo do frete</label>

                    <select name="tipo_frete" id="tipo_frete">

                        @if($cotacao -> tipo_frete != null)

                            <option value="{{ $cotacao -> tipo_frete}}" >{{ $cotacao -> tipo_frete}}</option>

                        @else

                            <option value="" >Selecione um tipo de frete</option>

                        @endif

                        <option value="SEDEX">SEDEX</option>
                        <option value="PAC">PAC</option>
                        <option value="Entregar por conta do comprador">Entregar por conta do comprador</option>
                        <option value="Entregar por conta do fornecedor">Entregar por conta do fornecedor</option>

                    </select>

                </div>

                <div class="grupo">

                    <label for="valor_entrega">Total (R$)</label>

                    <input name="valor_entrega" step="any" value="{{ $cotacao -> valor_entrega}}" type="number" min="0">

                </div>

                <div class="grupo">

                    <label for="prazo_entrega">Prazo de entrega (dia)</label>

                    <input name="prazo_entrega" value="{{ $cotacao -> prazo_entrega}}" type="number" min="0">

                </div>

            </div>

            <div class="faixa">
                <h3>Resumo do pedido</h3>
            </div>

            <div class="pedido-check">

                <div class="quantidade">

                    <h4>Produtos selecionados:</h4>
                    <span class="qnt">{{count($produtosCotacao)}} produtos selecionados</span>

                </div>

                <div class="precos">

                    <div class="grupo">
                        <span class="label">Subtotal:</span>
                        <span class="value verdeValue">R$ {{number_format($cotacao -> subtotal, 2 , ',', '.')}}</span>
                    </div>

                    <div class="grupo">
                        <span class="label">Frete:</span>
                        <span class="informacao">R$ {{number_format($cotacao -> valor_entrega, 2 , ',', '.')}}</span>
                    </div>

                </div>

                <div class="total">

                    <div class="grupo">

                        <span class="label">Total do pedido:</span>
                        <span class="informacao">R$ {{number_format($cotacao -> valor , 2 , ',', '.')}}</span>

                    </div>

                </div>

            </div>

            <div class="faixa">
                <h3>Observação</h3>
            </div>

            <div class="observacoes">


                <textarea name="novaObs" id="" cols="30" rows="10"></textarea>

                @if($usuarioId == $cotacao -> id_receptor)

                <input type="hidden" name="id_receptor" value="{{$cotacao -> id_remetente }}">

                @else

                <input type="hidden" name="id_receptor" value="{{$cotacao -> id_receptor }}">

                @endif

                <input type="hidden" name="id" value="{{$cotacao -> id }}">

                <input type="hidden" name="id_produto" value="{{$produtoCotacao -> id }}">

                @if (count($obsCotacoes) > 0)

                <div class="todas-obs">

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLabel">

                                        @foreach ($usuarios as $usuario)

                                        @if ($primeiraObs -> id_remetente == $usuario -> id)

                                            Histórico de Observações - {{$usuario -> name}}

                                        @endif

                                        @endforeach

                                    </h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>

                                </div>

                                <ul class="lista-todas">

                                    @foreach ($obsCotacoes -> take(4) as $obs)

                                        @if( $usuarioId == $obs -> id_remetente )

                                            <li class="obs envio">

                                        @else

                                            <li class="obs receber">

                                        @endif

                                                <span class="status"><strong>"{{$obs -> status}}"</strong></span>

                                                <span class="texto">{{$obs -> observacao}}</span>

                                                <span class="data">{{ Carbon\Carbon::parse($obs -> created_at)->format('d/m/Y - H:i') }}</span>

                                            </li>

                                    @endforeach

                               </ul>

                            </div>

                        </div>

                    </div>

                </div>

                @endif

            </div>

        </form>

        <div class="botoes">

            @if (count($obsCotacoes) > 0)

            <button type="button" class="btnSimples" data-toggle="modal" data-target=".bd-example-modal-lg">Histórico de Observações</button>

            @endif

            <div class="acoes">

            @if($usuarioId == $cotacao -> id_remetente )

                @if( $cotacao -> status_remetente == 'Atualizado' || $cotacao -> status_remetente == 'Nova Proposta'  )

                    <form action="{{route('aprovar_cotacao')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="cotacao_id" id="cotacao_id" value="{{$cotacao -> id}}">

                        <button class="btn-form" type="submit" >Aprovar Orçamento</button>

                    </form>

                    <button class="atualizar-proposta" type="submit" form="atualizar_orcamento" value="submit">Enviar Proposta</button>

                    @elseif( $cotacao -> status_remetente == 'Aprovado' || $cotacao -> status_receptor == 'Aprovado'  )

                        <form action="{{route('finalizar_cotacao')}}" method="POST" enctype="multipart/form-data" class="formulario-finalizar-orcamento">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="cotacao_id" id="cotacao_id" value="{{$cotacao -> id}}">

                            <button class="btn-form" type="submit" >Finalizar Orçamento</button>

                        </form>

                    @endif

            @else

                @if( $cotacao -> status_receptor == 'Nova Proposta' )

                        <button class="atualizar-proposta" type="submit" form="atualizar_orcamento" value="submit">Enviar Proposta</button>

                @elseif( $cotacao -> status_receptor == 'Atualizado' )

                    <form action="{{route('aprovar_cotacao')}}" method="POST" enctype="multipart/form-data" class="formulario-aprovar-orcamento">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="cotacao_id" id="cotacao_id" value="{{$cotacao -> id}}">

                        <button class="btn-form" type="submit" >Aprovar Orçamento</button>

                    </form>

                    <button class="atualizar-proposta" type="submit" form="atualizar_orcamento" value="submit">Enviar Proposta</button>

                @elseif( $cotacao -> status_remetente == 'Aprovado' || $cotacao -> status_receptor == 'Aprovado'  )

                        <form action="{{route('finalizar_cotacao')}}" method="POST" enctype="multipart/form-data" class="formulario-finalizar-orcamento">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="cotacao_id" id="cotacao_id" value="{{$cotacao -> id}}">

                            <button class="btnSimples" type="submit" >Finalizar Orçamento</button>

                        </form>

                @endif

            @endif

            </div>

        </div>

    </div>

</div>

@endsection
