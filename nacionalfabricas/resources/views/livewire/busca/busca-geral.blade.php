<div>

    <div class="bloco-pesquisa">

        <div id="formPesquisa" class="formulario-pesquisa">
            <img id="close" onclick="pesquisaMobile()" src="{{ asset('icons/close.svg') }}" />

            <select wire:model.live="tipo" id="tipo" class="escolha-tipo-busca">
                <option value="Fábricas">Fábricas</option>
                <option value="Produtos">Produtos</option>
            </select>

            <input wire:model.live="buscar" class="busca-texto" type="text" placeholder="O que está procurando?"/>

            <select class="escolha-estado" wire:model.live="estado">
                <option value="">Escolha um estado</option>
                @foreach($estados as $estado)
                    <option value="{{ $estado->sigla }}">{{ $estado->sigla }}</option>
                @endforeach
            </select>

            <select name="segmento" class="escolha-segmento" wire:model.live="segmento">
                <option value="">Escolha um segmento</option>
                @foreach($segmentos as $segmento)
                    <option value="{{ $segmento->codigo }}">{{ $segmento->nomeSegmento }}</option>
                @endforeach
            </select>

        </div>

    </div>

    <div class="resultados">

        @if($tipo === "Produtos")

            @include('pages.buscas.busca-produtos')

        @elseif($tipo === "Fábricas")

            @include('pages.buscas.busca-site')

        @endif

        <livewire:gerais.mapa-busca />

    </div>
</div>
