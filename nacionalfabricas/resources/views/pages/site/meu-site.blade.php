@extends('layouts.painel')
@section('content')

    <div class="modal fade" id="modalCrop" tabindex="-1" aria-labelledby="modalCropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCropLabel">Recortar Imagem</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="cropperImage" style="max-width: 100%; display: none;" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="cropAndSave">Recortar e Salvar</button>
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
                        <button class="icone-editar" data-campo="banner" data-bs-toggle="modal" data-bs-target="#modalCrop">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                    </div>
                    <input type="file" id="banner-input" accept="image/*" style="display: none;">
                </div>

                <!-- Logo -->
                <div class="image-preview-container">
                    <div class="image-preview" id="logo-container">
                        <img id="logo-preview"
                             src="{{ $site->logo ? asset('images/sites/logos/' . $site->logo) : '' }}"
                             alt="Logo" class="preview-image">
                        <div class="placeholder" style="display: {{ $site->logo ? 'none' : 'flex' }}">Logo</div>
                        <button class="icone-editar" data-campo="logo" data-bs-toggle="modal" data-bs-target="#modalCrop">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                    </div>
                    <input type="file" id="logo-input" accept="image/*" style="display: none;">
                </div>

                <div class="linha">
                    <!-- Primeira Imagem -->
                    <div class="container-preview-imagem">
                        <div class="preview-imagem" id="primeira-container">
                            <img id="primeira-preview"
                                 src="{{ $site->primeiro_destaque ? asset('images/sites/imagens-destaque/' . $site->primeiro_destaque) : '' }}"
                                 alt="Primeira Imagem" class="imagem-preview">
                            <div class="placeholder" style="display: {{ $site->primeiro_destaque ? 'none' : 'flex' }}">Primeira Imagem</div>
                            <button class="icone-editar" data-campo="primeira" data-bs-toggle="modal" data-bs-target="#modalCrop">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </div>
                        <input type="file" id="primeira-input" accept="image/*" style="display: none;">
                    </div>

                    <!-- Segunda Imagem -->
                    <div class="container-preview-imagem">
                        <div class="preview-imagem" id="segunda-container">
                            <img id="segunda-preview"
                                 src="{{ $site->segundo_destaque ? asset('images/sites/imagens-destaque/' . $site->segundo_destaque) : '' }}"
                                 alt="Segunda Imagem" class="imagem-preview">
                            <div class="placeholder" style="display: {{ $site->segundo_destaque ? 'none' : 'flex' }}">Segunda Imagem</div>
                            <button class="icone-editar" data-campo="segunda" data-bs-toggle="modal" data-bs-target="#modalCrop">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </div>
                        <input type="file" id="segunda-input" accept="image/*" style="display: none;">
                    </div>

                    <!-- Terceira Imagem -->
                    <div class="container-preview-imagem">
                        <div class="preview-imagem" id="terceira-container">
                            <img id="terceira-preview"
                                 src="{{ $site->terceiro_destaque ? asset('images/sites/imagens-destaque/' . $site->terceiro_destaque) : '' }}"
                                 alt="Terceira Imagem" class="imagem-preview">
                            <div class="placeholder" style="display: {{ $site->terceiro_destaque ? 'none' : 'flex' }}">Terceira Imagem</div>
                            <button class="icone-editar" data-campo="terceira" data-bs-toggle="modal" data-bs-target="#modalCrop">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </div>
                        <input type="file" id="terceira-input" accept="image/*" style="display: none;">
                    </div>
                </div>
            </div>

            @include('pages.site.atualizar-site')

        @else

            @include('pages.site.criar-site')

        @endif

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let cropperInstance = null;
            let currentField = null;

            // Obtém o token CSRF
            const csrfMetaTag = document.querySelector('meta[name="csrf-token"]');
            if (!csrfMetaTag) {
                console.error("Erro: Meta tag CSRF não encontrada!");
                return;
            }
            const csrfToken = csrfMetaTag.getAttribute('content');

            document.querySelectorAll('.icone-editar').forEach(button => {
                button.addEventListener('click', (e) => {
                    const field = button.getAttribute('data-campo');
                    if (!field) {
                        console.error("Erro: Atributo 'data-campo' não encontrado no botão.");
                        return;
                    }
                    currentField = field;

                    const inputId = `${field}-input`;
                    const inputElement = document.getElementById(inputId);

                    if (!inputElement) {
                        console.error(`Erro: Elemento de input não encontrado para o campo: ${field}`);
                        return;
                    }

                    inputElement.click();

                    // Remove event listeners antigos para evitar múltiplos disparos
                    inputElement.replaceWith(inputElement.cloneNode(true));
                    const newInputElement = document.getElementById(inputId);

                    newInputElement.addEventListener('change', (event) => {
                        const file = event.target.files[0];
                        if (!file) return;

                        const reader = new FileReader();
                        reader.onload = function (e) {
                            const cropperImage = document.getElementById('cropperImage');
                            if (!cropperImage) {
                                console.error("Erro: Elemento da imagem de recorte não encontrado.");
                                return;
                            }

                            cropperImage.src = e.target.result;
                            cropperImage.style.display = 'block';

                            if (cropperInstance) cropperInstance.destroy();
                            cropperInstance = new Cropper(cropperImage, {
                                aspectRatio: (field === 'banner' ? 16 / 9 : 1),
                                viewMode: 1,
                                scalable: true,
                                zoomable: true,
                                movable: true,
                                cropBoxResizable: true,
                            });
                        };
                        reader.readAsDataURL(file);
                    });
                });
            });

            const saveCrop = () => {
                if (!cropperInstance) {
                    console.error("Erro: Nenhuma instância do Cropper foi encontrada.");
                    return;
                }

                cropperInstance.getCroppedCanvas().toBlob((blob) => {
                    if (!blob) {
                        console.error("Erro: Falha ao gerar o blob da imagem recortada.");
                        return;
                    }

                    const formData = new FormData();
                    formData.append('_token', csrfToken);
                    formData.append('image', blob);
                    formData.append('field', currentField);

                    // Obtém o ID do site de um input hidden (evita erro se a variável Laravel não estiver presente)
                    const siteIdElement = document.getElementById('site-id');
                    if (!siteIdElement) {
                        console.error("Erro: Elemento com ID 'site-id' não encontrado.");
                        return;
                    }
                    formData.append('id', siteIdElement.value);

                    let route;
                    switch (currentField) {
                        case 'banner':
                            route = document.getElementById('route-banner')?.value;
                            break;
                        case 'logo':
                            route = document.getElementById('route-logo')?.value;
                            break;
                        default:
                            route = document.getElementById('route-destaque')?.value;
                            break;
                    }

                    if (!route) {
                        console.error(`Erro: Rota não encontrada para o campo ${currentField}`);
                        return;
                    }

                    fetch(route, {
                        method: 'POST',
                        headers: { 'X-CSRF-TOKEN': csrfToken },
                        body: formData,
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                const previewImage = document.getElementById(`${currentField}-preview`);
                                if (previewImage) {
                                    previewImage.src = URL.createObjectURL(blob);
                                    previewImage.style.display = 'block';
                                }
                                const placeholder = document.querySelector(`#${currentField}-container .placeholder`);
                                if (placeholder) placeholder.style.display = 'none';
                            } else {
                                console.error('Erro ao recortar imagem:', data.message);
                            }
                        })
                        .catch(error => console.error('Erro na requisição:', error));
                });
            };

            const cropAndSaveButton = document.getElementById('cropAndSave');
            if (!cropAndSaveButton) {
                console.error("Erro: Botão de salvar recorte não encontrado.");
                return;
            }
            cropAndSaveButton.addEventListener('click', saveCrop);
        });
    </script>

@endsection
