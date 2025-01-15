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
                        R${{ number_format($plano -> valor, 2, ',', '.') }}
                    </div>

                    @if($meuPlano && $meuPlano -> id_plano == $plano->id)
                        <a class="btn-assinar">Seu plano</a>
                    @elseif($cliente)
                        <a href="{{ route('checkout', ['plano' => $plano->id, 'customer_id' => $cliente -> asaas_id, 'cadastro_id' => $cadastro -> id  ]) }}" class="btn-assinar">Assinar</a>
                    @else
                        <a href="{{ route('meu_plano') }}" class="btn-assinar">Assinar</a>
                    @endif
                </div>

            </div>

        @endforeach

    </div>
</div>
