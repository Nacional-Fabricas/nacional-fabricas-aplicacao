@extends('layouts.main')
@section('content')

<div class="cotacoes-produtos">

    @foreach($produtoCotacao as $produto)

    <form action="{{route('adicionar_cotacao')}}" class="formulario" method="post" enctype="multipart/form-data">
      @csrf

      <h3>Cotar produto: {{$produto -> product_name}}</h3>

      <div class="info">

        <img src="{{ asset('images/thumbnails/'.$produto -> product_thumbnail)}}" alt="">

        <ul class="lista-iinformacoes">

            <li class="informacoes">
                <span class="label"><strong>Nome do produto</strong></span>
                <span class="value">{{$produto -> product_name}}</span>
            </li>

            <li class="informacoes">
                <span class="label"><strong>SKU</strong></span>
                <span class="value">{{$produto -> sku}}</span>
            </li>

            <li class="informacoes">
                <span class="label"><strong>EAN</strong></span>
                <span class="value">{{$produto -> ean}}</span>
            </li>

          @foreach ($sites as $site)

            <li class="informacoes">
                <span class="label"><strong>Fabricante</strong></span>
                <span class="value">{{$site -> nome_industria}}</span>
            </li>

          <input type="hidden" value="{{$site -> id_conta}}" name="id_receptor">

          @endforeach

        </ul>

      </div>

      <div class="grupo">

        <label for="quantity">Quantidade</label>
        <input name="quantity"  min="{{$produto -> quantity }}" placeholder="Quantidade mínima de {{$produto -> quantity }}" type="number">
        <input type="hidden" value="{{$produto -> id}}" name="product_id">

      </div>

      <div class="grupo">

        <label for="observacao">Oberservação (Opcional)</label>
        <textarea name="observacao" type="text"></textarea>

      </div>

      <button type="submit" class="btn-form">Finalizar cotação</button>

    </form>

    @endforeach

</div>

@endsection
