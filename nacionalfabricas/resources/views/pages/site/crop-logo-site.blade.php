<div class="bloco-logo">
    <div class="cabecalho">
        <h3>Logo do Site</h3>
    </div>

    <img id="previsualizarLogo" class="logo-site" src="{{ asset('storage/images/sites/logos/' . $site->logo) }}" alt="Logo do Site">

    <button id="editarLogo" class="btn-editar-imagem">
        @if($site->logo)
            Editar Imagem
        @else
            Adicionar Logo do Site
        @endif
    </button>

    <input type="file" id="inputArquivoLogo" class="d-none" accept="image/*">
</div>

<div class="modal fade" id="modalRecorteLogo" tabindex="-1" aria-labelledby="modalRecorteLogoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRecorteLogoLabel">Recortar Logo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <img id="imagemRecorteLogo" class="img-fluid" alt="Recortar logo">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" id="salvarRecorteLogo" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const previsualizarLogo = document.getElementById('previsualizarLogo');
            const editarLogo = document.getElementById('editarLogo');
            const inputArquivoLogo = document.getElementById('inputArquivoLogo');
            const modalRecorteLogo = new bootstrap.Modal(document.getElementById('modalRecorteLogo'));
            const salvarRecorteLogo = document.getElementById('salvarRecorteLogo');
            const imagemRecorteLogo = document.getElementById('imagemRecorteLogo');
            let cropper;

            editarLogo.addEventListener('click', () => {
                inputArquivoLogo.click();
            });

            inputArquivoLogo.addEventListener('change', (event) => {
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = (e) => {
                        imagemRecorteLogo.src = e.target.result;
                        modalRecorteLogo.show();

                        if (cropper) {
                            cropper.destroy();
                        }

                        cropper = new Cropper(imagemRecorteLogo, {
                            aspectRatio: 1, // Mantendo um formato quadrado
                            viewMode: 1,
                        });
                    };

                    reader.readAsDataURL(file);
                }
            });

            salvarRecorteLogo.addEventListener('click', () => {
                if (cropper) {
                    cropper.getCroppedCanvas({
                        width: 500,
                        height: 500,
                    }).toBlob((blob) => {
                        if (blob) {
                            const formData = new FormData();
                            formData.append('image', blob, 'logo.jpg');
                            formData.append('id_site', @json($site->id));

                            fetch("{{ route('recortar_logo') }}", {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: formData
                            })
                                .then(response => response.json())
                                .then(data => {
                                    console.log(data);
                                    if (data.sucesso) {
                                        previsualizarLogo.src = data.nova_imagem;
                                        modalRecorteLogo.hide();
                                    } else {
                                        alert('Erro ao salvar a logo.');
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
