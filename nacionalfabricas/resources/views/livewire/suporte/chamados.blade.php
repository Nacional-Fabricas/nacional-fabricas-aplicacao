<div>

    <div class="bloco-chamados">

        <h1>Todos seu chamados</h1>

        <div class="pesquisa-chamado">

            <input class="pesquisa" wire:model.live="search" placeholder="Busque pelo seu chamado">

        </div>

        <div class="lista-chamados">

            <div class="cabecalho">
                <p>ID</p>
                <p>Motivo</p>
                <p>Status</p>
                <p>Criado em</p>
            </div>

            <div class="chamados">

            @foreach($chamados as $chamado)

                <a class="chamado" href="{{route('chamado', [ 'id' => $chamado -> id])}}">
                    <p>{{$chamado -> id}}</p>
                    <p>{{$chamado -> motivoChamado }}</p>
                    <p> <span class="{{$chamado -> status_chamado }}">{{$chamado -> status_chamado }}</span>  </p>
                    <p>{{Carbon\Carbon::parse($chamado -> created_at)->format('d/m/Y')}}</p>
                </a>

            @endforeach

            </div>

        </div>

    </div>

</div>
