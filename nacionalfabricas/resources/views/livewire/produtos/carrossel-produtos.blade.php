<div>

    <div class="bloco-carrossel">

        @foreach($produtos as $produto)
            <div class="produto item">

                <img class="thumbnail" src="{{ asset('images/thumbnails/'. $produto->produto_thumbnail) }}">

                <h3>{{ $produto->produto_nome }}</h3>

                <div class="acoes">
                    @if($produto->id_conta != Auth::id())
                        <form action="{{route('adicionar_cotacao')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$produto -> id}}">
                            <input type="hidden" name="name" value="{{$produto -> produto_nome}}">
                            <input type="hidden" name="sku" value="{{$produto -> sku}}">
                            <input type="hidden" name="ean" value="{{$produto -> ean}}">
                            <input type="hidden" name="id_receptor" value="{{$produto -> id_conta}}">
                            <input type="hidden" name="id_produto" value="{{$produto -> id}}">
                            <input type="hidden" name="price" value="1">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="image" value="{{$produto-> produto_thumbnail}}">

                            <button class="btn-simples">Cotar produto</button>
                        </form>
                    @else
                        <a class="btn-simples" href="{{ route('editar_produto', ['id' => $produto->id]) }}">Editar</a>
                    @endif
                    <a class="btn-simples" href="{{ route('produto', ['id' => $produto->id]) }}">Ver produto</a>
                </div>
            </div>
        @endforeach

    </div>

</div>
