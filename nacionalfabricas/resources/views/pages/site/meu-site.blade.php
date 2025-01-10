@extends('layouts.dashboard')
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

        @if($site)
            @include('pages.site.atualizar-site')
        @else
            @include('pages.site.criar-site')
        @endif

    </div>

    <style>
        .image-preview-container {
            margin-bottom: 20px;
        }

        .image-preview {
            position: relative;
            width: 150px;
            height: 150px;
            border: 2px dashed #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f9f9f9;
        }

        .preview-image {
            max-width: 100%;
            max-height: 100%;
        }

        .placeholder {
            font-size: 14px;
            color: #aaa;
        }

        .edit-icon {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
        }

        .edit-icon i {
            font-size: 16px;
        }
    </style>

    <script>

        document.addEventListener('DOMContentLoaded', () => {
            let cropperInstance = null;
            let currentField = null;

            // Adicionar o token CSRF ao cabeçalho
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Clique no botão de edição para abrir o modal e vincular o input
            document.querySelectorAll('.icone-editar').forEach(button => {
                button.addEventListener('click', (e) => {
                    const field = button.getAttribute('data-campo'); // Identifica o campo (primeira, segunda, terceira, banner ou logo)
                    currentField = field;

                    const inputId = `${field}-input`;
                    const inputElement = document.getElementById(inputId);

                    // Abrir o seletor de arquivo
                    inputElement.click();

                    // Carregar imagem para o cropper quando selecionada
                    inputElement.addEventListener('change', (event) => {
                        const file = event.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                const cropperImage = document.getElementById('cropperImage');
                                cropperImage.src = e.target.result;
                                cropperImage.style.display = 'block';

                                // Inicializar ou destruir o cropper
                                if (cropperInstance) cropperInstance.destroy();
                                cropperInstance = new Cropper(cropperImage, { aspectRatio: (field === 'banner' ? 16 / 9 : 1) });
                            };
                            reader.readAsDataURL(file);
                        }
                    });
                });
            });

            // Função para salvar o recorte
            const saveCrop = () => {
                if (cropperInstance) {
                    const croppedImage = cropperInstance.getCroppedCanvas().toDataURL('image/png');
                    const siteId = '{{ $site->id ?? null }}';

                    let payloadKey;
                    // Ajuste do campo para refletir o banco de dados
                    if (currentField === 'primeira') {
                        payloadKey = 'primeiro_destaque';
                    } else if (currentField === 'segunda') {
                        payloadKey = 'segundo_destaque';
                    } else if (currentField === 'terceira') {
                        payloadKey = 'terceiro_destaque';
                    } else {
                        payloadKey = currentField; // Logo ou Banner
                    }

                    console.log(currentField)

                    const formData = new FormData();
                    // Adicionar a imagem recortada ao FormData
                    formData.append('image', croppedImage); // Como a imagem é em Base64, será necessário fazer o upload da imagem
                    formData.append('field', payloadKey);
                    formData.append('site_id', siteId);

                    let route;
                    // Definir a rota conforme o campo
                    if (payloadKey === 'primeiro_destaque' || payloadKey === 'segundo_destaque' || payloadKey === 'terceiro_destaque') {
                        route = '{{ route('recortar_destaque') }}';
                    } else if (payloadKey === 'banner') {
                        route = '{{ route('recortar_plano_fundo') }}';
                    } else if (payloadKey === 'logo') {
                        route = '{{ route('recortar_logo') }}';
                    }

                    // Enviar a requisição com CSRF Token no cabeçalho
                    fetch(route, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,  // Enviar o token CSRF aqui
                        },
                        body: formData,
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Atualize a imagem no frontend
                                const previewImage = document.getElementById(`${currentField}-preview`);
                                previewImage.src = croppedImage;
                                previewImage.style.display = 'block';
                                document.querySelector(`#${currentField}-container .placeholder`).style.display = 'none';
                            }
                        })
                        .catch(error => console.error('Erro ao recortar imagem:', error));
                }
            };

            document.getElementById('cropAndSave').addEventListener('click', saveCrop);
        });

    </script>

@endsection
