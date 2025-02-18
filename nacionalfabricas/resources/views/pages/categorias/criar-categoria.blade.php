@extends('layouts.painel')
@section('content')

<div class="criar-categoria">

    <form action="{{route('criar_categoria')}}" method="post" class="formulario" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id_site" value="{{$site -> id}}">

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

                    <option value="">Selecione a Hierárquia da Categoria</option>
                    <option value="Categoria Pai" {{ old('nivel') == 'Categoria Pai' ? 'selected' : '' }}>Categoria Pai</option>
                    <option value="Sub Categoria" {{ old('nivel') == 'Sub Categoria' ? 'selected' : '' }}>Sub Categoria</option>
                    <option value="Categoria Solo" {{ old('nivel') == 'Categoria Solo' ? 'selected' : '' }}>Categoria Solo</option>
                </select>
            </div>

            <div class="grupo">

                <label for="ativo">

                    Categoria ativa?

                    <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Somente Categorias Ativas irão aparecer no menu.">
                        i
                    </button>

                </label>
                <select required name="ativo" id="ativo">
                    <option value="Ativo" {{ old('ativo') == 'Ativo' ? 'selected' : '' }}>Sim</option>
                    <option value="Inativo" {{ old('ativo') == 'Inativo' ? 'selected' : '' }}>Não</option>
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
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria -> nome}}" {{ old('categoria_pai') == $categoria -> nome ? 'selected' : '' }}>{{$categoria -> nome}}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="linha">

            <div class="grupo">

                <label for="nome">Nome da Categoria</label>
                <input required type="text" name="nome" id="nome" value="{{ old('nome') }}">
            </div>

        </div>

        <div class="linha">

            <div class="grupo">

                <label for="descricao">Descrição</label>
                <textarea required placeholder="Escreva uma breve descrição para seu produto." class="desc" name="descricao">{{ old('descricao') }}</textarea>

            </div>

        </div>

        <div class="linha">

            <div class="botoes">

                <button type="submit" class="btn-cadastrar">Criar categoria</button>

            </div>

        </div>

    </form>

</div>

@endsection
