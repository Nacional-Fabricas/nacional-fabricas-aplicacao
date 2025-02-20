<div class="bloco-banner">

    <div class="cabecalho">
        <h3>Banner do Produto</h3>
    </div>


    <img id="previsualizarBanner" class="banner-site" src="{{ asset('storage/images/sites/banners/' . $site->banner)  }}" alt="Banner do Site">

    <button id="editarBanner" class="btn-editar-imagem">
        @if($site->banner)

            Editar Imagem

        @else

            Adicionar Banner do Produto

        @endif

    </button>

    <input type="file" id="inputArquivoBanner" class="d-none" accept="image/*">

</div>

<div class="modal fade" id="modalRecorteBanner" tabindex="-1" aria-labelledby="modalRecorteBannerLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRecorteBannerLabel">Recortar Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <img id="imagemRecorteBanner" class="img-fluid" alt="Recortar banner">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" id="salvarRecorteBanner" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const previsualizarBanner = document.getElementById('previsualizarBanner');
            const editarBanner = document.getElementById('editarBanner');
            const inputArquivoBanner = document.getElementById('inputArquivoBanner');
            const modalRecorteBanner = new bootstrap.Modal(document.getElementById('modalRecorteBanner'));
            const salvarRecorteBanner = document.getElementById('salvarRecorteBanner');
            const imagemRecorteBanner = document.getElementById('imagemRecorteBanner');
            let cropper;

            editarBanner.addEventListener('click', () => {
                inputArquivoBanner.click();
            });

            inputArquivoBanner.addEventListener('change', (event) => {
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = (e) => {
                        imagemRecorteBanner.src = e.target.result;
                        modalRecorteBanner.show();

                        if (cropper) {
                            cropper.destroy();
                        }

                        cropper = new Cropper(imagemRecorteBanner, {
                            aspectRatio: 1500 / 540,
                            viewMode: 1,
                        });
                    };

                    reader.readAsDataURL(file);
                }
            });

            salvarRecorteBanner.addEventListener('click', () => {
                if (cropper) {
                    cropper.getCroppedCanvas({
                        width: 1500,
                        height: 540,
                    }).toBlob((blob) => {
                        if (blob) {
                            const formData = new FormData();
                            formData.append('image', blob, 'banner.jpg');
                            formData.append('id_site', @json($site->id));

                            fetch("{{ route('recortar_banner') }}", {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: formData
                            })
                                .then(response => response.json())
                                .then(data => {

                                    console.log(data)

                                    if (data.sucesso) {
                                        previsualizarBanner.src = data.nova_imagem;
                                        modalRecorteBanner.hide();
                                    } else {
                                        alert('Erro ao salvar o banner.');
                                    }
                                })
                                .catch(error => {
                                    console.error('Erro:', error);
                                });
                        }
                    });
                }
            });
        });
    </script>
@endpush
