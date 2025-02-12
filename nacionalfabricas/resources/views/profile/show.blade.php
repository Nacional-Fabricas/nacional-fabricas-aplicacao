@extends('layouts.painel')
@section('content')

<div class="configuracoes">

    @if (Laravel\Fortify\Features::canUpdateProfileInformation())

        <div class="bloco">

            @livewire('profile.update-profile-information-form')

        </div>

        <x-section-border />

    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))

        <div class="bloco">

            @livewire('profile.update-password-form')

        </div>

        <x-section-border />
    @endif

    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
        <div class="bloco">

            @livewire('profile.two-factor-authentication-form')

        </div>

        <x-section-border />
    @endif

        <div class="bloco">

            @livewire('profile.logout-other-browser-sessions-form')

        </div>

    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
    <x-section-border />

        <div class="bloco">

            @livewire('profile.delete-user-form')

        </div>
    @endif


</div>

@endsection
