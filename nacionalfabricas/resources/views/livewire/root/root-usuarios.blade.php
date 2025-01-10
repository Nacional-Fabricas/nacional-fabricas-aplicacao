<div>

    <div class="dados">

        <h1>Todos os Usuários registrados</h1>

        <div class="pesquisa">

            <input class="pesquisa" wire:model.live="busca" placeholder="Busque pelo seu usuario">

        </div>

        <div class="lista-dados">

            <div class="cabecalho">

                <th>ID</th>
                <th>Nome</th>
                <th>Nível</th>
                <th>Cadastro</th>
            </div>

            <div class="resultados">

            @foreach($usuarios as $usuario)
                <a class="resultado" href="{{usuario-{{$usuario -> id}}">
                    <p>{{$usuario -> id}}</p>
                    <p>{{$usuario -> name}}</p>
                    <p>{{$usuario -> role}}</p>
                    <p>
                        {{Carbon\Carbon::parse($usuario -> created_at)->format('d/m/Y')}}
                    </p>
                </a>
            @endforeach

            </div>

        </div>

        <div class="paginacao">

            {{ $usuarios -> links() }}

        </div>

    </div>

</div>
