@extends('layouts.main')
@section('content')

<div class="bloco-pagina">

    <livewire:busca.busca-geral />

</div>

@push('scripts')

    <script src="{{asset('js/gerais/busca-geral.js')}}" type="module"></script>

@endpush

@endsection

