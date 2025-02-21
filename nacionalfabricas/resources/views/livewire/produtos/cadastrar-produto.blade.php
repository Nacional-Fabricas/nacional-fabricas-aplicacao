<div>

    <div class="criar-produtos">

        <form id="formulario-produto" action="{{route('criar_produto')}}" method="post" class="formulario" enctype="multipart/form-data">
            @csrf
            <input name="id_site" value="{{$site -> id}}" type="hidden">

            <!-- Step 1: Product Information -->
            <div class="bloco-formulario etapa" id="etapa1">

                <div class="cabecalho-bloco">
                    <h1>Informações do produto</h1>
                </div>
                <!-- Fields for step 1 -->

                <div class="campos-formulario">

                    <div class="linha">

                        <div class="grupo">
                            <label for="produto_nome">
                                Nome do Produto (obrigatório)
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Somente Produtos ativos, poderão ser visitados.">i</button>

                            </label>
                            <input required name="produto_nome" type="text" value="{{ old('produto_nome') }}">
                        </div>

                        <div class="grupo">
                            <label for="ativo">
                                Produto ativo
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Somente Produtos ativos, poderão ser visitados.">i</button>
                            </label>
                            <select required name="ativo" id="ativo" value="{{ old('ativo') }}">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>

                        <div class="grupo">
                            <label for="destaque">
                                Produto em destaque?
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Produtos em Destaque, apareceção na Home e na página de sua Fábrica.">i</button>
                            </label>
                            <select required name="destaque" id="destaque" value="{{ old('destaque') }}">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>

                    </div>

                    <div class="linha">

                        <div class="grupo">
                            <label for="preco_min">
                                Preço Mínimo
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido quando possuir também o Preço Máximo.">i</button>
                            </label>
                            <input name="preco_min" step="any" type="number" value="{{ old('preco_min' ) }}">
                        </div>

                        <div class="grupo">
                            <label for="preco_max">
                                Preço Máximo
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido quando possuir também o Preço Mínimo.">i</button>
                            </label>
                            <input name="preco_max" step="any" type="number" value="{{ old('preco_max') }}">
                        </div>

                    </div>

                    <div class="linha">

                        <div class="grupo">
                            <label for="quantidade">qtd min. (obrigatório)</label>
                            <input name="quantidade" required type="number" value="{{ old('quantidade') }}">
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
                                Descrição breve (obrigatório)
                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Aparecerá logo abaixo dos códigos do Produto.">i</button>
                            </label>
                            <textarea required name="descricao" id="descricao" cols="30" rows="10">{{ old('descricao') }}</textarea>
                        </div>
                    </div>

                    <div class="botoes">

                        <button type="button" class="btn-proximo" onclick="validarEtapa(1, 2)">Próximo</button>

                    </div>

                </div>

            </div>

            <!-- Step 2: Weights and Dimensions -->
            <div class="bloco-formulario etapa" id="etapa2" style="display:none;">
                <div class="cabecalho-bloco">
                    <h1>Pesos e dimensões</h1>
                </div>

                <div class="campos-formulario">

                    <!-- Fields for step 2 -->
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

                    </div>

                    <div class="linha">

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

                    <div class="botoes">
                        <button type="button" class="btn-anterior" onclick="mostrarEtapa(1)">Anterior</button>
                        <button type="button" class="btn-proximo" onclick="validarEtapa(2, 3)">Próximo</button>

                    </div>

                </div>

            </div>

            <!-- Step 3: Additional Information -->
            <div class="bloco-formulario etapa" id="etapa3" style="display:none;">

                <div class="cabecalho-bloco">
                    <h1>Informações adicionais</h1>
                </div>

                <div class="campos-formulario">

                    <div class="bloco">
                        <!-- Fields for step 3 -->
                        <div class="linha">
                            <div class="grupo">
                                <label for="info_add">
                                    Adicione informações técnicas, características fisicas ou modo de funcionamento do seu produto.
                                    <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido no bloco Informações Adicionais na Página do Produto.">i</button>
                                </label>
                                <textarea name="info_add" cols="45" rows="10">{{ old('info_add') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="botoes">

                        <button type="button" class="btn-anterior" onclick="mostrarEtapa(2)">Anterior</button>
                        <button type="button" class="btn-proximo" onclick="validarEtapa(3, 4)">Próximo</button>

                    </div>

                </div>

            </div>

            <!-- Step 4: Categorization -->
            <div class="bloco-formulario etapa" id="etapa4" style="display:none;">

                <div class="cabecalho-bloco">
                    <h1>Categorização</h1>
                </div>

                <div class="campos-formulario">

                    <div class="linha">

                        <div class="grupo">

                            <label for="categories">Categoria (obrigatório)</label>
                            <select name="categorias" required>
                                <option value="">Selecione uma categoria</option>
                                @foreach($categorias as $categoria)

                                    <option value="{{ $categoria-> nome }}">{{ $categoria-> nome }}</option>

                                @endforeach
                            </select>

                        </div>

                    </div>

                    <div class="botoes">

                        <button type="button" class="btn-anterior" onclick="mostrarEtapa(3)">Anterior</button>
                        <button type="submit">Cadastrar</button>

                    </div>

                </div>

            </div>

        </form>

    </div>

    @push('scripts')

        <script src="{{asset('js/produto/produto.js')}}" type="module"></script>

        <script>
            function mostrarEtapa(etapa) {
                const etapas = document.querySelectorAll('.etapa');
                etapas.forEach((div, index) => {
                    div.style.display = (index + 1 === etapa) ? 'block' : 'none';
                });
            }

            function validarEtapa(etapaAtual, proximaEtapa) {
                const form = document.getElementById('formulario-produto');
                const inputs = form.querySelectorAll(`#etapa${etapaAtual} [required]`);
                let valid = true;

                inputs.forEach(input => {
                    if (!input.value) {
                        input.reportValidity();
                        valid = false;
                    }
                });

                if (valid) {
                    mostrarEtapa(proximaEtapa);
                }
            }
        </script>
    @endpush

</div>
