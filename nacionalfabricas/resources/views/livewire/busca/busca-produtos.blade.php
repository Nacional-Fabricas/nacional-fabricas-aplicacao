<div>

    <div class="resultados-produtos">

        <div class="breadcrumb">

            <div class="bc">

                Inicio > Produtos

                @if($busca)
                    > <strong>{{$busca}}</strong>
                @endif

            </div>

            <div class="contador-resultados">

                <strong>{{$produtos -> count()}}</strong> produtos encontrados

            </div>

        </div>

        <ul class="lista-resultados">

            @foreach($produtos as $produto)

                <li class="produto">

                    <img class="thumb" src="{{asset('images/thumbnails/'. $produto-> produto_thumbnail) }}">

                    <div class="info">

                        <div class="cabecalho">

                            <h3>{{$produto -> produto_nome}}</h3>

                            @if($produto -> preco_min != 0 && $produto -> preco_min != null && $produto -> preco_max != 0 && $produto -> preco_max != null )

                                <div class="preco">

                                    <strong>R${{$produto -> preco_min}} - R${{$produto -> preco_max}}</strong>

                                </div>

                            @endif

                            <div class="codigos">

                                <span class="sku"><strong>SKU</strong> {{$produto -> sku}}</span>

                            </div>

                            <hr>

                        </div>

                        @foreach($enderecos as $endereco)

                            @if($endereco -> id_conta == $produto -> id_conta)

                                <div class="informacao-produto">

                                    <span class="fabricante">Fabricante: <strong>{{$endereco -> nome_empresa}}</strong></span>

                                    <span class="uf">Estado: <strong>{{$endereco -> estado}}</strong></span>

                                </div>

                            @endif

                        @endforeach

                        <div class="acoes">

                            <a class="ver-produto" href="{{ route('produto', [ 'id' => $produto -> id]) }}">Ver Produto</a>

                            @if($produto -> id_conta != $usuarioId )

                                <form action="{{route('adicionar_cotacao')}}" class="formulario-adicionar-cotacao"  method="POST" enctype="multipart/form-data">
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

                                    <button class="addCote full">+ Adicionar cotação</button>

                                </form>

                            @else

                                <a class="editar-produto" href="{{ route('editar-produto', [ 'id' => $produto -> id])}}">Editar Produto</a>

                            @endif

                            @foreach($sites as $site)

                                @if($site -> id_conta == $produto -> id_conta )

                                    <a class="ver-fabricante" href="{{ route('industria', [ 'conta_id' => $produto -> id_conta, 'site_slug' => $site -> slug])}}">Ver Fabricante</a>

                                @endif

                            @endforeach

                        </div>

                    </div>

                </li>

            @endforeach

        </ul>

        {{$produtos->appends(request()->query())->links()}}

    </div>

</div>
