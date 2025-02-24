<div>
    <div class="bloco-pesquisa">
        <div id="formPesquisa" class="formulario-pesquisa">
            <img id="close" onclick="pesquisaMobile()" src="{{ asset('icons/close.svg') }}" />

            <select wire:model.live="tipo" id="tipo" class="escolha-tipo-busca">
                <option value="Fábricas">Fábricas</option>
                <option value="Produtos">Produtos</option>
            </select>

            <input wire:model.live="buscar" class="busca-texto" type="text" placeholder="O que está procurando?"/>

            <select name="estado" class="escolha-estado" wire:model.defer="estado">
                <option value="">Escolha um estado</option>
                @foreach($estados as $estado)
                    <option value="{{ $estado->sigla }}">{{ $estado->sigla }}</option>
                @endforeach
            </select>

            <select name="segmento" class="escolha-segmento" wire:model.defer="segmento">
                <option value="">Escolha um segmento</option>
                @foreach($segmentos as $segmento)
                    <option value="{{ $segmento->codigo }}">{{ $segmento->nomeSegmento }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="resultados">
        @if($tipo === "Produtos")

            <div class="bloco-produtos">

                <div class="contador-resultados">

                    <strong>{{$produtos -> count()}}</strong> produtos encontrados

                </div>

                <ul class="lista-produtos">

                    @foreach($produtos as $produto)

                        <li class="produto">

                            <div class="swiper mySwiper">

                                <div class="swiper-wrapper">

                                    <img class="swiper-slide" src="{{asset('storage/images/thumbnails/'. $produto -> produto_thumbnail) }}">

                                </div>

                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>

                            </div>

                            <div class="info">

                                <h3>{{$produto -> produto_nome}}</h3>

                                @if($produto -> preco_min != 0 && $produto -> preco_min != null && $produto -> preco_max != 0 && $produto -> preco_max != null )

                                    <div class="preco">

                                        <strong>R${{$produto -> preco_min}} - R${{$produto -> preco_max}}</strong>

                                    </div>

                                @endif

                                <div class="codigos">

                                    <span class="sku"><strong>SKU</strong> {{$produto -> sku}}</span>

                                </div>

                                <div class="acoes">

                                    <a class="btn-ver-produto" href="{{ route('produto', [ 'id' => $produto -> id]) }}">Ver Produto</a>

                                    @if($usuario && $produto -> id_conta != $usuario -> id )

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

                                        <a class="btn-editar-produto" href="{{ route('editar_produto', [ 'id' => $produto -> id])}}">Editar Produto</a>

                                    @endif

                                    @foreach($sites as $site)

                                        @if($site -> id == $produto -> id_site )

                                            <a class="btn-ver-fabricante" href="{{ route('site', [ 'id' => $produto -> id_site, 'slug' => $site -> slug])}}">Ver Fabricante</a>

                                        @endif

                                    @endforeach

                                </div>

                            </div>

                        </li>

                    @endforeach

                </ul>

                <div class="paginacao">
                    {{$produtos->appends(request()->query())->links()}}
                </div>

            </div>

        @elseif($tipo === "Fábricas")
            <livewire:busca.busca-sites :buscar="$buscar" />
        @endif

        <livewire:gerais.mapa-busca />
    </div>
</div>
