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

                <!-- Banner -->

                <div class="image-preview-container">
                    <div class="image-preview" id="banner-container">
                        <img id="banner-preview"
                             src="{{ $site->banner ? asset('images/sites/backgrounds/' . $site->banner) : '' }}"
                             alt="Banner" class="preview-image">
                        <div class="placeholder" style="display: {{ $site->banner ? 'none' : 'flex' }}">Banner</div>
                        <button type="button" class="icone-editar btn btn-primary" data-campo="banner" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                    </div>
                    <input type="file" id="banner-input" accept="image/*" style="display: none;">
                </div>

            </div>

        @else

            @include('pages.site.criar-site')

        @endif

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let cropperInstance = null;
            let currentField = null;

            document.querySelectorAll('.icone-editar').forEach(button => {
                button.addEventListener('click', (e) => {
                    const field = button.getAttribute('data-campo');
                    currentField = field;

                    const inputId = `${field}-input`;
                    const inputElement = document.getElementById(inputId);
                    inputElement.click();

                    inputElement.addEventListener('change', (event) => {
                        const file = event.target.files[0];
                        if (!file) return;

                        const reader = new FileReader();
                        reader.onload = function (e) {
                            const cropperImage = document.getElementById('cropperImage');
                            cropperImage.src = e.target.result;
                            cropperImage.style.display = 'block';

                            if (cropperInstance) cropperInstance.destroy();
                            cropperInstance = new Cropper(cropperImage, {
                                aspectRatio: 16 / 9,
                                viewMode: 1,
                                scalable: true,
                                zoomable: true,
                                movable: true,
                                cropBoxResizable: true,
                            });

                            // Open the modal after the image is loaded
                            const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
                            modal.show();
                        };
                        reader.readAsDataURL(file);
                    });
                });
            });

            document.getElementById('cropAndSave').addEventListener('click', () => {
                if (!cropperInstance) return;

                cropperInstance.getCroppedCanvas().toBlob((blob) => {
                    const formData = new FormData();
                    formData.append('image', blob);
                    formData.append('field', currentField);
                    formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                    fetch('{{ route('recortar_plano_fundo') }}', {
                        method: 'PUT',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: formData,
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                const previewImage = document.getElementById(`${currentField}-preview`);
                                previewImage.src = URL.createObjectURL(blob);
                                previewImage.style.display = 'block';
                                document.querySelector(`#${currentField}-container .placeholder`).style.display = 'none';
                            } else {
                                console.error('Erro ao recortar imagem:', data.message);
                            }
                        })
                        .catch(error => console.error('Erro na requisição:', error));
                });
            });
        });
    </script>

@endsection
