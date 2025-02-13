<div>

    <div class="criar-produtos">

        <form action="{{route('criar_produto')}}" method="post" class="formulario" enctype="multipart/form-data">
            @csrf

            <input name="id_site" value="{{$site -> id}}" type="hidden">

            <div class="bloco-formulario">

                <div class="cabecalho-bloco">

                    <h1>Informações do produto</h1>

                </div>

                <div class="conteudo-bloco">

                    <div class="bloco-inputs">

                        <div class="linha">

                            <div class="grupo">

                                <label for="ativo">

                                    Produto ativo

                                    <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Somente Produtos ativos, poderão ser visitados.">
                                        i
                                    </button>

                                </label>
                                <select required name="ativo" id="ativo" value="{{ old('ativo') }}">

                                    <option value="Sim">Sim</option>

                                    <option value="Não">Não</option>

                                </select>

                            </div>

                            <div class="grupo">

                                <label for="destaque">

                                    Produto em destaque?

                                    <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Produtos em Destaque, apareceção na Home e na página de sua Fábrica.">
                                        i
                                    </button>

                                </label>
                                <select required name="destaque" id="destaque" value="{{ old('destaque') }}">

                                    <option value="Sim">Sim</option>

                                    <option value="Não">Não</option>

                                </select>

                            </div>

                            <div class="grupo">

                                <label for="preco_min">

                                    Preço Mínimo

                                    <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido quando possuir também o Preço Máximo.">
                                        i
                                    </button>

                                </label>
                                <input name="preco_min" step="any" type="number" value="{{ old('preco_min' ) }}">

                            </div>

                            <div class="grupo">

                                <label for="preco_max">

                                    Preço Máximo

                                    <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido quando possuir também o Preço Mínimo.">
                                        i
                                    </button>

                                </label>
                                <input name="preco_max" step="any" type="number" value="{{ old('preco_max') }}">

                            </div>

                        </div>

                        <div class="linha">

                            <div class="grupo">

                                <label for="produto_nome">Nome do Produto</label>
                                <input required name="produto_nome" type="text" value="{{ old('produto_nome') }}">

                            </div>

                        </div>

                        <div class="linha">

                            <div class="grupo">

                                <label for="quantidade">qtd min.</label>
                                <input name="quantidade" required type="number"  value="{{ old('quantidade') }}">

                            </div>

                            <div class="grupo">

                                <label for="sku">Código do produto (SKU)</label>
                                <input name="sku" type="text" value="{{ old('sku') }}">

                            </div>

                            <div class="grupo">

                                <label for="ncm">NCM</label>
                                <input name="ncm" type="text" value="{{ old('ncm') }}">

                            </div>

                            <div class="grupo">

                                <label for="gtin">GTIN</label>
                                <input name="gtin" type="text" value="{{ old('gtin') }}">

                            </div>

                        </div>

                        <div class="linha">

                            <div class="grupo">

                                <label for="descricao">

                                    Descrição breve

                                    <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Aparecerá logo abaixo dos códigos do Produto.">
                                        i
                                    </button>

                                </label>
                                <textarea required name="descricao" id="descricao" cols="30" rows="10">{{ old('descricao') }}</textarea>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="bloco-formulario">

                <div class="cabecalho-bloco">

                    <h1>Pesos e dimensões</h1>

                </div>

                <div class="conteudo-bloco">

                    <div class="bloco-inputs">


                        <div class="linha">

                            <div class="grupo">

                                <label for="peso">Peso</label>

                                <div class="sub-grupo">

                                    <input name="peso" type="text" value="{{ old('peso') }}">
                                    <select name="unidade_peso">

                                        <option value="">Unidade</option>
                                        <option value="gr">gr</option>
                                        <option value="Kg">Kg</option>
                                        <option value="T">T</option>

                                    </select>

                                </div>


                            </div>

                            <div class="grupo">

                                <label for="altura">Altura</label>
                                <div class="sub-grupo">

                                    <input name="altura" type="text" value="{{ old('altura') }}">
                                    <select name="unidade_altura">

                                        <option value="">Unidade</option>
                                        <option value="mm">mm</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>

                                    </select>

                                </div>


                            </div>

                            <div class="grupo">

                                <label for="largura">largura</label>

                                <div class="sub-grupo">

                                    <input name="largura" type="text" value="{{ old('largura') }}">
                                    <select name="unidade_largura">

                                        <option value="">Unidade</option>
                                        <option value="mm">mm</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>

                                    </select>

                                </div>
                            </div>

                            <div class="grupo">

                                <label for="profundidade">Profundidade/ Diâmetro</label>
                                <div class="sub-grupo">

                                    <input name="profundidade" type="text" value="{{ old('profundidade') }}">
                                    <select name="unidade_profundidade">

                                        <option value="">Unidade</option>
                                        <option value="mm">mm</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>

                                    </select>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="bloco-formulario">

                <div class="cabecalho-bloco">

                    <h1>Informações adicionais</h1>

                </div>

                <div class="conteudo-bloco">

                    <div class="bloco-inputs">

                        <div class="linha">

                            <div class="grupo">

                                <label for="info_add">

                                    Adicione informações técnicas, características fisicas ou modo de funcionamento do seu produto.

                                    <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido no bloco Informações Adicionais na Página do Produto.">
                                        i
                                    </button>

                                </label>
                                <textarea name="info_add" cols="45" rows="10">{{ old('info_add') }}</textarea>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="bloco-formulario">

                <div class="cabecalho-bloco">

                    <h1>Categorização</h1>

                </div>
                <div class="conteudo-bloco">

                    <livewire:categorias.categorias />

                </div>
            </div>

            <div class="bloco-botao">

                <button type="submit">Cadastrar</button>

            </div>

        </form>

    </div>

    @push('scripts')

        <script src="{{asset('js/produto/produto.js')}}" type="module"></script>

    @endpush

</div>
