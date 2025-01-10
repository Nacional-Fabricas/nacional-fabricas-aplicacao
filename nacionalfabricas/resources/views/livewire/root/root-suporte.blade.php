<div>

    <div class="dados">

        <div class="cabecalho">

            <h1>Todos os Chamados registrados</h1>

        </div>

        <div class="pesquisa">

            <input class="pesquisa" wire:model.live="busca" placeholder="Busque pelo seu chamado">

        </div>

        <div class="lista-dados">

            <div class="cabecalho">

                <th>ID</th>
                <th>Solicitante</th>
                <th>Motivo da abertura</th>
                <th>Status</th>
                <th>Criado em</th>

            </div>

            <div class="resultados">
            @foreach($chamados as $chamado)
                <a class="resultado" href="{{ route('chamado', ['id' => $chamado -> id])}}">
                    <p>{{$chamado -> id}}</p>
                    <p>{{$chamado -> nome}}</p>
                    <p>{{$chamado -> motivoChamado}}</p>
                    <p>{{$chamado -> status_chamado}}</p>
                    <p>
                        {{Carbon\Carbon::parse($chamado -> created_at)->format('d/m/Y')}}
                    </p>
                </a>

            @endforeach

            </div>

        </div>

        <div class="paginacao">

            {{ $chamados -> links() }}

        </div>

    </div>

</div>
