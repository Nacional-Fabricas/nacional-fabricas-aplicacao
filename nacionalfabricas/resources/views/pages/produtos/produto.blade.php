@extends('layouts.meu-site')
@section('content')

    <img class="banner" src="{{asset('storage/images/sites/banners/'. $site -> banner)}}">

    <div class="informacao-site">

        <img class="logo" src="{{ asset('storage/images/sites/logos/' . $site -> logo)}}" alt="{{$site -> nome_industria}}">

        <div class="bloco-informacoes">

            <div class="cabecalho">

                <h1>{{$site -> nome_industria}}</h1>

                <div class="informacoes-basica">

                    <h3>Informações básicas</h3>

                    <span class="descricao">{{$site -> descricao_industria}}</span>

                </div>

            </div>

            <button class="ver-informacoes">Ver Informações</button>

            <ul class="informacoes-contato">

                <img id="close" onclick="verInfo()" src="{{ asset('icons/close.svg')}}" />

                <li class="informacao-contato">

                    <div class="sobre-info">

                        <img class="icone" src="{{ asset('icons/location.svg')}}" alt="">
                        <h4>Endereço</h4>

                    </div>

                    <div class="conteudo-destaque">

                            <span class="valor-destaque">

                                {{$endereco -> endereco}}, {{$endereco -> bairro}},{{$endereco -> numero}}, {{$endereco -> cidade}} - {{$endereco -> estado}}

                            </span>

                    </div>

                </li>

                <li class="informacao-contato">

                    <div class="sobre-info">

                        <img src="{{ asset('icons/call.svg')}}" alt="">
                        <h4>Contato</h4>

                    </div>

                    <div class="conteudo-destaque">

                        <span class="valor-destaque">

                            Email: {{$site -> email}}

                        </span>

                        <span class="valor-destaque">

                            Telefone: {{$site -> telefone}}

                        </span>

                    </div>

                </li>

                <li class="informacao-contato">

                    <div class="sobre-info">

                        <img src="{{ asset('icons/stopwatch.svg')}}" alt="">
                        <h4>Atendimento</h4>
                    </div>

                    <div class="conteudo-destaque">

                        <a class="ver-horarios" onclick="verHorarios()">Ver Horários</a>

                        <div class="bloco-horarios" style="display: none">

                            <div class="todos-horarios">

                                <h3>horários de atendimento</h3>

                                @foreach($atendimento as $dia => $info)
                                    @if(isset($info['entrada']) && $info['entrada'] !== 'N/A' && isset($info['saida']) && $info['saida'] !== 'N/A')
                                        <p class="horario"><span class="dia-semana">{{ ucfirst($dia) }}:</span> <span class="horario-semana">{{ $info['entrada'] }}h - {{ $info['saida'] }}h</span></p>
                                    @endif
                                @endforeach

                                <a class="ver-horarios" onclick="verHorarios()">Fechar</a>

                            </div>

                        </div>

                    </div>

                </li>

            </ul>

        </div>

    </div>

    <div class="pagina-produto">

        <div class="cabecalho-produto">

            <div class="imagens">

                <img class="imagem-destaque" src="{{ asset('storage/images/thumbnails/'. $produto -> produto_thumbnail)}}" onclick="changeHighlightedImg({{asset('thumbnails/' . $produto -> produto_thumbnail)}}, false)">

                <div class="galeria">

                    @if($album != null)

                        <img class="imagem-galeria" src="{{ asset('storage/images/thumbnails/'. $produto -> produto_thumbnail)}}" onclick="changeHighlightedImg({{asset('thumbnails/' . $produto -> produto_thumbnail)}}, false)">

                        @foreach($album as $imgProduto)

                            <img class="imagem-galeria" src="{{ asset('storage/images/album/' . $imgProduto -> url_imagem) }}" onclick="changeHighlightedImg({{ asset('album/'.$imgProduto -> url_imagem)}}, false)">

                        @endforeach

                    @endif

                </div>

            </div>

            <div class="informacoes-produto">

                <h1>{{$produto -> produto_nome}}</h1>

                @if($produto->preco_min != 0 && $produto->preco_min != null && $produto->preco_max != 0 && $produto->preco_max != null )

                    <div class="bloco-preco">

                        <p>Intervalo de Preço</p>

                        <div class="precos">

                            @php

                                $precoMax = explode(".", $produto->preco_max);
                                $precoMin = explode(".", $produto->preco_min);

                            @endphp

                            <div class="preco">

                                <strong>R${{ $precoMin[0]}}</strong>@if(isset($precoMin[1]))<strong>, <p class="menor">{{ $precoMin[0] }}</p></strong>@endif

                            </div>

                            -
                            <div class="preco">

                                <strong>R${{ $precoMax[0] }}</strong>@if(isset($precoMax[1]))<strong>, <p class="menor">{{ $precoMax[0] }}</p></strong>@endif

                            </div>

                        </div>

                    </div>

                @endif

                <div class="codigos">

                    <span class="codigo"><strong>SKU</strong>{{$produto -> sku}}</span>

                    <span class="codigo"><strong>EAN</strong>{{$produto -> ean}}</span>

                </div>

                <div class="descricao-produto">

                    <p><strong>Descrição do Produto:</strong></p>

                    <span class="value">
                        {{$produto -> descricao}}
                    </span>

                </div>

                @if(Auth::id() != $produto -> id_conta)

                <form action="{{route('adicionar_cotacao')}}" class="formulario-adicionar-cotacao" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{$produto -> id}}">
                    <input type="hidden" name="name" value="{{$produto -> produto_nome}}">
                    <input type="hidden" name="sku" value="{{$produto -> sku}}">
                    <input type="hidden" name="ean" value="{{$produto -> ean}}">
                    <input type="hidden" name="id_receptor" value="{{$produto -> id_conta}}">
                    <input type="hidden" name="id_produto" value="{{$produto -> id}}">
                    <input type="hidden" name="price" value="1">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="image" value="{{$produto-> produto_thumbnail}}">

                    <button class="btn-acao">+ Adicionar cotação</button>

                </form>

                @else

                <a href="{{ route('editar_produto', [ 'id' => $produto -> id])}}" class="btn-acao">Editar produto</a>

                @endif

            </div>

        </div>

        <div class="informacoes-adicionais">

            <span class="texto">

                <a onclick="showInfo()" id="info_add" class="borda"> Informações Adicionais</a>

            </span>

            <div id="informacao">
                <p>
                    {{$produto -> info_add}}
                </p>
            </div>

        </div>

        <div class="produtos-relacionados">

            <h2>Produtos Relacionados</h2>

            <div class="lista-produtos">

                @foreach($produtosRelacionados as $produtoRelacionado)

                    <div class="produto">

                        <img class="thumbnail" src="{{ asset('storage/images/thumbnails/' . $produtoRelacionado -> produto_thumbnail) }}"  alt="{{$produtoRelacionado -> produto_nome}}">

                        <h3>{{ $produtoRelacionado -> produto_nome }}</h3>

                        <div class="acoes">

                            @if($produtoRelacionado -> id_conta != Auth::id())

                                <form action="{{route('adicionar_cotacao')}}" method="POST" enctype="multipart/form-data" class="formulario-adicionar-orcamento">

                                    @csrf
                                    <input type="hidden" name="id" value="{{$produtoRelacionado -> id}}">
                                    <input type="hidden" name="name" value="{{$produtoRelacionado -> produto_nome}}">
                                    <input type="hidden" name="sku" value="{{$produtoRelacionado -> sku}}">
                                    <input type="hidden" name="ean" value="{{$produtoRelacionado -> ean}}">
                                    <input type="hidden" name="id_receptor" value="{{$produtoRelacionado -> id_conta}}">
                                    <input type="hidden" name="id_produto" value="{{$produtoRelacionado -> id}}">
                                    <input type="hidden" name="price" value="1">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="image" value="{{$produtoRelacionado-> produto_thumbnail}}">
                                    <button class="btn-acao">Cotar produto</button>

                                </form>

                            @else

                                <a class="btn-acao" href="{{ route('editar_produto', ['id' => $produtoRelacionado->id])}}">Editar</a>

                            @endif

                            <a class="btn-acao" href="{{ route('produto', ['id'=>$produtoRelacionado->id])}}">Ver produto</a>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

@push('scripts')

    <script src="{{asset('js/produto/produto.js')}}" type="module"></script>

@endpush

@endsection
