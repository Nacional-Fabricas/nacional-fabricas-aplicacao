@extends('layouts.main')
@section('content')

    <div class="sobre-nos bloco-pagina">

        <div class="filtro-padrao">

            <div class="filtro-opcoes">

                <div class="texto-filtro">

                    <h1>Fábricas brasileiras a um clique,</h1>

                    <h1 class="verde">cadastre a sua!</h1>

                    <h2>

                        Encontre e negocie online com as melhores fábricas nacionais.
                        <span>Busque já!</span>

                    </h2>

                </div>

                <form action="{{route('busca_geral')}}" method="get">

                    <div class="linha">

                        <div class="grupo lg">

                            <input name="busca" type="busca" placeholder="O que está procurando?">

                        </div>

                        <div class="grupo sm">

                            <select name="tipo" id="tipo">
                                <option value="Fábricas">Fábricas</option>
                                <option value="Produtos">Produtos</option>
                            </select>

                        </div>

                    </div>

                    <div class="linha">

                        <div class="grupo sm">
                            <input list="segmentos" placeholder="Segmentos" name="segmento" id="segmento">
                            <datalist id="segmentos">

                                @foreach ($segmentos as $segmento)

                                    <option value="{{$segmento -> nomeSegmento}}">

                                @endforeach

                            </datalist>
                        </div>

                        <div class="grupo md">
                            <input list="estados" placeholder="Estados" name="estado" id="estado">
                            <datalist id="estados">
                                @foreach($estados as $estado)
                                    <option value="{{$estado->sigla}}">
                                @endforeach
                            </datalist>
                        </div>

                        <div class="grupo md">
                            <input list="cities" placeholder="Cidades" name="cidade" id="cidade">
                            <datalist id="cities"></datalist>
                        </div>

                    </div>

                    <button class="btn-busca" type="submit"><img src="{{asset('/icons/busca-white.svg')}}" alt=""> Buscar</button>

                </form>

                @if( $user === 0 )

                    <span class="reg">Não cadastrou sua empresa ainda? <a onclick="registrar()" class="roxo">Cadastre-se GRÁTIS!</a></span>

                @else

                    <span class="reg">Não cadastrou sua empresa ainda? <a href="{{route('meu_site')}}" class="roxo">Cadastre-se GRÁTIS!</a></span>

                @endif

            </div>

            <div class="fundo-filtro">

                <img src="{{asset('/images/home_banner.png')}}" alt="">

            </div>

        </div>

        <ul class="cartoes-beneficios">

            <li>

                <img src="{{asset('icons/chart-bar.svg')}}" alt="">
                <h3>Apoie quem produz</h3>
                <p>Encontre fabricantes nacionais de uma maneira <strong>rápida.</strong></p>

            </li>

            <li>

                <img src="{{asset('icons/invoice.svg')}}" alt="">
                <h3>Orçamentos simples</h3>
                <p>Faça orçamentos e negocie <strong>direto</strong> com as fábricas de maneira <strong>online.</strong></p>

            </li>

            <li>

                <img src="{{asset('icons/change.svg')}}" alt="">
                <h3>Experimente Grátis</h3>
                <p>Cadastre sua empresa e tenha <strong>resultados incríveis!</strong></p>

            </li>

            <li>

                <img src="{{asset('icons/market.svg')}}" alt="">
                <h3>Monte sua vitrine!</h3>
                <p>Monte sua vitrine e seja destaque na internet. <strong>Exclusivo para fabricantes!</strong></p>

            </li>

        </ul>

        <div class="sobre">

            <div class="sobre-cabecalho">

                <h1>Nacional Fábricas, a plataforma <span class="verde">B2F!</span></h1>

                <h2>Aqui você encontra os <strong> melhores produtos</strong> de fornecedores locais</h2>

                <span>

            <p>Com o modelo B2F (Business to Factory) os clientes têm acesso a uma ampla variedade de produtos de alta qualidade, produzidos por fornecedores confiáveis.</p>

            <p class="hiddenMobile">Não perca mais tempo procurando por fabricantes. Acesse agora mesmo a plataforma Nacional Fábricas e tenha acesso a indústria de transformação brasileira.</p>

        </span>

                <a href="{{route('home')}}" class="roxo">Conhecer mais sobre o <span>Nacional Fábricas ></span></a>

            </div>

            <div class="sobre-conteudo">

                <div class="texto">

                    <h3>Tá esperando o quê?</h3>

                    <h1>Sua empresa ainda não é cadastrada?</h1>

                    <p>Junte-se ao HUB social de empresas brasileiras que mais cresce.
                        Amplie seu alcance de mercado, explore novas oportunidades de negócios e estabeleça parcerias valiosas.</p>

                    <a href="{{route('home')}}">Experimente grátis</a>

                </div>

                <div class="background-image">
                    <img src="{{asset('images/working.png')}}" alt="">
                </div>

            </div>

        </div>

        @if($depoimentos > 0)

            <div class="depoimentos">

                <div class="testimonialHeader">

                    <div class="info">

                        <h3>Como a plataforma ajuda você?</h3>
                        <h1>Veja os depoimentos de quem já utiliza a Nacional Fábricas!</h1>

                    </div>
                    <div class="toSide">

                        Arrasta para o lado <img src="{{asset('icons/chevron-right.svg')}}" alt="">

                    </div>

                </div>

                <div class="testimonialContent">

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <img class="profilePhoto" src="{{asset('images/client-nacional.png')}}" alt="">

                                <div class="textos">

                                    <img src="{{asset('images/quotes.png')}}" alt="">

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus eu nisl sed mollis.
                                        Pellentesque lobortis tortor eu nunc interdum dapibus. Phasellus semper magna eu malesuada dictum</p>

                                    <h3>Luciel</h3>

                                    <span>ww.chiaperini.com.br</span>

                                </div>

                            </div>

                            <div class="carousel-item">
                                <img class="profilePhoto" src="{{asset('images/client-nacional.png')}}" alt="">

                                <div class="textos">

                                    <img src="{{asset('images/quotes.png')}}" alt="">

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus eu nisl sed mollis.
                                        Pellentesque lobortis tortor eu nunc interdum dapibus. Phasellus semper magna eu malesuada dictum</p>

                                    <h3>Luciel</h3>

                                    <span>ww.chiaperini.com.br</span>

                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        @endif

    </div>

    @if(count($produtos) > 0)

        <div class="produtos">

            <div class="cabecalho-produtos">

                <h3>Encontre produtos fabricados no <span>Brasil</span></h3>

            </div>

            <div class="bloco-produtos">

                <livewire:produtos.carrossel-produtos />

            </div>

        </div>

    @endif

@endsection
