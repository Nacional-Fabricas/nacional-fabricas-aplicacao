<div>

    <div class="linha">

        <div class="grupo">

            <label for="">Categoria</label>
            <input wire:model.live="search" type="search" placeholder="Busque pelo nome da categoria">

        </div>

        <a href="{{route('criar_categoria')}}" class="criar-categoria">+ Criar categoria</a>

    </div>

    <div class="categorias">

        <ul>

            @foreach($categorias as $categoria)

                <li>

                    <input type="radio" id="categorias" name="categorias" value="{{ $categoria-> nome }}">
                    <label for="categories">{{ $categoria-> nome }}</label>

                </li>

            @endforeach

        </ul>

    </div>

</div>
