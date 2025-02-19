<div>

    <div class="registrar" id="registrar" style="display: none">

        <img class="close-icon" onclick="registrar()" src = "{{ asset('icons/close.svg')}}"/>

        <div class="bloco-registro">

            <div class="banner">

                <h1>Bora começar?</h1>
                <h1>Cadastre-se! </h1>
                <span>Com o <strong>Nacional Fábricas</strong>, o seu negócio vai lá em cima! Complete suas informações e <strong>seja feliz :)</strong></span>

            </div>

            <x-validation-errors class="error" />

            <form class="formulario-registro" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="cabecalho">

                    <h1>Crie sua conta.</h1>

                </div>

                <div class="grupo">
                    <label for="name" >Nome Completo</label>
                    <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{old('name')}}" required autofocus autocomplete="name" />
                </div>

                <div class="grupo">
                    <label for="email">E-mail</label>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email')}}" required autocomplete="username" />
                </div>

                <div class="grupo">
                    <label for="password">Crie sua Senha</label>
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="grupo">
                    <label for="password_confirmation">Confirmar Senha</label>
                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="rodape-formulario">

                    <button class="btn-register">
                        Registrar-se
                    </button>

                    <span> Já é registrado? <a class="underline" onclick="registrar()">Entre aqui</a></span>

                </div>

            </form>

        </div>

    </div>

</div>
