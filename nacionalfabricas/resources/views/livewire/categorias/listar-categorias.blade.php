<div>

    <div class="listar-categorias">

        <div class="pesquisa">

            <input wire:model.live="buscar" class="buscar" type="search" placeholder="Buscar categoria">

            <select wire:model.live="filtroCategorias" class="filtro-categorias">
                <option value="">Filtrar</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>

            <a href="{{route('criar_categoria')}}" class="adicionar-categoria">+ Criar categoria</a>

        </div>

        <table>
            <thead>
            <tr>
                <th class="mobile" scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Situação</th>
                <th scope="col">Ação</th>

            </tr>
            </thead>
            <tbody>

            @foreach($categorias as $categoria)

                <tr>
                    <td class="mobile">{{$categoria -> id}}</td>
                    <td>{{$categoria -> nome}}</td>
                    <td>

                        @if($categoria -> ativo === 'Ativo' )

                            <span class="ativo">Ativo</span>

                        @else

                            <span class="inativo">Inavito</span>

                        @endif

                    </td>
                    <td><a href="{{ route('categoria', [ 'id' => $categoria -> id])}}">Editar</a></td>
                </tr>

            @endforeach

            </tbody>
        </table>

        <div class="links">

            {{$categorias -> links()}}

        </div>

    </div>

</div>
