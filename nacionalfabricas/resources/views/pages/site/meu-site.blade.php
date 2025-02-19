@extends('layouts.painel')
@section('content')

    <div class="meu-site">

        @if($site)

            <div class="bloco-imagens">

                <h1>Área de Imagens</h1>
                <hr>

                @include('pages.site.crop-banner-site')


            </div>

            @include('pages.site.atualizar-site')

        @else

            @include('pages.site.criar-site')

        @endif

    </div>

@endsection
