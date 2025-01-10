@extends('layouts.finishSign')
@section('content')

<div id="loading-indicator">

   <div class="bloco-load">

       <div class="spinner-border m-5 text-light" role="status">

           <span class="sr-only"></span>

       </div>

       <p>Carregando ...</p>

   </div>

</div>

@if (!$cadastro)

<div class="bloco-cadastro">

    <form class="formulario" action="{{route('criar_cadastro')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="secao">

            <h1 class="titulo">Ótimo! Complete seus <span>dados cadastrais</span></h1>

            <div class="linha">

                <div class="grupo">

                    <label for="nomeEmpresa">Razão social *</label>
                    <input type="text" required name="nomeEmpresa" id="nomeEmpresa" placeholder="Nome Comercial da sua Empresa">

                </div>

                <div class="grupo check sm">

                    <label for="fabricante">Você é fabricante?</label>
                    <select required name="fabricante" id="fabricante">

                        <option class="option" value="">Selecione uma opção</option>
                        <option class="option" value="Sim">Sim</option>
                        <option class="option" value="Não">Não</option>

                    </select>

                </div>

                <div class="grupo check sm">

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
                    <input type="text" class="form-control" id="cnpj_input" name="cnpj" placeholder="Adicione apenas os números">
                </div>

                <div class="grupo md">

                    <label for="registro_estadual">Inscrição estadual</label>
                    <input type="text" name="registro_estadual" id="registro_estadual" placeholder="Caso não possua, deixar em branco">

                </div>

            </div>

        </div>

        <div class="secao">

            <h2 class="titulo">Endereço</h2>

            <div class="linha">

                <div class="grupo">

                    <label for="cep">CEP *</label>
                    <input type="text" required name="cep" id="cep" placeholder="Adicione apenas os números">

                </div>

                <div class="grupo md">

                    <label for="cidade">Cidade *</label>
                    <input type="text" required name="cidade" id="cidade" placeholder="Preenchido automaticamente">

                </div>

                <div class="grupo">

                    <label for="estado">UF *</label>
                    <input type="text" required name="estado" id="estado" placeholder="Preenchido automaticamente" >

                </div>

            </div>

            <div class="linha">

                <div class="grupo">

                    <label for="endereco">Endereço *</label>
                    <input type="text" required name="endereco" id="endereco" placeholder="Digite o Endereço, caso não preencha automaticamente">

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
                    <input type="text" required name="bairro" id="bairro" placeholder="Digite o Bairro, caso não preencha automaticamente">

                </div>

            </div>

        </div>

        <div class="secao">

            <h2 class="titulo">Contato</h2>

            <div class="linha">

                <div class="grupo">

                    <label for="nome_contato">Pessoa de contato *</label>
                    <input type="text" required name="nome_contato" id="nome_contato" placeholder="Se necessário entrarmos em contato">

                </div>

                <div class="grupo">

                    <label for="telefone_contato">Telefone / Celular*</label>
                    <input type="text" required name="telefone_contato" id="telefone_contato" placeholder="De preferência um número acessivel por WhatsApp">

                </div>

                <div class="grupo">

                    <label for="celular_contato">Telefone / Celular (Secundário)</label>
                    <input type="text" name="celular_contato" id="celular_contato" placeholder="Caso possua um segundo número disponnível">

                </div>

            </div>

        </div>

        <div class="secao">

            <h2 class="titulo">Classificação Nacional de Atividades Econômicas</h2>

            <div class="linha">

                <div class="grupo">

                    <div class="campos">
                        <div class="grupo">
                            <label for="cnaes">CNAE 1</label>
                            <select name="cnaes" id="cnaes">
                                <option value="">Selecione uma opção</option>
                            @foreach($listaCnaes as $cnae)
                                <option value="{{$cnae->cnae_id}} - {{$cnae->cnae_description}}">{{$cnae->cnae_id}} - {{$cnae->cnae_description}}</option>
                            @endforeach
                            </select>
                        </div>
                        <a class="addCnae" id="btn_adicionar_cnae"> <strong>+</strong>Adicionar outro CNAE</a>
                    </div>

                    <div id="cnaeContainer">

                    </div>

                </div>

                <div class="botoes">

                    <a href="{{route('home')}}" class="inativo">Cancelar</a>

                    <button type="submit" class="btn-fin">Cadastrar</button>

                </div>

            </div>

        </div>

    </form>

</div>

@else

<span>

    Você já passou desta Etapa, agora é só aproveitar sua conta

</span>

@endif

@endsection
