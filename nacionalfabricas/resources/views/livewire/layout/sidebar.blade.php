<div>

    <nav id="sidebar">

        <ul>

            <li>
                <img class="logo" src="{{asset('images/logo-branca.png')}}" alt="Nacional Fábricas">
                <button onclick=toggleSidebar() id="toggle-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/></svg>
                </button>
            </li>

            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-200h120v-200q0-17 11.5-28.5T400-440h160q17 0 28.5 11.5T600-400v200h120v-360L480-740 240-560v360Zm-80 0v-360q0-19 8.5-36t23.5-28l240-180q21-16 48-16t48 16l240 180q15 11 23.5 28t8.5 36v360q0 33-23.5 56.5T720-120H560q-17 0-28.5-11.5T520-160v-200h-80v200q0 17-11.5 28.5T400-120H240q-33 0-56.5-23.5T160-200Zm320-270Z"/></svg>
                    <span>Nacional Fábricas</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('busca_geral', ['tipo' => 'Fábricas'])}}">Indústrias Parceiras</a></li>
                        <li><a href="{{route('planos')}}">Planos</a></li>
                        <li><a href="{{route('contato')}}">Contato</a></li>
                        <li><a href="{{route('ajuda')}}">Ajuda</a></li>
                    </div>
                </ul>
            </li>

            <li>
                <a href="{{route('painel')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M520-640v-160q0-17 11.5-28.5T560-840h240q17 0 28.5 11.5T840-800v160q0 17-11.5 28.5T800-600H560q-17 0-28.5-11.5T520-640ZM120-480v-320q0-17 11.5-28.5T160-840h240q17 0 28.5 11.5T440-800v320q0 17-11.5 28.5T400-440H160q-17 0-28.5-11.5T120-480Zm400 320v-320q0-17 11.5-28.5T560-520h240q17 0 28.5 11.5T840-480v320q0 17-11.5 28.5T800-120H560q-17 0-28.5-11.5T520-160Zm-400 0v-160q0-17 11.5-28.5T160-360h240q17 0 28.5 11.5T440-320v160q0 17-11.5 28.5T400-120H160q-17 0-28.5-11.5T120-160Zm80-360h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"/></svg>
                    <span>Painel de Resultados</span>
                </a>
            </li>

            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="factory" height="24"><g><path d="M12 14h2v2h-2zM16 14h2v2h-2z"></path><path d="m12.95 6.6-4.21 3L7.9 2H3.05L1.94 22H22V6.41l-6.89 3.32ZM4.06 20l.89-16H6.1l1.78 16ZM20 20H9.9L9 11.83l3.45-2.43 2 2.88L20 9.59Z"></path></g></svg>
                    <span>Minha Fábrica</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="{{route('meu_site')}}">Meu Site</a></li>
                        <li><a href="{{route('dados_cadastrais')}}">Informações Cadastrais</a></li>
                        @if($assinatura)
                            <li><a href="{{route('meu_plano')}}">Meu Plano</a></li>
                        @else
                            <li><a href="{{route('planos')}}">Assinar Plano</a></li>
                        @endif

                        <li><a href="{{route('suporte')}}">Suporte</a></li>
                    </div>
                </ul>
            </li>

            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h207q16 0 30.5 6t25.5 17l57 57h320q33 0 56.5 23.5T880-640v400q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H447l-80-80H160v480Zm0 0v-480 480Zm400-160v40q0 17 11.5 28.5T600-320q17 0 28.5-11.5T640-360v-40h40q17 0 28.5-11.5T720-440q0-17-11.5-28.5T680-480h-40v-40q0-17-11.5-28.5T600-560q-17 0-28.5 11.5T560-520v40h-40q-17 0-28.5 11.5T480-440q0 17 11.5 28.5T520-400h40Z"/></svg>
                    <span>Categorias</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="{{route('criar_categoria')}}">Nova Categoria</a></li>
                        <li><a href="{{route('categorias')}}">Lista de Categorias</a></li>
                    </div>
                </ul>
            </li>

            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 35.971 31.971"><path id="PRODUTOS" d="M18.372,17.341a9.1,9.1,0,0,1,3.091,1.542l10.085-3.36a1,1,0,0,0,.631-1.261L28.407,2.947a1,1,0,0,0-1.261-.631L23.33,3.591,25.4,9.8l-3.791,1.255L19.54,4.846l-3.847,1.28a1,1,0,0,0-.631,1.261Zm17.548,3.041-.637-1.9a1,1,0,0,0-1.261-.631L20.689,22.3a5.967,5.967,0,0,0-4.59-2.311L9.892,1.368A2,2,0,0,0,7.993,0H1A1,1,0,0,0,0,1V3A1,1,0,0,0,1,4H6.551l5.758,17.279a5.953,5.953,0,0,0-2.248,5.651,5.992,5.992,0,0,0,11.909-.837l13.32-4.446A1,1,0,0,0,35.919,20.383ZM15.986,28.975a3,3,0,1,1,3-3A3,3,0,0,1,15.986,28.975Z"></path></svg>
                    <span>Produtos</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="{{route('criar_produto')}}">Novo Produto</a></li>
                        <li><a href="{{route('lista_produtos')}}">Lista de Produtos</a></li>

                    </div>
                </ul>
            </li>

            <li>

                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 31.971 31.971"><path id="\xC1REA_DE_VENDAS" data-name="\xC1REA DE VENDAS" d="M15.985,25.976A12.988,12.988,0,1,0,3,12.988,12.986,12.986,0,0,0,15.985,25.976ZM14.6,6.082V5.033A1.034,1.034,0,0,1,15.636,4h.693a1.034,1.034,0,0,1,1.037,1.037V6.094a4.923,4.923,0,0,1,2.685.962.7.7,0,0,1,.075,1.068l-1.018.968a.7.7,0,0,1-.874.062,2.055,2.055,0,0,0-1.111-.318H14.693a1.086,1.086,0,0,0-1.018,1.143,1.128,1.128,0,0,0,.756,1.1l3.89,1.168A3.912,3.912,0,0,1,21.049,16a3.85,3.85,0,0,1-3.69,3.9v1.049a1.034,1.034,0,0,1-1.037,1.037h-.693a1.034,1.034,0,0,1-1.037-1.037V19.882a4.923,4.923,0,0,1-2.685-.962.7.7,0,0,1-.075-1.068l1.018-.968a.7.7,0,0,1,.874-.062,2.055,2.055,0,0,0,1.111.318h2.429A1.086,1.086,0,0,0,18.283,16a1.128,1.128,0,0,0-.756-1.1l-3.89-1.168a3.912,3.912,0,0,1-2.729-3.753,3.854,3.854,0,0,1,3.69-3.9Zm15.373,15.9H27.943a15.134,15.134,0,0,1-4.558,4h3.984a.557.557,0,0,1,.6.5v1a.557.557,0,0,1-.6.5H4.6a.557.557,0,0,1-.6-.5v-1a.557.557,0,0,1,.6-.5H8.58a15.209,15.209,0,0,1-4.558-4H2a2,2,0,0,0-2,2v5.995a2,2,0,0,0,2,2H29.973a2,2,0,0,0,2-2V23.978A2,2,0,0,0,29.973,21.98Z"></path></svg>
                    <span>Área de Vendas</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
                </button>

                <ul class="sub-menu">

                    <div>

                        <li><a href="{{route('criar_produto')}}">Lista de Orçamentos</a></li>

                    </div>

                </ul>

            </li>

            <li>

                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 28.417 31.574"><path id="Combined-Shape" d="M14.216,0A7.88,7.88,0,0,1,22.1,7.537h-.041a.793.793,0,0,1-.069.356h.247c1.921,0,3.933,1.332,4.74,4.546l.088.379L28.28,22.6c.874,6.237-2.539,8.861-7.194,8.972l-.312,0H7.686c-4.731,0-8.377-1.724-7.575-8.551L.166,22.6l1.228-9.78C2,9.357,4.031,7.992,5.99,7.9l.217-.005H6.33a1.024,1.024,0,0,1,0-.356A7.88,7.88,0,0,1,14.216,0ZM9.625,13.15a1.437,1.437,0,1,0,1.4,1.436h0l-.011-.18A1.41,1.41,0,0,0,9.625,13.15Zm9.139,0a1.437,1.437,0,1,0,1.4,1.436A1.416,1.416,0,0,0,18.764,13.15ZM14.154,2.056a5.491,5.491,0,0,0-5.5,5.481,1.025,1.025,0,0,1,0,.356H19.723a1.023,1.023,0,0,1-.069-.356A5.491,5.491,0,0,0,14.154,2.056Z"></path></svg>
                    <span>Área de Compras</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
                </button>

                <ul class="sub-menu">

                    <div>

                        <li><a href="{{route('criar_produto')}}">Minhas compras</a></li>

                    </div>

                </ul>

            </li>

            <li>
                <a href="/user/profile">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                    <span>Meu Perfil</span>
                </a>
            </li>

            <li>


                <form action="/logout" method="POST">
                    @csrf

                    <a class="dropdown-item out"
                       href="/logout"
                       onclick="event.preventDefault();
                            this.closest('form').submit();"
                    >

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16" id="door">
                            <path d="M7.50960968,1.99999909 L7.59806,2.00971 L12.5981,3.00971 C12.8025875,3.05061625 12.9569266,3.21283578 12.9923162,3.41242007 L13,3.49999909 L13,12.4969 C13,12.7054125 12.8712219,12.8885828 12.6824666,12.9624697 L12.5981,12.9872 L7.59806,13.9872 C7.45117,14.0166 7.29885,13.9785 7.18301,13.8836 C7.09033,13.8076 7.0288116,13.701584 7.00791144,13.58552 L7,13.4969 L7,2.49999909 L7.00791144,2.41138361 C7.0288116,2.2953236 7.09033,2.189306 7.18301,2.11333 C7.275682,2.037354 7.3917012,1.997826 7.50960968,1.99999909 Z M6,3 L6,4 L4,4 L4,11.9969 L6,11.9969 L6,12.9969 L3.5,12.9969 C3.25454222,12.9969 3.0503921,12.8199914 3.00805575,12.5867645 L3,12.4969 L3,3.5 C3,3.25454222 3.17687704,3.0503921 3.41012499,3.00805575 L3.5,3 L6,3 Z M8,3.10991 L8,12.887 L12,12.087 L12,3.90991 L8,3.10991 Z M9.5,7.49841 C9.77614,7.49841 10,7.72227 10,7.99841 C10,8.27456 9.77614,8.49841 9.5,8.49841 C9.22386,8.49841 9,8.27456 9,7.99841 C9,7.72227 9.22386,7.49841 9.5,7.49841 Z"></path>
                        </svg>

                        <span>Sair da conta</span>

                    </a>
                </form>

            </li>

        </ul>

    </nav>

    @push('scripts')

        <script src="{{asset('js/layouts/sidebar.js')}}" type="module"></script>

    @endpush

</div>
