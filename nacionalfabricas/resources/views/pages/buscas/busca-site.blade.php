
<div class="bloco-sites">

    <div class="contador-resultados">

        <strong>{{count($sites)}}</strong> resultados encontrados

    </div>

    <ul class="lista-sites">

        @foreach($sites as $site)

            <li class="site">

                <div class="swiper mySwiper">

                    <div class="swiper-wrapper">

                        <img class="swiper-slide" src="{{asset('storage/images/sites/logos/'. $site-> logo) }}">

                        @foreach ($produtos as $produto)

                            @if( $produto->id_conta == $site->id_conta )

                                <img class="swiper-slide" src="{{asset('storage/images/thumbnails/' . $produto-> produto_thumbnail)}} ">

                            @endif

                        @endforeach

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div class="site-info">

                    <h3 class="nome">{{$site -> nome_industria}}</h3>

                    <span class="valor">Produtos principais: <strong>{{ $site -> produtos_tipo}}</strong></span>

                    <span class="valor">Área de Atuação: <strong>{{ $site -> local_atuacao}}</strong></span>

                    @foreach($cadastros as $cadastro)

                        @if($cadastro -> id_conta == $site -> id_conta )

                            <span class="valor">Estado: <strong>{{ $cadastro -> estado}}</strong></span>

                        @endif

                    @endforeach

                    @foreach($sites as $site)

                        @if($site -> id_conta == $site -> id_conta )

                            <a class="ver-site" href="{{ route('site', [ 'id' => $site -> id, 'slug' => $site -> slug])}}">Ver Página</a>

                        @endif

                    @endforeach

                </div>

            </li>

        @endforeach

        <div class="paginacao">
            {{$sites->appends(request()->query())->links()}}
        </div>
    </ul>

</div>

@push('scripts')

    <script>

        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

    </script>

    <script src="{{asset('js/buscas/busca-sites.js')}}" type="module" ></script>

@endpush
