@extends('layouts.finalizar-cadastro')
@section('content')

<div id="indicador-carregamento">

   <div class="bloco-carregamento">

       <div class="spinner-border m-5 text-light" role="status">

           <span class="sr-only"></span>

       </div>

       <p>Carregando ...</p>

   </div>

</div>

@if (!$cadastro)

<div class="bloco-cadastro">

    <form class="formulario" action="{{ route('criar_cadastro') }}" method="post" enctype="multipart/form-data">
        @csrf

        <h1 class="titulo">Ótimo! Complete seus <span>dados cadastrais</span></h1>

        <!-- Passo 1: Dados Cadastrais -->
        <div class="secao passo" id="passo-1">

            <div class="linha">

                <div class="grupo">
                    <label for="nomeEmpresa">Razão social *</label>
                    <input type="text" required name="nomeEmpresa" id="nomeEmpresa" placeholder="Nome Comercial da sua Empresa">
                </div>

            </div>

            <div class="linha">

                <div class="grupo">
                    <label for="fabricante">Você é fabricante?</label>
                    <select required name="fabricante" id="fabricante">
                        <option value="">Selecione uma opção</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>

                <div class="grupo">
                    <label for="isento_re">IE Isento</label>
                    <select name="isento_re" id="isento_re">
                        <option value="">Selecione uma opção</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>
            </div>

            <div class="linha">
                <div class="grupo">
                    <label for="cnpj_input">CNPJ</label>
                    <input type="text" id="cnpj_input" name="cnpj" placeholder="Adicione apenas os números">
                </div>

                <div class="grupo">
                    <label for="registro_estadual">Inscrição estadual</label>
                    <input type="text" name="registro_estadual" id="registro_estadual" placeholder="Caso não possua, deixar em branco">
                </div>
            </div>

            <div class="botoes">

                <button type="button" class="btn-proximo">Próximo</button>

            </div>

        </div>

        <!-- Passo 2: Endereço -->
        <div class="secao passo" id="passo-2" style="display:none;">
            <h2 class="titulo">Endereço</h2>
            <div class="linha">
                <div class="grupo">
                    <label for="cep">CEP *</label>
                    <input type="text" required name="cep" id="cep" placeholder="Adicione apenas os números">
                </div>

                <div class="grupo">
                    <label for="cidade">Cidade *</label>
                    <input type="text" required name="cidade" id="cidade" placeholder="Preenchido automaticamente">
                </div>

                <div class="grupo">
                    <label for="estado">UF *</label>
                    <input type="text" required name="estado" id="estado" placeholder="Preenchido automaticamente">
                </div>
            </div>

            <div class="linha">
                <div class="grupo">
                    <label for="endereco">Endereço *</label>
                    <input type="text" required name="endereco" id="endereco" placeholder="Digite o Endereço">
                </div>

                <div class="grupo">
                    <label for="numero">Número *</label>
                    <input type="text" required name="numero" id="numero" placeholder="Digite o Número">
                </div>

                <div class="grupo">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" id="complemento" placeholder="Exemplo Galpão 2, Terreno Nº5">
                </div>

                <div class="grupo">
                    <label for="bairro">Bairro *</label>
                    <input type="text" required name="bairro" id="bairro" placeholder="Digite o Bairro">
                </div>
            </div>

            <div class="botoes">

                <button type="button" class="btn-voltar">Voltar</button>
                <button type="button" class="btn-proximo">Próximo</button>

            </div>

        </div>

        <!-- Passo 3: Contato -->
        <div class="secao passo" id="passo-3" style="display:none;">
            <h2 class="titulo">Contato</h2>
            <div class="linha">
                <div class="grupo">
                    <label for="nome_contato">Pessoa de contato *</label>
                    <input type="text" required name="nome_contato" id="nome_contato" placeholder="Se necessário entrarmos em contato">
                </div>

                <div class="grupo">
                    <label for="telefone_contato">Telefone / Celular *</label>
                    <input type="text" required name="telefone_contato" id="telefone_contato" placeholder="Número acessível por WhatsApp">
                </div>

                <div class="grupo">
                    <label for="celular_contato">Telefone / Celular (Secundário)</label>
                    <input type="text" name="celular_contato" id="celular_contato" placeholder="Segundo número disponível">
                </div>
            </div>

            <div class="botoes">

                <button type="button" class="btn-voltar">Voltar</button>
                <button type="button" class="btn-proximo">Próximo</button>

            </div>

        </div>

        <!-- Passo 4: CNAE -->
        <div class="secao passo" id="passo-4" style="display:none;">
            <h2 class="titulo">Classificação Nacional de Atividades Econômicas</h2>


            <div class="linha">

                <div class="grupo">

                    <label for="cnaes">CNAE 1</label>
                    <input type="text" name="cnaes" id="cnaes" list="cnaesList" placeholder="Selecione um CNAE">
                    <datalist id="cnaesList">
                        @foreach($listaCnaes as $cnae)
                            <option value="{{$cnae->cnae_id}} - {{$cnae->cnae_description}}">
                        @endforeach
                    </datalist>

                </div>

                <a class="adicionar-cnae" id="btn_adicionar_cnae"><strong>+</strong>Adicionar CNAE</a>

            </div>

            <div id="cnaesEscolhidos"></div>
            <div class="botoes">
                <button type="button" class="btn-voltar">Voltar</button>
                <button type="submit" class="btn-fin">Cadastrar</button>
            </div>

        </div>

    </form>

</div>

@else

<span>

    Você já passou desta Etapa, agora é só aproveitar sua conta

</span>

@endif

    @push('scripts')

        <script src="{{asset('js/cadastro/cadastro.js')}}"></script>

    @endpush

@endsection
