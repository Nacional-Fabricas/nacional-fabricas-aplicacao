@extends('layouts.main')
@section('content')

<div class="solicitar-orcamentos">

    @if(count($itensAgrupados)>0)

    <ul class="orcamentos">

        @foreach($itensAgrupados as $receiverId => $items)

            <li>

                <div class="solicitar-orcamento">

                    <div class="bloco-vendedor">

                        <div class="cabecalho-vendedor">

                            <span class="desc">Vendido e entregue por</span>

                            @foreach($sites as $site)

                                @if($items->first()->attributes->id_receptor == $site->id_conta)

                                    <div class="info-vendedor">

                                        <h1>{{$site->nome_industria}}</h1>

                                        <img src="{{ asset('icons/chevron-down.svg')}}" alt="">

                                    </div>

                                @endif

                            @endforeach

                            <hr>
                            <h3 class="titulo-padrao">Produtos</h3>
                        </div>
                        @foreach($items as $item)

                        <div class="bloco-produtos">

                            <div class="informacoes-produto">

                                <img class="thumb" src="{{ asset('images/thumbnails/'.$item->attributes->image)}}">

                                <div class="textos">

                                    <h2>{{$item->name}}</h2>

                                    <div class="codigos">
                                        <span class="codigo"><strong>SKU</strong> {{$item->attributes->sku}}</span>
                                        <span class="codigo"><strong>EAN</strong> {{$item->attributes->ean}}</span>
                                    </div>

                                </div>

                            </div>

                            <div class="acao">

                                <form action="{{route('remover-cotacao')}}" method="POST" enctype="multipart/form-data" class="formulario-excluir-formulario">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button type="submit"><img src="{{ asset('icons/close.svg')}}" alt=""></button>
                                </form>

                            </div>

                        </div>

                        <hr>

                        @endforeach

                        <div class="botoes">

                            <form action="{{route('finalizar_cotacao')}}" method="POST" enctype="multipart/form-data" class="formulario-realizar-orcamento">
                                @csrf
                                <div class="obs">
                                    <textarea name="observacao" cols="45" rows="8" placeholder="Digite sua dúvida sobre a cotação"></textarea>
                                </div>
                                <input type="hidden" name="cotacao_id" value="{{$items->first()->id}}">
                                <input type="hidden" name="id_receptor" value="{{$items->first()->attributes->id_receptor}}">
                                <input type="hidden" name="id_produto" value="{{$items->first()->attributes->product_id}}">
                                <button class="btnSimples" type="submit">
                                    Solicitar cotação
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 27.868 36.442">
                                        <g id="noun_bill_2763268" transform="translate(372 -57)">
                                            <g id="Grupo_207" data-name="Grupo 207" transform="translate(-372 57)">
                                                <path id="Caminho_1630" data-name="Caminho 1630" d="M2,3.072v34.3a1.075,1.075,0,0,0,1.072,1.072H28.8a1.075,1.075,0,0,0,1.072-1.072V7.359a1.112,1.112,0,0,0-.322-.761L25.259,2.311a1.024,1.024,0,0,0-.354-.236,1.186,1.186,0,0,0-.4-.075H3.072A1.075,1.075,0,0,0,2,3.072ZM4.144,4.144H24.069L27.724,7.8V36.3H4.144Z" transform="translate(-2 -2)" fill="#ffffff"></path>
                                                <path id="Caminho_1631" data-name="Caminho 1631" d="M15.215,18.646a1.075,1.075,0,0,1-1.072-1.072,1.072,1.072,0,0,0-2.144,0A3.227,3.227,0,0,0,14.144,20.6v.193a1.072,1.072,0,1,0,2.144,0V20.6a3.21,3.21,0,0,0-1.072-6.238,1.072,1.072,0,1,1,1.072-1.072,1.072,1.072,0,0,0,2.144,0,3.227,3.227,0,0,0-2.144-3.023v-.193a1.072,1.072,0,1,0-2.144,0v.193A3.21,3.21,0,0,0,15.215,16.5a1.072,1.072,0,0,1,0,2.144Z" transform="translate(-1.282 -1.497)" fill="#ffffff"></path>
                                                <path id="Caminho_1632" data-name="Caminho 1632" d="M24.221,25H7.072a1.072,1.072,0,0,0,0,2.144H24.221a1.072,1.072,0,0,0,0-2.144Z" transform="translate(-1.713 -0.348)" fill="#ffffff"></path>
                                                <path id="Caminho_1633" data-name="Caminho 1633" d="M24.221,29H7.072a1.072,1.072,0,1,0,0,2.144H24.221a1.072,1.072,0,1,0,0-2.144Z" transform="translate(-1.713 -0.061)" fill="#ffffff"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>

            </li>

        @endforeach

    </ul>

    @else

    <div class="lista-vazia">

        <img src="{{ asset('icons/cancel.svg')}}" alt="">

        <h1><strong>Lista de cotação vazia!</strong></h1>

        <span>Adicione seus produtos <a href="{{route('busca_geral', [ 'tipo'=> 'Produtos' ])}}">clicando aqui</a></span>

    </div>

    @endif

</div>

    @push('scripts')

        <script src="{{asset('js/cotacao/cotacao.js')}}" type="module"></script>

    @endpush

@endsection
