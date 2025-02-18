<div>

    @if(count($categorias) > 0)

        <div class="listar-categorias">

            <div class="bloco-categorias">

                <div class="cabecalho">

                    <h4>Produtos /</h4>
                    <h1 class="verde">Categorias</h1>

                </div>

                <div class="pesquisa">

                    <input wire:model.live="buscar" class="buscar" type="search" placeholder="Buscar categoria">

                    <select wire:model.live="filtroCategorias" class="filtro-categorias">
                        <option value="">Filtrar</option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>

                    <a href="{{route('criar_categoria')}}" class="adicionar-categoria">+ Criar categoria</a>

                </div>

                <div class="categorias">

                    @foreach($categorias as $categoria)

                        <a class="categoria" href="{{ route('categoria', [ 'id' => $categoria -> id])}}">
                            {{$categoria -> nome}}
                        </a>

                    @endforeach

                </div>

                <div class="links">

                    {{$categorias -> links()}}

                </div>

            </div>

        </div>

    @else

        <div class="lista-vazia">

            <img src="{{ asset('icons/cancel.svg')}}" alt="">

            <h1><strong>Nenhuma categoria registrada!</strong></h1>

            <span>Comece a criar suas categorias para classificar seus produtos <a href="{{route('criar_categoria')}}">clicando aqui</a></span>

        </div>

    @endif

</div>
