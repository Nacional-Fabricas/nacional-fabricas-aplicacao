<div>

    <div class="linha">

        <div class="grupo">

            <label for="">Categoria</label>
            <input wire:model.live="search" type="search" placeholder="Busque pelo nome da categoria">

        </div>

        <a href="{{route('criar_categoria')}}" class="criar-categoria">+ Criar categoria</a>

    </div>

    <div class="categorias">

        <label for="categories">Categoria (obrigatório)</label>
        <select>
            <option value="">Selecione uma categoria</option>
            @foreach($categorias as $categoria)

                <option value="{{ $categoria-> nome }}">{{ $categoria-> nome }}</option>

            @endforeach
        </select>

    </div>

</div>
