@extends('layouts.painel')
@section('content')

    <div class="editar-produto">

        <div class="imagens-produto">

            <!-- Seção da Logo -->
            @include('pages.produtos.crop-thumbnail-produto')

            <!-- Galeria de Imagens -->
            @include('pages.produtos.crop-album-produto')

        </div>

        <form class="formulario-excluir" action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir Produto</button>
        </form>

        <form action="{{route('salvar_produto')}}" class="formulario" id="form" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input name="id" value="{{$produto -> id}}" type="hidden">

            <!-- Etapa 1: Informações do produto -->
            <div class="bloco-formulario etapa" id="etapa1">

                <div class="cabecalho">
                    <h1>Informações do produto</h1>
                </div>

                <div class="campos-formulario">

                    <div class="linha">
                        <div class="grupo">
                            <label for="status">Produto ativo
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Somente Produtos ativos, poderão ser visitados.">i</button>
                            </label>
                            <select name="status">
                                @foreach (['Ativo', 'Inativo'] as $opcao)
                                    <option value="{{ $opcao }}" {{ $produto->ativo === $opcao ? 'selected' : '' }}>{{ $opcao }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="grupo">
                            <label for="destaque">Produto em destaque?
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Produtos em Destaque, apareceção na Home e na página de sua Fábrica.">i</button>
                            </label>
                            <select name="destaque" id="destaque">
                                @if($produto -> destaque === "Sim")
                                    <option value="{{$produto -> destaque}}">{{$produto -> destaque}}</option>
                                    <option value="Não">Não</option>
                                @else
                                    <option value="{{$produto -> destaque}}">{{$produto -> destaque}}</option>
                                    <option value="Sim">Sim</option>
                                @endif
                            </select>
                        </div>
                        <div class="grupo">
                            <label for="preco_min">Preço Mínimo
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido quando possuir também o Preço Máximo.">i</button>
                            </label>
                            <input name="preco_min" step="any" type="number" value="{{ $produto -> preco_min }}">
                        </div>
                        <div class="grupo">
                            <label for="preco_max">Preço Máximo
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido quando possuir também o Preço Mínimo.">i</button>
                            </label>
                            <input name="preco_max" step="any" type="number" value="{{ $produto -> preco_max }}">
                        </div>
                    </div>
                    <div class="linha">
                        <div class="grupo">
                            <label for="produto_nome">Nome do Produto</label>
                            <input name="produto_nome" value="{{$produto -> produto_nome}}" type="text">
                        </div>
                    </div>
                    <div class="linha">
                        <div class="grupo">
                            <label for="quantidade">qtd min.</label>
                            <input name="quantidade" value="{{$produto -> quantidade}}" type="number">
                        </div>
                        <div class="grupo">
                            <label for="sku">Código do produto (SKU)</label>
                            <input name="sku" value="{{$produto -> sku}}" type="text">
                        </div>
                        <div class="grupo">
                            <label for="ncm">NCM</label>
                            <input name="ncm" value="{{$produto -> ncm}}" type="text">
                        </div>
                        <div class="grupo">
                            <label for="gtin">GTIN</label>
                            <input name="gtin" value="{{$produto -> gtin}}" type="text">
                        </div>
                    </div>
                    <div class="linha">
                        <div class="grupo">
                            <label for="descricao">Descrição breve
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Aparecerá logo abaixo dos códigos do Produto.">i</button>
                            </label>
                            <textarea name="descricao" id="descricao" cols="30" rows="10">{{$produto -> descricao}}</textarea>
                        </div>
                    </div>

                    <div class="botoes">

                        <button type="button" class="btn-proximo" onclick="mostrarEtapa(2)">Próximo</button>

                    </div>

                </div>

            </div>

            <!-- Etapa 2: Pesos e dimensões -->
            <div class="bloco-formulario etapa" id="etapa2" style="display:none;">

                <div class="cabecalho">
                    <h1>Pesos e dimensões</h1>
                </div>

                <div class="campos-formulario">

                    <div class="linha">
                        <div class="grupo">
                            <label for="peso">Peso</label>
                            <input name="peso" value="{{$produto -> peso}}" type="text">
                        </div>
                        <div class="grupo">
                            <label for="altura">Altura</label>
                            <input name="altura" value="{{$produto -> altura}}" type="text">
                        </div>
                        <div class="grupo">
                            <label for="largura">largura</label>
                            <input name="largura" value="{{$produto -> largura}}" type="text">
                        </div>
                        <div class="grupo">
                            <label for="profundidade">Profundidade</label>
                            <input name="profundidade" value="{{$produto -> profundidade}}" type="text">
                        </div>
                    </div>

                    <div class="botoes">

                        <button type="button" class="btn-anterior" onclick="mostrarEtapa(1)">Anterior</button>
                        <button type="button" class="btn-proximo" onclick="mostrarEtapa(3)">Próximo</button>

                    </div>

                </div>

            </div>

            <!-- Etapa 3: Informações adicionais -->
            <div class="bloco-formulario etapa" id="etapa3" style="display:none;">

                <div class="cabecalho">
                    <h1>Informações adicionais</h1>
                </div>

                <div class="campos-formulario">

                    <div class="linha">
                        <div class="grupo">
                            <label for="info_add">Adicione informações técnicas, características fisicas ou modo de funcionamento do seu produto.
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido no bloco Informações Adicionais na Página do Produto.">i</button>
                            </label>
                            <textarea name="info_add" cols="45" rows="10">{{ $produto -> info_add }}</textarea>
                        </div>
                    </div>

                    <div class="botoes">

                        <button type="button" class="btn-anterior" onclick="mostrarEtapa(2)">Anterior</button>
                        <button type="button" class="btn-proximo" onclick="mostrarEtapa(4)">Próximo</button>

                    </div>

                </div>

            </div>

            <!-- Etapa 4: Categorização -->
            <div class="bloco-formulario etapa" id="etapa4" style="display:none;">

                <div class="cabecalho">
                    <h1>Categorização</h1>
                </div>

                <div class="campos-formulario">

                    <div class="linha">
                        <div class="grupo">
                            <label>Categorias</label>
                            <select name="categorias" id="categorias">
                                <option value="{{ $produto -> categorias }}">{{ $produto -> categorias }}</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria-> id }}">{{ $categoria-> nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="botoes">

                        <button type="button" class="btn-anterior" onclick="mostrarEtapa(3)">Anterior</button>
                        <button type="submit">Salvar</button>

                    </div>

                </div>

            </div>

        </form>

    </div>

@endsection

@push('scripts')

    <script src="https://cdn.jsdelivr.net/npm/cropperjs@1.5.13/dist/cropper.min.js"></script>

    <script>
        function mostrarEtapa(etapa) {
            const etapas = document.querySelectorAll('.etapa');
            etapas.forEach((div, index) => {
                div.style.display = (index + 1 === etapa) ? 'block' : 'none';
            });
        }
    </script>

@endpush
