@extends('layouts.meu-site')
@section('content')

<div class="vitrine-empresa">

    @if( count($produtos) > 0 )

        <div class="produtos">

            <h1>Produtos em destaque</h1>

            <div class="lista-produtos">

                @foreach($produtos as $produto)

                    <div class="produto">

                        <img class="thumbnail" src="{{ asset('storage/images/thumbnails/' . $produto->produto_thumbnail) }}"  alt="{{$produto -> produto_nome}}">

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
                                    <button class="btn-acao">Cotar produto</button>

                                </form>

                            @else

                                <a class="btn-acao" href="{{ route('editar_produto', ['id' => $produto->id])}}">Editar</a>

                            @endif

                            <a class="btn-acao" href="{{ route('produto', ['id'=>$produto->id])}}">Ver produto</a>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

        <hr>

    @endif

    @if( $site -> primeiro_destaque )

    <div class="destaques-fabrica">

        <h1>Nossa Fábrica</h1>

        <div class="bloco-imagens-destaque">

            @if( $site -> primeiro_destaque && $site -> primeiro_destaque != "sem-imagem" )
            <img class="img-destaque" src="{{ asset('storage/images/sites/destaques/' . $site -> primeiro_destaque)}}" alt="{{$site -> nome_empresa}}">
            @endif

            @if( $site -> segundo_destaque &&  $site -> segundo_destaque != "sem-imagem" )
            <img class="img-destaque" src="{{ asset('storage/images/sites/destaques/' . $site -> segundo_destaque)}}" alt="{{$site -> nome_empresa}}">
            @endif

            @if( $site -> terceiro_destaque &&  $site -> terceiro_destaque != "sem-imagem" )
            <img class="img-destaque" src="{{ asset('storage/images/sites/destaques/' . $site -> terceiro_destaque)}}" alt="{{$site -> nome_empresa}}">
            @endif

        </div>

    </div>

    <hr>

    @endif

    <ul class="informacoes-perfil">

        <li class="informacao">

            <span class="label">Local de Atuação</span>

            <span class="valor">{{$site -> local_atuacao}}</span>

        </li>

        <li class="informacao">

            <span class="label">Segmento</span>

            <span class="valor">{{$site -> segmento}}</span>

        </li>

        <li class="informacao">

            <span class="label">Produtos Principais</span>

            <span class="valor">{{$site -> produtos_tipo}}</span>

        </li>

        <li class="informacao">

            <span class="label">Estado</span>

            <span class="valor">{{$endereco -> estado}}</span>

        </li>

        {{--
        <li class="informacao">

            <span class="label">Tributação</span>

            <span class="valor">{{$site -> tributacao}}</span>

        </li>
        --}}

        <li class="informacao">

            <span class="label">Tempo de resposta</span>

            <span class="valor">{{$site -> tempo_resposta}}</span>

        </li>

    </ul>

</div>


    @push('scripts')

        <script src="{{asset('js/site/informacoes.js')}}"></script>

    @endpush


@endsection
