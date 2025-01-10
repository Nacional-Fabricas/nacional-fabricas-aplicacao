<div>

    <div class="bloco-pesquisa">

        <form wire:submit.prevent="buscar" id="formPesquisa" class="formulario-pesquisa">

            <img id="close" onclick="pesquisaMobile()" src="{{ asset('icons/close.svg') }}" />

            <div class="linha">
                <div class="grupo">
                    <select wire:model="tipo" id="tipo">
                        <option value="Produtos">Produtos</option>
                        <option value="Fábricas">Fábricas</option>
                    </select>
                </div>

                <div class="grupo">
                    <input wire:model.defer="busca" type="text" class="buscaTexto" placeholder="O que está procurando?" />
                </div>

                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg>
                </button>
            </div>

            <div class="linha">
                <p id="mobileAviso">Informações Extras</p>

                <div class="grupo">
                    <input list="estados" placeholder="Estados" wire:model.defer="estado" id="estado">
                    <datalist id="estados">
                        @foreach($estados as $estado)
                            <option value="{{ $estado->sigla }}">
                        @endforeach
                    </datalist>
                </div>

                <div class="grupo">
                    <input list="cities" placeholder="Cidades" wire:model.defer="cidade" id="cidade">
                    <datalist id="cities"></datalist>
                </div>

                <div class="grupo">
                    <input list="segmentos" placeholder="Segmentos" wire:model.defer="segmento" id="segmento">
                    <datalist id="segmentos">
                        @foreach ($segmentos as $segmento)
                            <option value="{{ $segmento->nomeSegmento }}">
                        @endforeach
                    </datalist>
                </div>
            </div>
        </form>
    </div>

    <div class="resultados">
        @if($tipo === "Produtos")
            <livewire:busca.busca-produtos />
        @elseif($tipo === "Fábricas")
            <livewire:busca.busca-sites />
        @endif

        <livewire:gerais.mapa-busca />
    </div>
</div>
