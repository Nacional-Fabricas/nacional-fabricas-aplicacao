@extends('layouts.meu-site')
@section('content')

    <img class="banner" src="{{asset('storage/images/sites/banners/'. $site -> banner)}}">

    <div class="informacao-site">

        <img class="logo" src="{{ asset('storage/images/sites/logos/' . $site -> logo)}}" alt="{{$site -> nome_industria}}">

        <div class="bloco-informacoes">

            <div class="cabecalho">

                <h1>{{$site -> nome_industria}}</h1>

                <div class="informacoes-basica">

                    <h3>Informações básicas</h3>

                    <span class="descricao">{{$site -> descricao_industria}}</span>

                </div>

            </div>

            <button class="ver-informacoes">Ver Informações</button>

            <ul class="informacoes-contato">

                <img id="close" onclick="verInfo()" src="{{ asset('icons/close.svg')}}" />

                <li class="informacao-contato">

                    <div class="sobre-info">

                        <img class="icone" src="{{ asset('icons/location.svg')}}" alt="">
                        <h4>Endereço</h4>

                    </div>

                    <div class="conteudo-destaque">

                            <span class="valor-destaque">

                                {{$endereco -> endereco}}, {{$endereco -> bairro}},{{$endereco -> numero}}, {{$endereco -> cidade}} - {{$endereco -> estado}}

                            </span>

                    </div>

                </li>

                <li class="informacao-contato">

                    <div class="sobre-info">

                        <img src="{{ asset('icons/call.svg')}}" alt="">
                        <h4>Contato</h4>

                    </div>

                    <div class="conteudo-destaque">

                        <span class="valor-destaque">

                            Email: {{$site -> email}}

                        </span>

                        <span class="valor-destaque">

                            Telefone: {{$site -> telefone}}

                        </span>

                    </div>

                </li>

                <li class="informacao-contato">

                    <div class="sobre-info">

                        <img src="{{ asset('icons/stopwatch.svg')}}" alt="">
                        <h4>Atendimento</h4>
                    </div>

                    <div class="conteudo-destaque">

                        <a class="ver-horarios" onclick="verHorarios()">Ver Horários</a>

                        <div class="bloco-horarios" style="display: none">

                            <div class="todos-horarios">

                                <h3>horários de atendimento</h3>

                                @foreach($atendimento as $dia => $info)
                                    @if(isset($info['entrada']) && $info['entrada'] !== 'N/A' && isset($info['saida']) && $info['saida'] !== 'N/A')
                                        <p class="horario"><span class="dia-semana">{{ ucfirst($dia) }}:</span> <span class="horario-semana">{{ $info['entrada'] }}h - {{ $info['saida'] }}h</span></p>
                                    @endif
                                @endforeach

                                <a class="ver-horarios" onclick="verHorarios()">Fechar</a>

                            </div>

                        </div>

                    </div>

                </li>

            </ul>

        </div>

    </div>

    <livewire:busca.busca-site :id="$site->id" />

    @push('scripts')

        <script src="{{asset('js/site/informacoes.js')}}"></script>

    @endpush

@endsection
