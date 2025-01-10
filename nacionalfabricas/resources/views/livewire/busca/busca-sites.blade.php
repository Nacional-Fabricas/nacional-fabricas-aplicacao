<div>

    <div class="resultados-sites">

        <div class="breadcrumb">

            <div class="bc">

                Inicio > {{$tipo}}

                @if($busca)
                    > <strong>{{$busca}}</strong>
                @endif

            </div>

            <div class="contador-resultados">

                <strong>{{count($resultados)}}</strong> resultados encontrados

            </div>

        </div>

        <ul class="lista-resultados">

            @foreach($resultados as $resultado)

                @if($tipo === 'Produtos')

                    <li class="produto">

                        <img class="thumb" src="{{asset('images/thumbnails/'. $resultado-> produto_thumbnail) }}">

                        <div class="info">

                            <div class="cabecalho">

                                <h3>{{$resultado -> produto_nome}}</h3>

                                @if($resultado -> preco_min != 0 && $resultado -> preco_min != null && $resultado -> preco_max != 0 && $resultado -> preco_max != null )

                                    <div class="preco">

                                        <strong>R${{$resultado -> preco_min}} - R${{$resultado -> preco_max}}</strong>

                                    </div>

                                @endif

                                <div class="codigos">

                                    <span class="sku"><strong>SKU</strong> {{$resultado -> sku}}</span>

                                </div>

                                <hr>

                            </div>

                            @foreach($enderecos as $endereco)

                                @if($endereco -> id_conta == $resultado -> id_conta)

                                    <div class="informacao-produto">

                                        <span class="fabricante">Fabricante: <strong>{{$endereco -> nome_empresa}}</strong></span>

                                        <span class="uf">Estado: <strong>{{$endereco -> estado}}</strong></span>

                                    </div>

                                @endif

                            @endforeach

                            <div class="acoes">

                                <a class="ver-produto" href="{{ route('produto', [ 'id' => $resultado -> id]) }}">Ver Produto</a>

                                @if($resultado -> id_conta != $usuarioId )

                                    <form action="{{route('adicionar_cotacao')}}" class="formulario-adicionar-cotacao"  method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="id" value="{{$resultado -> id}}">
                                        <input type="hidden" name="name" value="{{$resultado -> produto_nome}}">
                                        <input type="hidden" name="sku" value="{{$resultado -> sku}}">
                                        <input type="hidden" name="ean" value="{{$resultado -> ean}}">
                                        <input type="hidden" name="id_receptor" value="{{$resultado -> id_conta}}">
                                        <input type="hidden" name="id_produto" value="{{$resultado -> id}}">
                                        <input type="hidden" name="price" value="1">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="image" value="{{$resultado-> produto_thumbnail}}">

                                        <button class="addCote full">+ Adicionar cotação</button>

                                    </form>

                                @else

                                    <a class="editar-produto" href="{{ route('editar-produto', [ 'id' => $resultado -> id])}}">Editar Produto</a>

                                @endif

                                @foreach($sites as $site)

                                    @if($site -> id_conta == $resultado -> id_conta )

                                        <a class="ver-fabricante" href="{{ route('industria', [ 'conta_id' => $resultado -> id_conta, 'site_slug' => $site -> slug])}}">Ver Fabricante</a>

                                    @endif

                                @endforeach

                            </div>

                        </div>

                    </li>

                @else

                    <li class="site">

                        <div class="cabecalho-site">

                            <h3>{{$resultado -> nome_industria}}</h3>

                        </div>

                        <div class="informacao">

                            <div class="imagens-destaque">

                                <button class="pre-btn"><img src="{{asset('icons/chevron-left.svg')}}" alt=""></button>

                                <div class="slide">

                                    <div class="bloco-img">

                                        <img class="thumbnail" src="{{asset('images/sites/logos/'. $resultado-> logo) }}">

                                    </div>

                                    @foreach ($produtos as $produto)

                                        @if( $produto->id_conta == $resultado->id_conta )

                                            <div class="bloco-img">

                                                <img class="thumbnail" src="{{asset('images/thumbnails/' .$produto->produto_thumbnail)}}">

                                            </div>

                                        @endif

                                    @endforeach

                                </div>

                                <button class="nxt-btn"><img src="{{asset('icons/chevron-right.svg')}}" alt=""></button>

                            </div>

                            <div class="site-info">

                                <span class="valor">Produtos principais:<strong>{{ $resultado-> produtos_tipo }}</strong> </span>

                                <span class="valor">Estado: <strong>{{ $resultado-> estado}}</strong></span>

                                <span class="valor">Área de atuação: <strong>{{ $resultado-> local_atuacao}}</strong></span>

                                <span class="valor">Tempo de resposta: <strong>{{ $resultado-> tempo_resposta }}</strong></span>

                                <div class="acoes">

                                    @foreach($sites as $site)

                                        @if($site -> id_conta == $resultado -> id_conta )

                                            <a class="ver-produto" href="{{ route('site_industria', [ 'site_id' => $resultado -> id, 'site_slug' => $site -> slug])}}">Ver Página</a>

                                        @endif

                                    @endforeach

                                    <a class="contato" href="{{ route('produto', [ 'id' => $resultado -> id])}}">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.64" height="16.641" viewBox="0 0 16.64 16.641">
                                            <g id="noun_Phone_2301004" transform="translate(-5.003 -73.513)">
                                                <g id="Grupo_148" data-name="Grupo 148" transform="translate(5.003 73.513)">
                                                    <path id="Caminho_1565" data-name="Caminho 1565" d="M17.764,21.646c-.083,0-.166,0-.253-.007a9.065,9.065,0,0,1-3.327-.978,17.839,17.839,0,0,1-5.854-4.582h0A16,16,0,0,1,5.5,11.35a6.5,6.5,0,0,1-.481-2.779,2.5,2.5,0,0,1,.812-1.733L7.1,5.566A1.724,1.724,0,0,1,9.64,5.559c.239.22.472.46.7.692.113.115.226.231.342.348L11.685,7.6a1.745,1.745,0,0,1,.007,2.591c-.222.222-.438.431-.653.64-.183.178-.366.355-.547.536a6.931,6.931,0,0,0,1.024,1.577,12.552,12.552,0,0,0,3.1,2.809l.024.015a3.872,3.872,0,0,0,.483.268c.048.024.1.048.146.074l1.191-1.191a1.725,1.725,0,0,1,2.548,0l2.062,2.062a1.722,1.722,0,0,1,0,2.572c-.135.135-.272.268-.4.4-.268.263-.521.51-.766.771A2.71,2.71,0,0,1,17.764,21.646Z" transform="translate(-5.003 -5.005)">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>

                                        Ver contato

                                    </a>

                                </div>

                            </div>

                        </div>

                    </li>

                @endif

            @endforeach

        </ul>

        {{$resultados->appends(request()->query())->links()}}

    </div>

</div>
