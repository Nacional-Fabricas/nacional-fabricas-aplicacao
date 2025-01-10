@extends('layouts.meuSite')
@section('content')

<div class="site-empresa">

    <div class="informacao-site">

        <img class="logo" src="{{ asset('images/sites/logos/' . $site -> logo)}}" alt="">

        <div class="bloco-informacoes">

            <div class="cabecalho">

                <h1>{{$site -> nome_industria}}</h1>

                <div class="informacoes-basica">

                    <h3>Informações básicas</h3>

                    <span class="descricao">{{$site -> descricao_industria}}</span>

                </div>

            </div>

            <a onclick="verInfo()" class="ver-informacao-mobile"> Mais Informações  </a>

            <ul id="informacoes-contato">

                <img id="close" onclick="verInfo()" src="{{ asset('icons/close.svg')}}" />

                <li>

                    <div class="informcacoes-destaque">

                        <img src="{{ asset('icons/location.svg')}}" alt="">
                        <h4>Endereço</h4>

                    </div>

                    <div class="conteudo-destaque">

                        <span class="valor-destaque">

                            {{$endereco -> endereco}}, {{$endereco -> bairro}},{{$endereco -> numero}}, {{$endereco -> cidade}} - {{$endereco -> estado}}

                        </span>

                    </div>

                </li>

                <li>

                    <div class="informcacoes-destaque">

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

                <li>

                    <div class="informcacoes-destaque">

                        <img src="{{ asset('icons/stopwatch.svg')}}" alt="">
                        <h4>Atendimento</h4>
                    </div>

                    <div class="conteudo-destaque">

                        <span class="valor-destaque">

                            Telefone: {{$site -> atendimento}}

                        </span>

                    </div>

                </li>

            </ul>

        </div>

    </div>

    <ul class="informacoes-perfil">

        <li class="informacao">

            <span class="label-informacao">Local de Atuação</span>

            <span class="valor-informacao">{{$site -> local_atuacao}}</span>

        </li>

        <li class="informacao">

            <span class="label-informacao">Segmento</span>

            <span class="valor-informacao">{{$site -> segmento}}</span>

        </li>

        <li class="informacao">

            <span class="label-informacao">Produtos Principais</span>

            <span class="valor-informacao">{{$site -> produtos_tipo}}</span>

        </li>

        <li class="informacao">

            <span class="label-informacao">Estado</span>

            <span class="valor-informacao">{{$endereco -> estado}}</span>

        </li>

        <li class="informacao">

            <span class="label-informacao">Tributação</span>

            <span class="valor-informacao">{{$site -> tributacao}}</span>

        </li>

        <li class="informacao">

            <span class="label-informacao">Tempo de resposta</span>

            <span class="valor-informacao">{{$site -> tempo_resposta}}</span>

        </li>

    </ul>

    <hr>

    @if( $site -> primeiro_destaque )

    <div class="destaques-fabrica">

        <h1>Nossa Fábrica</h1>

        <div class="bloco-imagens">

            @if( $site -> primeiro_destaque && $site -> primeiro_destaque != "sem-imagem" )
            <img class="img" src="{{ asset('images/sites/imagens-destaque/' . $site -> primeiro_destaque)}}">
            @endif

            @if( $site -> segundo_destaque &&  $site -> segundo_destaque != "sem-imagem" )
            <img class="img" src="{{ asset('images/sites/imagens-destaque/' . $site -> segundo_destaque)}}">
            @endif

            @if( $site -> terceiro_destaque &&  $site -> terceiro_destaque != "sem-imagem" )
            <img class="img" src="{{ asset('images/sites/imagens-destaque/' . $site -> terceiro_destaque)}}">
            @endif

        </div>

    </div>

    @endif

    @if( count($produtos) > 0 )

    <div class="produtos">

        <h1>Produtos em destaque</h1>

        <div class="lista-produtos">

            @foreach($produtos as $produto)

                <div class="produto">

                    <img class="thumbnail" src="{{ asset('images/thumbnails/' . $produto->produto_thumbnail) }}">

                    <h3>{{ $produto->produto_nome }}</h3>

                    <div class="acoes">

                        @if($produto->id_conta != Auth::id())

                            <form action="{{route('adicionar_cotacao')}}" method="POST" enctype="multipart/form-data" class="formulario-adicionar-orcamento">

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
                                <button class="btnSimples">Cotar produto</button>

                            </form>

                        @else

                            <a class="botao-editar-produto" href="{{ route('editar-produto', ['id' => $produto->id])}}">Editar</a>

                        @endif

                        <a class="botao-ver-produto" href="{{ route('produto', ['id'=>$produto->id])}}">Ver produto</a>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

    @endif

</div>


@endsection
