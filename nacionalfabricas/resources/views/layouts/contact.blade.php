<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Nacional Fábricas é uma plataforma inovadora desenvolvida em Laravel, projetada para simplificar e otimizar as negociações entre fábricas nacionais e outras empresas. Com um modelo de negócios B2F (Business-to-Factory), o aplicativo serve como um espaço centralizado onde fábricas podem anunciar e exibir seus produtos, enquanto outras empresas têm a oportunidade de solicitar cotações para esses produtos.">
        <meta name="keywords" content="fábricas, fábricas nacionais, produtos nacionais, negociações B2F, negociações entre fábricas, cotações de produtos, anúncio de produtos, plataforma de negociação, indústria nacional, produtos fabricados localmente, nacional fábricas">


        <title>Nacional Fábricas</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '6829028247202649');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=6829028247202649&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
    </head>
    <body>

        <livewire:registro />

        <header>

            <livewire:layout.header />

        </header>

        <main>

            @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif

            @yield('content')

        </main>

        <footer class="contatoFooter">

            <div class="block">

                <div class="group">

                    <h2>Endereço</h2>

                    <div class="infoField">
                        <span class="info">Rod. Padre Donizzeti SP332 , KM 301, Distrito Industrial.</span>
                        <span class="info">Santa Rosa de Viterbo - SP</span>
                    </div>

                </div>


                <div class="group">

                    <h2>Contato</h2>

                    <div class="infoField">
                        <span class="info">Email: contato@nacionalfabricas.com.br</span>
                        <span class="info">Telefone: +55 16 98180-8581</span>
                    </div>

                </div>
            </div>

            <div class="block">


                <div class="group">

                    <h2>Atendimento</h2>

                    <div class="infoField">
                        <span class="info">De Segunda à Sexta</span>
                        <span class="info">Das 7:00 às 17:00</span>
                    </div>

                </div>


                <div class="group">

                    <h2><a href="/planos">Planos</a></h2>

                </div>

                <div class="group">

                    <h2><a href="/termos-de-uso">Termos de Uso</a></h2>

                </div>

                <div class="group">

                    <h2><a href="/politica-de-privacidade">Política de Privacidade</a></h2>

                </div>


            </div>

            <div class="block">

                <div class="followUs">

                    <h1>Nos siga nas redes sociais!</h1>

                    <i class="fa-solid fa-arrow-right"></i>

                </div>

            </div>

            <div class="block">

                <ul class="listIcons">

                    <li class="icons"><a target="_blank" href="https://www.facebook.com/nacionalfabricas"><img src="/images/facebook-white.png"  alt=""></a></li>

                    <li class="icons"><a target="_blank" href="https://www.instagram.com/nacionalfabricas"><img src="/images/instagram-white.png" alt=""></a></li>

                    {{--

                    <li class="icons"><img src="/images/twitter-white.png" alt=""></li>

                    <li class="icons"><img src="/images/youtube-white.png" alt=""></li>

                    --}}


                </ul>

            </div>

        </footer>

        {{-- Scripts --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        {{-- Scripts das páginas --}}
        <script src="{{ asset('js/index.js') }}" type="module"></script>
        @stack('scripts')

    </body>
</html>
