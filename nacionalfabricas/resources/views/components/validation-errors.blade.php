@if ($errors->any())
    <div {{ $attributes }}">

        <div class="erroAviso">{{ __('Oppa! algo deu errado.') }}</div>

        <ul class="erroMensagem">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
