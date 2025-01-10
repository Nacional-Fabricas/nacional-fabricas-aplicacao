@extends('layouts.dashboard')
@section('content')

<div id="loading-indicator">

    <div class="bloco-load">

        <div class="spinner-border m-5 text-light" role="status">

            <span class="sr-only"></span>

        </div>

        <p>Carregando ...</p>

    </div>

</div>

<div class="editar-perfil">

    <form action="{{route('atualizar_cadastro')}}" class="formulario" id="form" method="post" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="secoes">

            <h1 class="titulo">Edite seus <span>dados cadastrais</span></h1>

            <div class="linha">

                <div class="grupo">

                    <label for="nomeEmpresa">Razão social *</label>
                    <input type="text" value="{{$dado -> nome_empresa}}" required name="nomeEmpresa" id="nomeEmpresa">

                </div>

                <div class="grupo">

                    <label for="fabricante">Você é fabricante?</label>
                    <select name="fabricante">

                        <option value="{{$dado -> fabricante}}">{{$dado -> fabricante}}</option>

                        @if($dado -> fabricante == "Sim")

                            <option value="Não">Não</option>

                        @else
                            <option value="Sim">Sim</option>

                        @endif

                    </select>

                </div>

                <div class="grupo">

                    <label for="isento_re">IE Isento</label>
                    <select name="isento_re">

                        <option value="{{$dado -> isento_re}}">{{$dado -> isento_re}}</option>

                        @if($dado -> isento_re == "Sim")

                            <option value="Não">Não</option>

                        @else
                            <option value="Sim">Sim</option>

                        @endif

                    </select>

                </div>

            </div>

            <div class="linha">

                <div class="grupo">

                    <label for="cnpj">CNPJ *</label>
                    <input type="text" value="{{$dado -> cnpj}}" required name="cnpj" id="cnpj">

                </div>

                <div class="grupo">

                    <label for="registro_estadual">Inscrição estadual</label>
                    <input type="text" value="{{$dado -> registro_estadual}}" name="registro_estadual" id="registro_estadual">

                </div>

            </div>

        </div>

        <div class="secoes">

            <h2 class="titulo">Endereço</h2>

            <div class="linha">

                <div class="grupo">

                    <label for="cep">CEP *</label>
                    <input type="text" value="{{$dado -> cep}}" required name="cep" id="cep">

                </div>

                <div class="grupo">

                    <label for="cidade">Cidade *</label>
                    <input type="text" value="{{$dado -> cidade}}" required name="cidade" id="cidade">

                </div>

                <div class="grupo">

                    <label for="estado">UF *</label>
                    <input type="text" value="{{$dado -> estado}}" required name="estado" id="estado">

                </div>


            </div>

            <div class="linha">

                <div class="grupo">

                    <label for="endereco">Endereço *</label>
                    <input type="text" value="{{$dado -> endereco}}" required name="endereco" id="endereco">

                </div>

                <div class="grupo">

                    <label for="numero">Número *</label>
                    <input type="text" value="{{$dado -> num}}" required name="numero" id="numero">

                </div>

                <div class="grupo">

                    <label for="complemento">Complemento *</label>
                    <input type="text" value="{{$dado -> complemento}}" name="complemento" id="complemento">

                </div>

                <div class="grupo">

                    <label for="bairro">Bairro *</label>
                    <input type="text" value="{{$dado -> bairro}}" required name="bairro" id="bairro">

                </div>

            </div>

        </div>

        <div class="secoes">

            <h2 class="titulo">Contato</h2>

            <div class="linha">

                <div class="grupo">

                    <label for="nome_contato">Pessoa de contato *</label>
                    <input type="text" value="{{$dado -> nome_contato}}" required name="nome_contato" id="nome_contato">

                </div>

                <div class="grupo">

                    <label for="telefone_contato">Telefone / Celular *</label>
                    <input type="text" value="{{$dado -> telefone_contato}}" required name="telefone_contato" id="telefone_contato">

                </div>

                <div class="grupo">

                    <label for="celular_contato">Telefone / Celular (Secundário)</label>
                    <input type="text" value="{{$dado -> celular_contato}}" name="celular_contato" id="celular_contato">

                </div>

            </div>

        </div>

        <div class="secoes">

            <h2 class="titulo">Adicionar Cnae</h2>

            <div class="linha">

                <div class="bloco-cnaes">

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

                        <a class="adicionar-cnae" id="btn_adicionar_cnae"> <strong>+</strong>Adicionar outro CNAE</a>

                    </div>

                    <div id="cnaeContainer">

                    </div>

                </div>

            </div>

        </div>

        <div class="secoes">

            <div class="botoes">

                <button type="reset" class="inativo">Cancelar</button>

                <button type="submit" class="finalizar-registro">Salvar Edição</button>

            </div>

        </div>

        <input type="hidden" value="{{$dado -> latitude}}" required name="latitude" id="latitude">

        <input type="hidden" value="{{$dado -> longitude}}" required name="longitude" id="longitude">

    </form>

    <div class="cnaes">

        <h2 class="titulo">Classificação Nacional de Atividades Econômicas</h2>

        <div class="linha">

            <div class="grupo">

                <h3>Seus Cnaes</h3>

                <ul class="lista-cnaes">

                    @foreach ($cnaes as $cnae)

                        <li class="cnae">

                            <form action="{{route('excluir_cnae')}}" method="post" >
                                @csrf
                                @method('DELETE')

                                <input type="hidden" name="id" value="{{$cnae -> id}}">

                                <span>{{$cnae -> descricao}}</span>

                                <button type="submit" class="btn-remover">Remover</button>

                            </form>

                        </li>

                    @endforeach

                </ul>

            </div>

        </div>

    </div>

</div>


@endsection

