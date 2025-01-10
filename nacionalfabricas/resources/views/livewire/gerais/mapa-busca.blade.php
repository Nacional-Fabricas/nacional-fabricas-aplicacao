<div>

    <div style="width: 400px; height: 400px;">
        <div style="width: 100%; height: 100%;" id="map"></div>
    </div>

    @push('scripts')

        <script>
            // Passa a variável do backend para o JavaScript globalmente
            window.enderecos = @json($enderecos);
        </script>

        <script src="{{asset('js/gerais/mapa-busca.js')}}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key={{config('services.google_maps.key')}}&callback=initMap"></script>

    @endpush

</div>
