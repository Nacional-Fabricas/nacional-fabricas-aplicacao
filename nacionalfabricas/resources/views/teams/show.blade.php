@extends('layouts.dashboard')
@section('content')

    <div class="configuracoes">

        <div class="bloco">

            @livewire('teams.update-team-name-form', ['team' => $team])

        </div>

        <div class="bloco">

            @livewire('teams.team-member-manager', ['team' => $team])

        </div>


            @if (Gate::check('delete', $team) && ! $team->personal_team)
            <div class="bloco">

            <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('teams.delete-team-form', ['team' => $team])
                </div>

            </div>

        @endif


    </div>

@endsection
