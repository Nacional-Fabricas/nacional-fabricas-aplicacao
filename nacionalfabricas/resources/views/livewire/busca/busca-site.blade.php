<div>

    <div class="menu-site">

        <div class="menu">

            <button class="item-menu" wire:click="resetSearch">Nossa Vitrine</button>

            @foreach($categorias as $categoria)

                <button class="item-menu" wire:click="selectCategory('{{ $categoria->id }}')">{{ $categoria->nome }}</button>

            @endforeach

        </div>

        <input class="buscar" type="text" wire:model.live="buscar" placeholder="O que está procurando?">

    </div>

    @if($buscar != '' || $categoriaEscolhida)

        @include('pages.site.busca-site')

    @else

        @include('pages.site.vitrine')

    @endif

</div>
