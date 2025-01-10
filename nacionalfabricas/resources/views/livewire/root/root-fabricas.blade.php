<div>

    <div class="dados">

        <h1>Todas as Fábricas registradas</h1>

        <div class="pesquisa">

            <input class="pesquisa" wire:model.live="busca" placeholder="Busque pelo seu chamado">

        </div>

        <div class="lista-dados">

            <div class="cabecalho">
                <p>ID</p>
                <p>Nome da Fábrica</p>
                <p>Estado</p>
                <p>CEP</p>
                <p>Visitar</p>
            </div>

            <div class="resultados">
            @foreach($fabricas as $fabrica)

                @foreach($sites as $site)

                    @if($site -> id_conta == $fabrica -> id_conta)

                <a class="resultado" href="{{ route('industria', [ 'id' => $fabrica -> id_conta, 'site_slug' => $site -> slug])}}">

                    @endif

                @endforeach

                    <p>{{$fabrica -> id}}</p>
                    <p>{{$fabrica -> nome_empresa }}</p>
                    <p>{{$fabrica -> estado }}</p>
                    <p>{{$fabrica -> cep }}</p>

                </a>

            @endforeach

            </div>

        </div>

        <div class="paginacao">

            {{ $fabricas -> links() }}

        </div>

    </div>

</div>
