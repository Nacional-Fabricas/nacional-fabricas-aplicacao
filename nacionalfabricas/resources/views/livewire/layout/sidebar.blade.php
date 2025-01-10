<div>

    <nav class="sidebarMenu" id="sidebarMenu">

        <div class="accordion accordion-flush" id="accordionFlushExample">

            @if ( $cadastro && $cadastro -> fabricante == 'Sim')

                <a href="{{route('painel')}}" class="link">

                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 30.372 31.971" font-weight="600">
                        <path id="Caminho_1943" data-name="Caminho 1943" d="M10.606,30.01V25.122a2.268,2.268,0,0,1,2.276-2.259h4.594a2.284,2.284,0,0,1,1.609.662,2.251,2.251,0,0,1,.667,1.6V30.01a1.94,1.94,0,0,0,.569,1.386,1.968,1.968,0,0,0,1.392.575h3.135a5.532,5.532,0,0,0,3.906-1.6A5.45,5.45,0,0,0,30.372,26.5V12.575a3.952,3.952,0,0,0-1.431-3.041L18.278,1.08a4.951,4.951,0,0,0-6.312.114L1.546,9.535A3.955,3.955,0,0,0,0,12.575V26.486a5.5,5.5,0,0,0,5.525,5.485H8.588a1.968,1.968,0,0,0,1.975-1.947Z" transform="translate(0 0)" fill="#fff">
                        </path>
                    </svg>

                    <span class="nomeLink">Inicio</span>

                </a>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 31.971 31.971">
                            <path id="\xC1REA_DE_VENDAS" data-name="\xC1REA DE VENDAS" d="M15.985,25.976A12.988,12.988,0,1,0,3,12.988,12.986,12.986,0,0,0,15.985,25.976ZM14.6,6.082V5.033A1.034,1.034,0,0,1,15.636,4h.693a1.034,1.034,0,0,1,1.037,1.037V6.094a4.923,4.923,0,0,1,2.685.962.7.7,0,0,1,.075,1.068l-1.018.968a.7.7,0,0,1-.874.062,2.055,2.055,0,0,0-1.111-.318H14.693a1.086,1.086,0,0,0-1.018,1.143,1.128,1.128,0,0,0,.756,1.1l3.89,1.168A3.912,3.912,0,0,1,21.049,16a3.85,3.85,0,0,1-3.69,3.9v1.049a1.034,1.034,0,0,1-1.037,1.037h-.693a1.034,1.034,0,0,1-1.037-1.037V19.882a4.923,4.923,0,0,1-2.685-.962.7.7,0,0,1-.075-1.068l1.018-.968a.7.7,0,0,1,.874-.062,2.055,2.055,0,0,0,1.111.318h2.429A1.086,1.086,0,0,0,18.283,16a1.128,1.128,0,0,0-.756-1.1l-3.89-1.168a3.912,3.912,0,0,1-2.729-3.753,3.854,3.854,0,0,1,3.69-3.9Zm15.373,15.9H27.943a15.134,15.134,0,0,1-4.558,4h3.984a.557.557,0,0,1,.6.5v1a.557.557,0,0,1-.6.5H4.6a.557.557,0,0,1-.6-.5v-1a.557.557,0,0,1,.6-.5H8.58a15.209,15.209,0,0,1-4.558-4H2a2,2,0,0,0-2,2v5.995a2,2,0,0,0,2,2H29.973a2,2,0,0,0,2-2V23.978A2,2,0,0,0,29.973,21.98Z" fill="#fff">
                            </path>
                        </svg>

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Área de venda

                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 14.546 8.219" class="sidebar-item__chevron">
                                <path id="Icon_small-down" data-name="Icon/small-down" d="M7.273,4.912,2.483.4A1.519,1.519,0,0,0,.426.4a1.314,1.314,0,0,0,0,1.937L6.244,7.818a1.519,1.519,0,0,0,2.057,0L14.12,2.338A1.314,1.314,0,0,0,14.12.4a1.519,1.519,0,0,0-2.057,0Z" fill="#fff">
                                </path>
                            </svg>

                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li id="itemMenu"> <a href="{{route('lista_cotacoes')}}">Lista de orçamentos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            @endif

            <div class="accordion-item">
                <h2 class="accordion-header">

                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 28.417 31.574">
                        <path id="Combined-Shape" d="M14.216,0A7.88,7.88,0,0,1,22.1,7.537h-.041a.793.793,0,0,1-.069.356h.247c1.921,0,3.933,1.332,4.74,4.546l.088.379L28.28,22.6c.874,6.237-2.539,8.861-7.194,8.972l-.312,0H7.686c-4.731,0-8.377-1.724-7.575-8.551L.166,22.6l1.228-9.78C2,9.357,4.031,7.992,5.99,7.9l.217-.005H6.33a1.024,1.024,0,0,1,0-.356A7.88,7.88,0,0,1,14.216,0ZM9.625,13.15a1.437,1.437,0,1,0,1.4,1.436h0l-.011-.18A1.41,1.41,0,0,0,9.625,13.15Zm9.139,0a1.437,1.437,0,1,0,1.4,1.436A1.416,1.416,0,0,0,18.764,13.15ZM14.154,2.056a5.491,5.491,0,0,0-5.5,5.481,1.025,1.025,0,0,1,0,.356H19.723a1.023,1.023,0,0,1-.069-.356A5.491,5.491,0,0,0,14.154,2.056Z" fill="#fff">
                        </path>
                    </svg>

                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Área de compra
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 14.546 8.219" class="sidebar-item__chevron">
                            <path id="Icon_small-down" data-name="Icon/small-down" d="M7.273,4.912,2.483.4A1.519,1.519,0,0,0,.426.4a1.314,1.314,0,0,0,0,1.937L6.244,7.818a1.519,1.519,0,0,0,2.057,0L14.12,2.338A1.314,1.314,0,0,0,14.12.4a1.519,1.519,0,0,0-2.057,0Z" fill="#fff">
                            </path>
                        </svg>
                    </button>

                </h2>

                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                    <div class="accordion-body">
                        <ul>
                            <li id="itemMenu"> <a href="{{route('minhas_compras')}}">Minhas compras</a></li>
                        </ul>
                    </div>

                </div>

            </div>

            @if ($cadastro && $cadastro -> fabricante === 'Sim')

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 35.971 31.971">
                            <path id="PRODUTOS" d="M18.372,17.341a9.1,9.1,0,0,1,3.091,1.542l10.085-3.36a1,1,0,0,0,.631-1.261L28.407,2.947a1,1,0,0,0-1.261-.631L23.33,3.591,25.4,9.8l-3.791,1.255L19.54,4.846l-3.847,1.28a1,1,0,0,0-.631,1.261Zm17.548,3.041-.637-1.9a1,1,0,0,0-1.261-.631L20.689,22.3a5.967,5.967,0,0,0-4.59-2.311L9.892,1.368A2,2,0,0,0,7.993,0H1A1,1,0,0,0,0,1V3A1,1,0,0,0,1,4H6.551l5.758,17.279a5.953,5.953,0,0,0-2.248,5.651,5.992,5.992,0,0,0,11.909-.837l13.32-4.446A1,1,0,0,0,35.919,20.383ZM15.986,28.975a3,3,0,1,1,3-3A3,3,0,0,1,15.986,28.975Z" fill="#fff">
                            </path>
                        </svg>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Produtos
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 14.546 8.219" class="sidebar-item__chevron">
                                <path id="Icon_small-down" data-name="Icon/small-down" d="M7.273,4.912,2.483.4A1.519,1.519,0,0,0,.426.4a1.314,1.314,0,0,0,0,1.937L6.244,7.818a1.519,1.519,0,0,0,2.057,0L14.12,2.338A1.314,1.314,0,0,0,14.12.4a1.519,1.519,0,0,0-2.057,0Z" fill="#fff">
                                </path>
                            </svg>
                        </button>
                    </h2>

                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>

                                <li id="itemMenu"> <a href="{{route('lista_produtos')}}">Lista de produtos</a></li>
                                <li id="itemMenu"> <a href="{{route('criar_produto')}}">Criar produtos</a></li>
                                <li id="itemMenu"> <a href="{{route('categorias')}}">Categorias</a></li>
                                <li id="itemMenu"> <a href="{{route('criar_categoria')}}">Criar categorias</a></li>

                            </ul>
                        </div>
                    </div>

                </div>

            @endif

            <div class="accordion-item">
                <h2 class="accordion-header">

                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 37.983 31.574">
                        <path id="MEU_PERFIL" data-name="MEU PERFIL" d="M37.177,7.314l-4-6.389A1.974,1.974,0,0,0,31.5,0H6.59A1.974,1.974,0,0,0,4.918.925l-4,6.389c-2.066,3.3-.234,7.887,3.626,8.412a6.409,6.409,0,0,0,.845.056A6.089,6.089,0,0,0,9.938,13.74a6.094,6.094,0,0,0,9.1,0,6.094,6.094,0,0,0,9.1,0,6.109,6.109,0,0,0,4.551,2.041,6.34,6.34,0,0,0,.845-.056c3.873-.518,5.71-5.106,3.638-8.412ZM32.706,17.76a7.824,7.824,0,0,1-1.819-.234v6.155H7.206V17.526a8.17,8.17,0,0,1-1.819.234,8.321,8.321,0,0,1-1.11-.074,7.755,7.755,0,0,1-1.011-.222V29.6a1.971,1.971,0,0,0,1.973,1.973H32.867A1.971,1.971,0,0,0,34.84,29.6V17.464a6.3,6.3,0,0,1-1.011.222,8.576,8.576,0,0,1-1.122.074Z" fill="#fff">
                        </path>
                    </svg>

                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Minha conta
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 14.546 8.219" class="sidebar-item__chevron">
                            <path id="Icon_small-down" data-name="Icon/small-down" d="M7.273,4.912,2.483.4A1.519,1.519,0,0,0,.426.4a1.314,1.314,0,0,0,0,1.937L6.244,7.818a1.519,1.519,0,0,0,2.057,0L14.12,2.338A1.314,1.314,0,0,0,14.12.4a1.519,1.519,0,0,0-2.057,0Z" fill="#fff">
                            </path>
                        </svg>
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <ul>
                            <li id="itemMenu"> <a href="{{route('dados_cadastrais')}}">Dados Cadastrais</a></li>

                            @if ($cadastro && $cadastro -> fabricante === 'Sim')

                                <li id="itemMenu"> <a href="{{route('meu_site')}}">Meu site</a></li>

                            @endif

                            <li id="itemMenu"> <a href="{{route('meu_plano')}}">Meu plano</a></li>

                            @if($cadastro && $assinatura -> id_plano > 2 && $time != null  )

                                <li id="itemMenu"> <a href="/teams/{{$time -> id}}">Meu time</a></li>

                            @endif

                            <li id="itemMenu"> <a href="{{route('suporte')}}">Suporte</a></li>

                        </ul>

                    </div>
                </div>
            </div>

            <div class="accordion-item sidebarMobile">

                <h2 class="accordion-header">

                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 92 92" id="menu">
                        <path d="M78 23.5H14c-3.6 0-6.5-2.9-6.5-6.5s2.9-6.5 6.5-6.5h64c3.6 0 6.5 2.9 6.5 6.5s-2.9 6.5-6.5 6.5zM84.5 46c0-3.6-2.9-6.5-6.5-6.5H14c-3.6 0-6.5 2.9-6.5 6.5s2.9 6.5 6.5 6.5h64c3.6 0 6.5-2.9 6.5-6.5zm0 29c0-3.6-2.9-6.5-6.5-6.5H14c-3.6 0-6.5 2.9-6.5 6.5s2.9 6.5 6.5 6.5h64c3.6 0 6.5-2.9 6.5-6.5z" fill="#fff">
                        </path>
                    </svg>

                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">

                        Menu Principal

                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 14.546 8.219" class="sidebar-item__chevron">
                            <path id="Icon_small-down" data-name="Icon/small-down" d="M7.273,4.912,2.483.4A1.519,1.519,0,0,0,.426.4a1.314,1.314,0,0,0,0,1.937L6.244,7.818a1.519,1.519,0,0,0,2.057,0L14.12,2.338A1.314,1.314,0,0,0,14.12.4a1.519,1.519,0,0,0-2.057,0Z" fill="#fff">
                            </path>
                        </svg>

                    </button>

                </h2>

                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                    <div class="accordion-body">

                        <ul>

                            <li id="itemMenu"> <a href="{{route('home')}}">Página Inicial</a></li>
                            <li id="itemMenu"> <a href="{{route('funcionalidades')}}">Funcionalidades</a></li>
                            <li id="itemMenu"> <a href="{{route('planos')}}">Planos</a></li>
                            <li id="itemMenu"> <a href="{{route('contato')}}">Contato</a></li>
                            <li id="itemMenu"> <a href="{{route('ajuda')}}">Ajuda</a></li>

                        </ul>

                    </div>

                </div>

            </div>

            <a href="/user/profile"  class="link">

                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 30.177 31.766">
                    <path id="CONFIGURA\xC7\xD5ES" d="M16.228,0a3.418,3.418,0,0,1,2.889,1.652,2.823,2.823,0,0,1,.438,1.684,2.456,2.456,0,0,0,.373,1.4,3.134,3.134,0,0,0,4.09,1.1A3.355,3.355,0,0,1,28.58,7.036h0L29.667,8.91a3.22,3.22,0,0,1-1.2,4.495,2.894,2.894,0,0,0-1.039,3.971,2.457,2.457,0,0,0,1.006,1.016,3.655,3.655,0,0,1,1.315,1.255,3.205,3.205,0,0,1-.032,3.256h0L28.58,24.809a3.331,3.331,0,0,1-4.593,1.175,2.589,2.589,0,0,0-1.428-.365,3.031,3.031,0,0,0-3,2.891,3.284,3.284,0,0,1-3.36,3.256H13.988a3.288,3.288,0,0,1-3.376-3.256,3.005,3.005,0,0,0-2.987-2.891,2.519,2.519,0,0,0-1.428.365,3.432,3.432,0,0,1-1.721.476,3.389,3.389,0,0,1-2.889-1.652h0L.467,22.9a3.168,3.168,0,0,1-.032-3.256,3.364,3.364,0,0,1,1.3-1.255,2.6,2.6,0,0,0,1.023-1.016A2.913,2.913,0,0,0,1.7,13.405,3.247,3.247,0,0,1,.5,8.91h0L1.587,7.036A3.374,3.374,0,0,1,6.164,5.829a3.118,3.118,0,0,0,4.074-1.1,2.455,2.455,0,0,0,.373-1.4,2.835,2.835,0,0,1,.454-1.684A3.486,3.486,0,0,1,13.939,0h2.289Zm-1.12,11.4a4.489,4.489,0,1,0,0,8.974,4.487,4.487,0,1,0,0-8.974Z" transform="translate(0)" fill="#fff">
                    </path>
                </svg>
                <span class="nomeLink">
                   Configurações
                </span>

            </a>

            @if(\Illuminate\Support\Facades\Auth::user() -> role == "root")

                <a href="{{route('controle_geral')}}"  class="link">

                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512" id="execution">
                        <path fill="#fff" d="M301.08 80.202a180.296 180.296 0 0 1 47.332 19.628l59.247-42.896 47.408 47.408-42.897 59.248a180.46 180.46 0 0 1 19.625 47.331L504 222.477v67.045l-72.202 11.557a180.296 180.296 0 0 1-19.628 47.332l42.896 59.247-47.408 47.408-59.247-42.897a180.424 180.424 0 0 1-47.331 19.624L289.523 504h-67.045l-11.557-72.202a180.296 180.296 0 0 1-47.332-19.628l-59.247 42.896-47.408-47.408 42.897-59.247a180.46 180.46 0 0 1-19.625-47.331L8 289.522v-67.045l72.207-11.559a180.354 180.354 0 0 1 19.623-47.331L56.933 104.34l47.408-47.408 59.245 42.894A180.339 180.339 0 0 1 210.92 80.2L222.477 8h67.045l11.558 72.202zM256 135.09c-66.777 0-120.91 54.133-120.91 120.91S189.223 376.91 256 376.91c66.777 0 120.91-54.133 120.91-120.91S322.777 135.09 256 135.09zm-72.471 129.136 47.656 47.655c6.948 6.948 18.214 6.948 25.162 0 34.135-34.134 39.804-40.551 73.777-74.863 6.909-6.949 6.879-18.183-.07-25.093-6.948-6.91-18.182-6.879-25.092.069l-61.224 62.116-35.047-35.047c-6.948-6.948-18.214-6.948-25.162 0-6.949 6.949-6.949 18.215 0 25.163z" clip-rule="evenodd">
                        </path>
                    </svg>

                    <span class="nomeLink"> Administrador </span>

                </a>

            @endif

            <form action="/logout" method="POST">
                @csrf
                <a class="link"
                   href="/logout"
                   onclick="event.preventDefault();
                            this.closest('form').submit();"
                >
                    <svg id="SAIR" xmlns="http://www.w3.org/2000/svg" width="33.005" height="31.766" viewBox="0 0 33.005 31.766">
                        <g id="Logout">
                            <path id="Caminho_1938" data-name="Caminho 1938" d="M15.077,0a7.115,7.115,0,0,1,7.159,7.052h0V14.66h-9.7a1.223,1.223,0,1,0,0,2.446h9.7V24.7a7.136,7.136,0,0,1-7.191,7.068H7.175A7.119,7.119,0,0,1,0,24.714H0V7.068A7.136,7.136,0,0,1,7.191,0h7.886ZM26.271,10.4A1.213,1.213,0,0,1,28,10.388h0L32.64,15.01a1.213,1.213,0,0,1,.365.874,1.177,1.177,0,0,1-.365.858h0L28,21.363a1.224,1.224,0,1,1-1.731-1.731h0l2.541-2.525H22.236V14.66h6.575l-2.541-2.525A1.227,1.227,0,0,1,26.271,10.4Z" transform="translate(0 0)" fill="#fff">
                            </path>
                        </g>
                    </svg>

                    <span class="nomeLink">

                   Sair

                </span>

                </a>

            </form>

        </div>

    </nav>

</div>
