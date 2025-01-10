<form action="{{route('criar_site')}}" method="post" class="formulario-atualizar-site" enctype="multipart/form-data">
    @csrf

    <div class="cabecalho-formulario">

        <h1>Área do seu Site</h1>

        <hr>

    </div>

    <div class="conteudo-formulario">

        <div class="bloco">

            <div class="linha">

                <div class="grupo">
                    <label for="nome_industria">Nome da indústria</label>
                    <input name="nome_industria" required value="{{ old('nome_industria', $site ? $site->nome_industria : '') }}" type="text">

                    @error('nome_industria')
                    <div class="alert alert-danger">{{ $menssagem }}</div>
                    @enderror

                </div>

                <div class="grupo">

                    <label for="descricao_industria">Descrição
                        <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Descrição que irá aparecer na página de sua Fábrica.">
                            i
                        </button>
                    </label>

                    <textarea name="descricao_industria" required id="" cols="30" rows="10">{{ old('descricao_industria', $site ? $site->descricao_industria : '') }}</textarea>

                    @error('descricao_industria')
                    <div class="alert alert-danger">{{ $menssagem }}</div>
                    @enderror

                </div>

            </div>

        </div>

        <div class="bloco">

            <div class="linha">

                <div class="grupo">

                    <label for="produtos_tipo">

                        Cite alguns produtos

                        <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Nome de alguns produtos Fábricados.">
                            i
                        </button>

                    </label>

                    <input name="produtos_tipo" required @if($site) value="{{ old('produtos_tipo', $site->produtos_tipo) }}" @else value="{{ old('produtos_tipo', $site ? $site -> produtos_tipo : '') }}" @endif type="text">

                </div>

                <div class="grupo">

                    <label for="local_atuacao">Local de atuação</label>

                    <select name="local_atuacao" required id="local_atuacao">
                        <option value="" disabled selected>Selecione um local</option>
                        <option value="Todo território Nacional" @if(old('local_atuacao', $site ? $site->local_atuacao : '') === 'Todo território Nacional') selected @endif>Todo território Nacional</option>
                        <option value="Apenas em alguns Estados" @if(old('local_atuacao', $site ? $site->local_atuacao : '') === 'Apenas em alguns Estados') selected @endif>Apenas em alguns Estados</option>
                        <option value="Apenas no próprio Estados" @if(old('local_atuacao', $site ? $site->local_atuacao : '') === 'Apenas no próprio Estados') selected @endif>Apenas no próprio Estados</option>
                        <option value="Apenas na Região" @if(old('local_atuacao', $site ? $site->local_atuacao : '') === 'Apenas na Região') selected @endif>Apenas na Região</option>
                        <option value="Apenas na Cidade" @if(old('local_atuacao', $site ? $site->local_atuacao : '') === 'Apenas na Cidade') selected @endif>Apenas na Cidade</option>
                    </select>

                    @error('local_atuacao')
                    <div class="alert alert-danger">{{ $menssagem }}</div>
                    @enderror

                </div>

                <div class="grupo">

                    <label for="segmento">Segmento</label>
                    <select name="segmento" required>

                        <option value="">Selecione uma Opção</option>

                        @foreach ($segmentos as $segmento)

                            <option value="{{$segmento->nomeSegmento}}"  @if(old('segmento', $site ? $site->segmento : '') === $segmento->nomeSegmento) selected @endif>{{$segmento->nomeSegmento}}</option>

                        @endforeach

                    </select>

                </div>

                <div class="grupo">
                    <label for="tributacao">Tributação</label>
                    <select name="tributacao" required id="tributacao">
                        <option value="" disabled selected>Selecione a Tributação</option>
                        <option value="Lucro Real" @if(old('tributacao', $site ? $site->tributacao : '') === 'Lucro Real') selected @endif>Lucro Real</option>
                        <option value="Lucro Presumido" @if(old('tributacao', $site ? $site->tributacao : '') === 'Lucro Presumido') selected @endif>Lucro Presumido</option>
                        <option value="Simples Nacional" @if(old('tributacao', $site ? $site->tributacao : '') === 'Simples Nacional') selected @endif>Simples Nacional</option>
                    </select>

                    @error('tributacao')
                    <div class="alert alert-danger">{{ $menssagem }}</div>
                    @enderror

                </div>

            </div>

            <div class="linha">

                <div class="grupo">

                    <label for="tempo_resposta">Tempo de resposta</label>
                    <select name="tempo_resposta" required @if($site) value="{{ old('tempo_resposta', $site->tempo_resposta) }}" @endif id="tempo_resposta">

                        <option value="">Selecione uma opção</option>
                        @for($i = 1; $i < 10; $i ++)
                                <option value="No máximo {{$i}}h" @if(old('tempo_resposta', $site ? $site->tempo_resposta : '') === 'No máximo ' . $i . 'h') selected @endif>No máximo {{$i}}h</option>
                        @endfor

                        <option value="dia">No máximo 24h</option>

                    </select>

                </div>

                <div class="grupo">

                    <label for="atendimento">Atendimento</label>
                    <select required name="atendimento" @if($site) value="{{ old('atendimento', $site->atendimento) }}" @else value="{{ old('atendimento', $site ? $site -> atendimento : '') }}" @endif >


                        <option value="">Selecione uma opção</option>
                        <option value="Segunda a Sexta - Horário Comercial" @if(old('atendimento', $site ? $site->atendimento : '') === 'Segunda a Sexta - Horário Comercial') selected @endif>Segunda a Sexta - Horário Comercial</option>
                        <option value="Segunda a Sábado - Horário Comercial" @if(old('atendimento', $site ? $site->atendimento : '') === 'Segunda a Sábado - Horário Comercial') selected @endif>Segunda a Sábado - Horário Comercial</option>
                        <option value="Horário Indefinido" @if(old('atendimento', $site ? $site->atendimento : '') === 'Horário Indefinido') selected @endif>Horário Indefinido</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="bloco">

            <h2>Contato</h2>

            <div class="linha">

                <div class="grupo">

                    <label for="email">

                        Email

                        <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Email que constará na página da sua fábrica.">
                            i
                        </button>

                    </label>

                    <input name="email" required @if($site) value="{{ old('email', $site->email) }}" @else value="{{ old('email', $site ? $site -> email : '') }}" @endif type="text">

                </div>

                <div class="grupo">

                    <label for="telefone">Telefone</label>
                    <input name="telefone" required @if($site) value="{{ old('telefone', $site->telefone) }}" @else value="{{ old('telefone', $site ? $site -> telefone : '') }}" @endif type="text">

                </div>

            </div>

        </div>

        <div class="bloco">

            <div class="localizacao">

                <h2>Localização</h2>

                <div class="linha">

                    <div class="grupo">

                        <label for="estado">Estado</label>
                        <input disabled required value="{{ $cadastro->estado }}" placeholder="Estados" name="estado" id="estado">

                    </div>

                    <div class="grupo">

                        <label for="cidade">Cidade</label>
                        <input name="cidade" disabled required value="{{ $cadastro->cidade }}" type="text">

                    </div>

                    <div class="grupo">

                        <label for="cep">CEP</label>
                        <input name="cep" disabled required value="{{ $cadastro->cep }}" type="text">

                    </div>

                    <div class="grupo">

                        <label for="bairro">Bairro</label>
                        <input name="bairro" disabled required value="{{ $cadastro->bairro }}" type="text">

                    </div>

                    <div class="grupo">

                        <label for="endereco">Endereço</label>
                        <input name="endereco" disabled required value="{{ $cadastro -> endereco }}" type="text">

                    </div>

                    <div class="grupo">

                        <label for="numero">Número</label>
                        <input name="numero" disabled required value="{{ $cadastro->num }}" type="text">

                    </div>

                    <span class="alerta"> Caso algum dado de localização esteja incorreto, atualize <a href="{{route('dados_cadastrais')}}" class="verde"> aqui </a> </span>

                </div>

            </div>

            <div class="area-mapa">

                <livewire:site.mapa-site/>

            </div>

        </div>

    </div>

    <div class="botoes">

        @if($site)

            <a href="{{route('site_industria', [ 'site_id' => $site -> id, 'site_slug' => $site->slug])}}" type="submit" class="btn-acessar">Visitar página</a>

        @endif

        <button type="submit" class="botao-salvar">Salvar</button>

    </div>

</form>
