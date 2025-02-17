<form action="{{route('criar_site')}}" method="post" class="formulario-criar-site" enctype="multipart/form-data">
    @csrf

    <div class="cabecalho-formulario">
        <h1>Área do seu Site</h1>
    </div>
    <hr>
    <div class="conteudo-formulario">

        {{-- Etapa 1 --}}
        <div class="bloco etapa" id="etapa-1">
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
                        <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Descrição que irá aparecer na página de sua Fábrica.">i</button>
                    </label>
                    <textarea name="descricao_industria" required cols="30" rows="10">{{ old('descricao_industria', $site ? $site->descricao_industria : '') }}</textarea>
                    @error('descricao_industria')
                    <div class="alert alert-danger">{{ $menssagem }}</div>
                    @enderror
                </div>
            </div>
            <div class="botoes">
                <button type="button" class="btn-proximo" onclick="mostrarEtapa(2)">Próximo</button>

            </div>
        </div>

        {{-- Etapa 2 --}}
        <div class="bloco etapa" id="etapa-2" style="display: none;">

            <div class="linha">
                <div class="grupo">
                    <label for="produtos_tipo">Cite alguns produtos
                        <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Nome de alguns produtos Fábricados.">i</button>
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
            </div>

            <div class="linha">

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

            </div>

            <div class="botoes">

                <button type="button" class="btn-anterior" onclick="mostrarEtapa(1)">Anterior</button>
                <button type="button" class="btn-proximo" onclick="mostrarEtapa(3)">Próximo</button>

            </div>

        </div>

        {{-- Etapa 3 --}}
        <div class="bloco etapa" id="etapa-3" style="display: none;">

            <h2>Contato</h2>

            <div class="linha">
                <div class="grupo">
                    <label for="email">Email
                        <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Email que constará na página da sua fábrica.">i</button>
                    </label>
                    <input name="email" required @if($site) value="{{ old('email', $site->email) }}" @else value="{{ old('email', $site ? $site -> email : '') }}" @endif type="text">
                </div>
                <div class="grupo">
                    <label for="telefone">Telefone</label>
                    <input name="telefone" required @if($site) value="{{ old('telefone', $site->telefone) }}" @else value="{{ old('telefone', $site ? $site -> telefone : '') }}" @endif type="text">
                </div>
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

            <div class="botoes">

                <button type="button" class="btn-anterior" onclick="mostrarEtapa(2)">Anterior</button>
                <button type="button" class="btn-proximo" onclick="mostrarEtapa(4)">Próximo</button>

            </div>

        </div>

        {{-- Etapa 4 --}}
        <div class="bloco etapa" id="etapa-4" style="display: none;">
            <h2>Horário de Atendimento</h2>
            @php
                $dias = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];
            @endphp
            <div class="grupo-dias">
                @foreach($dias as $dia)
                    <div class="horarios">

                        <div class="dia">

                            <input type="checkbox" name="atendimento[{{ strtolower($dia) }}][ativo]" value="1" @if(old('atendimento.' . strtolower($dia) . '.ativo', $site ? $site->atendimento[strtolower($dia)]['ativo'] : '') == 1) checked @endif>
                            <label>{{ $dia }}</label>

                        </div>

                        <input type="time" name="atendimento[{{ strtolower($dia) }}][entrada]" value="{{ old('atendimento.' . strtolower($dia) . '.entrada', $site ? $site->atendimento[strtolower($dia)]['entrada'] : '') }}">
                        <input type="time" name="atendimento[{{ strtolower($dia) }}][saida]" value="{{ old('atendimento.' . strtolower($dia) . '.saida', $site ? $site->atendimento[strtolower($dia)]['saida'] : '') }}">

                    </div>
                @endforeach
            </div>
            <div class="botoes">

                <button type="button" class="btn-anterior" onclick="mostrarEtapa(3)">Anterior</button>
                <button type="submit" class="botao-salvar">Salvar</button>

            </div>

        </div>

    </div>

    <div class="botoes">
        @if($site)
            <a href="{{route('site', [ 'id' => $site -> id, 'slug' => $site->slug])}}" type="submit" class="btn-acessar">Visitar página</a>
        @endif
    </div>

</form>

@push('scripts')

    <script src="{{asset('js/site/criar-site.js')}}"></script>

@endpush
