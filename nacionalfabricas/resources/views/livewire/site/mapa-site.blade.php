<div>

    <div style="width: 400px; height: 400px;">

        <div style="width: 100%; height: 100%;" id="map"></div>

    </div>

    @push('scripts')


        <script>
            window.enderecoSite = @json($endereco);
        </script>

        <script src="{{asset('js/site/mapa-site.js')}}"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key={{config('services.google_maps.key')}}&callback=initSingleMap" async defer></script>

    @endpush

</div>
