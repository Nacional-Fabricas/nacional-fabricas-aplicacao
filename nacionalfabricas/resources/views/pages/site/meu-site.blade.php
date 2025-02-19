@extends('layouts.painel')
@section('content')

    <div class="configura-site">

        @if($site)

            <div class="bloco-imagens">

                <h1>Área de Imagens</h1>
                <hr>

                <div class="linha">

                    @include('pages.site.crop-banner-site')

                    @include('pages.site.crop-logo-site')

                </div>

                <div class="destaques">

                    @include('pages.site.crop-destaques-site')

                </div>

            </div>

            @include('pages.site.atualizar-site')

        @else

            @include('pages.site.criar-site')

        @endif

    </div>

@endsection
