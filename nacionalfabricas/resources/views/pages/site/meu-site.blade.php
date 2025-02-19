@extends('layouts.painel')
@section('content')

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="cropperImage" style="max-width: 100%; display: none;" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="cropAndSave">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="meu-site">

        @if($site)

            <div class="bloco-imagens">
                <h1>Área de Imagens</h1>
                <hr>

            </div>

            @include('pages.site.atualizar-site')

        @else

            @include('pages.site.criar-site')

        @endif

    </div>

@endsection
