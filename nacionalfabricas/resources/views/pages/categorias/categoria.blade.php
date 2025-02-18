@extends('layouts.painel')
@section('content')

<div class="bloco-categoria">

    <div class="bloco-formulario">

        <form id="form-update" action="{{route('atualizar_categoria')}}" method="post" class="formulario" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="cabecalho">

                <h2>Informações da categoria</h2>

            </div>

            <hr>

            <div class="linha">

                <div class="grupo">

                    <label for="nivel">

                        Hierárquia da Categoria

                        <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Selecione a ordem que deseja para sua Categoria.">
                            i
                        </button>

                    </label>
                    <select required name="nivel" id="nivel">

                        @if($categoria -> nivel == "Categoria Pai" )

                            <option value="{{$categoria -> nivel}}">{{$categoria -> nivel}}</option>
                            <option value="Sub Categoria">Sub Categoria</option>
                            <option value="Categoria Solo">Categoria Solo</option>

                        @elseif($categoria -> nivel == "Sub Categoria" )

                            <option value="{{$categoria -> nivel}}">{{$categoria -> nivel}}</option>
                            <option value="Categoria Pai">Categoria Pai</option>
                            <option value="Categoria Solo">Categoria Solo</option>

                        @elseif($categoria -> nivel == "Categoria Solo" )

                            <option value="{{$categoria -> nivel}}">{{$categoria -> nivel}}</option>
                            <option value="Categoria Pai">Categoria Pai</option>
                            <option value="Sub Categoria">Sub Categoria</option>

                        @endif

                    </select>

                </div>

                <div class="grupo">

                    <label for="ativo">Categoria ativa?

                        <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Somente Categorias Ativas irão aparecer no menu.">
                            i
                        </button>

                    </label>
                    <select required name="ativo" id="ativo">

                        <option value="{{$categoria -> ativo}}">{{$categoria -> ativo}}</option>

                        @if($categoria -> ativo == "Ativo" )

                            <option value="Inativo">Inativo</option>

                        @elseif($categoria -> ativo == "Inativo" )

                            <option value="Ativo">Ativo</option>

                        @endif

                    </select>

                </div>

                <div class="grupo">

                    <label for="categoria_pai">

                        Selecione a categoria pai

                        <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Selecione abaixo de qual categoria está será listada. Apenas para Sub Categorias">
                            i
                        </button>
                    </label>
                    <select required name="categoria_pai" id="categoria_pai">
                        <option value="Não possui">Não possui</option>
                        @foreach($categoriasPai as $categoriaPai)

                            @if($categoriaPai -> id != $categoria -> id )

                                <option value="{{$categoriaPai -> nome}}">{{$categoriaPai -> nome}}</option>

                            @endif

                        @endforeach
                    </select>
                </div>

            </div>

            <div class="linha">

                <div class="grupo">

                    <label for="nome">Nome da Categoria</label>
                    <input type="text" name="nome" value="{{$categoria -> nome}}" id="nome" >

                </div>

            </div>

            <div class="linha">

                <div class="grupo">

                    <label for="descricao">Descrição</label>
                    <textarea placeholder="Escreva uma breve descrição para seu produto." class="desc" name="descricao">{{$categoria -> descricao}}</textarea>

                </div>

            </div>

        </form>

        <form id="form-delete" action="{{route('excluir_categoria')}}" method="post" class="excluir-categoria" enctype="multipart/form-data">
            @csrf
            @method('DELETE')

            <input type="hidden" value="{{$categoria -> id}}" name="id">

        </form>

        <div class="botoes">

            <button type="button" class="btn-deletar" onclick="document.getElementById('form-delete').submit();">Deletar</button>
            <button type="button" class="btn-salvar" onclick="document.getElementById('form-update').submit();">Salvar categoria</button>

        </div>

    </div>

</div>

@endsection
