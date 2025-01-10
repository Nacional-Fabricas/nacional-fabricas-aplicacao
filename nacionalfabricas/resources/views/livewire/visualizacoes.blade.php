<div>

    <div class="visualizacoes">

        <div class="pesquisa">

            <input wire:model.live="search" class="textSearch" type="search" placeholder="Buscar produto">

            <select wire:model.live="filtroBusca" class="filtroBusca">
                <option value="">Filtrar</option>
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
            </select>

            <a href="/criar-produtos" class="addCat">+ Criar produto</a>

        </div>

        <table class="tabela">
            <thead>
            <tr>

                <th class="hiddenMobile" scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Visualizações</th>
                <th scope="col" class="hiddenMobile">Situação</th>
                <th scope="col">Ação</th>

            </tr>
            </thead>
            <tbody>

            @foreach($produtos as $produto)

                <tr>
                    <td class="hiddenMobile">{{$produto -> id}}</td>
                    <td>{{$produto -> produto_nome}}</td>
                    <td>{{$produto -> visualizacoes}}</td>

                    <td class="hiddenMobile">

                        @if($produto -> ativo == 'Sim' )

                            <span class="ativo">Ativo</span>

                        @else

                            <span class="inativo">Inavito</span>

                        @endif

                    </td>
                    <td><a href="/produto/{{$produto -> id}}">Editar</a></td>
                </tr>

            @endforeach

            </tbody>
        </table>

        <div class="links">

            {{$produtos -> links()}}

        </div>

    </div>

</div>
