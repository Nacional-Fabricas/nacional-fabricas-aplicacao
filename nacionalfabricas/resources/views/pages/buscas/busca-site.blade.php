
<div class="bloco-sites">

    <div class="contador-resultados">

        <strong>{{count($sites)}}</strong> resultados encontrados

    </div>

    <ul class="lista-sites">

        @foreach($sites as $paginaRetornada)

            {{--

            Layout do Site antigo

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
             --}}

            {{-- Começa o Layout por páginas do instagram aqui --}}
            <a href="https://www.instagram.com/{{$paginaRetornada -> username}}" target="_blank" rel="noreferrer nofollow" class="pagina">

                <img class="foto-perfil" src="{{ asset('storage/'.$paginaRetornada->image) }}" alt="Foto de perfil {{$paginaRetornada->nome}} no Instagram" />
                <h1 class="titulo-pagina">{{$paginaRetornada -> nome }}</h1>

                <span class="usuario-instagram">{{'@'.$paginaRetornada -> username}}</span>

                <span class="biografia">{{$paginaRetornada->biografia}}</span>
                {{--
                <a class="usuario-instagram" href="https://www.instagram.com/{{$paginaRetornada -> username}}" target="_blank" rel="noreferrer nofollow">Visitar {{'@'.$paginaRetornada -> username}}</a>
                --}}
            </a>

        @endforeach

        <div class="paginacao">

            {{$sites->appends(request()->query())->links()}}

        </div>

    </ul>

</div>

