<div>
    <div class="lista-planos">

        <div class="periodo-plano">

            <input wire:model.live="periodo" type="checkbox" id="check-periodo" value="anual"/>

            <label for="check-periodo" class="switch">
                <span class="slider"></span>
            </label>

            <div>
                O período selecionado é:
                @if($periodo === 'anual')
                    Anual
                @else
                    Não selecionado
                @endif
            </div>

        </div>

        <!-- Lista de Planos -->
        @foreach($planos as $plano)
            <div class="linha">

                <div class="info">
                    <h1>{{ $plano -> nome }}</h1>
                    <span>{{ $plano -> descricao }}</span>
                </div>

                <div class="acoes">
                    <div class="preco">
                        R${{ number_format($plano -> preco, 2, ',', '.') }}
                    </div>

                    @if($dadosPlano && $dadosPlano->id == $plano->id)
                        <a class="btn-assinar">Seu plano</a>
                    @elseif($cliente)
                        <a href="{{ route('checkout', ['plano' => $plano->id, 'customer_id' => $cliente -> id ]) }}" class="btn-assinar">Assinar</a>
                    @else
                        <a href="{{ route('meu_plano') }}" class="btn-assinar">Assinar</a>
                    @endif
                </div>
            </div>
        @endforeach

    </div>
</div>
