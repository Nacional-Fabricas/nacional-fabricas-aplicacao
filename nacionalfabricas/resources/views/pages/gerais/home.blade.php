@extends('layouts.main')
@section('content')

        <div class="home bloco-pagina">

            <section class="swiper mySwiper">
                <div class="swiper-wrapper">

                    @foreach($sites as $site)
                        <div class="swiper-slide">

                            <a class="link-carrosel" href="{{ route('site', [ 'id' => $site->id, 'slug' => $site -> slug ]) }}">
                                <img class="img-carrosel" src="{{ asset('images/sites/backgrounds/' . $site->banner) }}" alt="Imagem de {{$site->nome}}">
                            </a>

                        </div>

                    @endforeach

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </section>

            <section class="sobre">

                <div class="sobre-cabecalho">

                    <h1>A primeira comunidade de <strong>Fabricantes Brasileiros!</strong></h1>

                    <h2>Aqui você cria seu <strong>site</strong>, monta sua <strong>vitrine digital</strong> e divulga sua <strong>fábrica.</strong></h2>

                    <span>

                        Somos a <strong>Nacional Fábricas</strong>, uma startup localizada em Santa Rosa de Viterbo - SP, com o objetivo de oferecer um ambiente exclusivo para fabricantes nacionais.

                    </span>

                    <span>

                        Nossa plataforma foi desenvolvida para ampliar a visibilidade das indústrias e facilitar a conexão com novos clientes.

                    </span>

                    <span>

                        Além disso, fornecemos uma <strong>divulgação estratégica</strong> para as empresas cadastradas, incluindo reposts nos stories, publicações em carrossel, estáticas e reels em nosso perfil, além de banners em nosso site.

                    </span>

                </div>

            </section>

            <section class="etapas">

                <h1>Cadastre sua fábrica agora mesmo em menos de <strong class="verde">2 minutos!</strong></h1>

                <span class="descricao">O passo a passo, de como é fácil fazer parte do maior ecossistemas de fábricas Nacionais</span>

                <div class="bloco-etapas">

                    <div class="etapa">

                        <div class="etapa-numero">1</div>

                        <div class="etapa-descricao">

                            <h3>Faça seu cadastro </h3>

                        </div>

                    </div>

                    <div class="etapa">

                        <div class="etapa-numero">2</div>

                        <div class="etapa-descricao">

                            <h3>Monte seu site </h3>

                        </div>

                    </div>

                    <div class="etapa">

                        <div class="etapa-numero">3</div>

                        <div class="etapa-descricao">

                            <h3>Crie sua vitrine digital em categorias</h3>

                        </div>

                    </div>

                    <div class="etapa">

                        <div class="etapa-numero">4</div>

                        <div class="etapa-descricao">

                            <h3>Adicione seus produtos</h3>

                        </div>

                    </div>

                </div>

            </section>

            <section class="vitrine-tutorial">

                <h1>Monte seu <span class="verde">Site</span> de produtos</h1>

                <div class="vitrine">

                    <img class="imagem-vitrine" src="{{asset('images/home/vitrine.png')}}" alt="Vitrine de produtos">

                </div>

                <div class="tutoriais">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kAa7SoFtaJ0?si=yq8vTEIeq8fQUraI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    <a class="btn-tutoriais" href="{{route('ajuda')}}">Ver tutoriais</a>

                </div>

            </section>

            <section class="ver-empresas">

                <div class="bloco-mapa" style="background-image: url('{{asset('images/home/google-maps.png')}}')">

                    <form class="busca-geral" action="{{route('busca_geral')}}" method="GET">

                        <h3>Busca <span class="verde">facilitada</span> </h3>

                        <h2>Faça sua busca</h2>

                        <div class="grupo">

                            <input name="busca" type="busca" placeholder="O que está procurando?">

                        </div>

                        <div class="grupo">

                            <select name="tipo" id="tipo">
                                <option value="Fábricas">Fábricas</option>
                                <option value="Produtos">Produtos</option>
                            </select>

                        </div>

                        <div class="grupo">
                            <input list="segmentos" placeholder="Segmentos" name="segmento" id="segmento">
                            <datalist id="segmentos">

                                @foreach ($segmentos as $segmento)

                                    <option value="{{$segmento -> nomeSegmento}}">

                                @endforeach

                            </datalist>
                        </div>

                        <div class="grupo">
                            <select id="estados" name="estado" id="estado">
                                <option>Selecione um Estado</option>
                                @foreach($estados as $estado)
                                    <option value="{{$estado->sigla}}">{{$estado->sigla}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="grupo">
                            <input list="cities" placeholder="Cidades" name="cidade" id="cidade">
                            <datalist id="cities"></datalist>
                        </div>

                        <button class="btn-busca" type="submit"><img src="{{asset('/icons/busca-white.svg')}}" alt=""> Buscar</button>

                    </form>

                </div>

                <div class="textos">

                    <h1>Encontre Indústrias Brasileiras com facilidade!</h1>

                    <p>

                        Através de nossa plataforma, você também pode localizar fabricantes de diversos segmentos em todo o Brasil, tornando a busca por fornecedores ainda mais prática e eficiente.

                    </p>

                    <a class="btn-parte" href="{{route('login')}}">Quero fazer parte</a>

                </div>

            </section>

        </div>

        @push('scripts')

            <script src="{{ asset('js/home/index.js') }}" type="module"></script>

        @endpush

@endsection
