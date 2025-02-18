
<div class="bloco-album">

    <div class="cabecalho">
        <h3>Album do Produto</h3>
    </div>

    @foreach($album as $imgAlbum)

        <img id="previsualizarAlbum" class="foto-produto" src="{{ asset('storage/images/thumbnails/' . $produto->produto_thumbnail)  }}" alt="Imagem do album do produto">

    @endforeach

    @if(count($album) < 6)

    <button id="editarImagemAlbum" class="btn-editar-imagem">

        Adicionar Foto do Produto

    </button>

    @endif

    <input type="file" id="inputArquivoAlbum" class="d-none" accept="image/*">

</div>

<div class="modal fade" id="modalRecorteAlbum" tabindex="-1" aria-labelledby="modalRecorteAlbumLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRecorteAlbumLabel">Recortar Imagem do Album</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <img id="imagemRecorteAlbum" class="img-fluid" alt="Recortar imagem Album">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" id="salvarRecorteAlbum" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/cropperjs@1.5.13/dist/cropper.min.css" rel="stylesheet">
    <style>
        .img-container {
            max-width: 100%;
            max-height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .img-container img {
            max-width: 100%;
        }

        .container-logo {
            position: relative;
            display: inline-block;
            margin: 10px;
        }

        .icone-editar-imagem {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 5px;
            border-radius: 50%;
            cursor: pointer;
        }

        .icone-editar-imagem i {
            font-size: 18px;
        }
    </style>
@endpush

@push('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const previsualizarAlbum = document.getElementById('previsualizarAlbum');
            const editarImagemAlbum = document.getElementById('editarImagemAlbum');
            const inputArquivoAlbum = document.getElementById('inputArquivoAlbum');
            const modalRecorteAlbum = new bootstrap.Modal(document.getElementById('modalRecorteAlbum'));
            const salvarRecorteAlbum = document.getElementById('salvarRecorteAlbum');
            const imagemRecorteAlbum = document.getElementById('imagemRecorteAlbum');
            let cropper;

            const produtoId = @json($produto->id);
            const contaId = @json($produto->id_conta);
            const csrfToken = '{{ csrf_token() }}';

            // Abrir seletor de arquivo ao clicar no botão de edição
            editarImagemAlbum.addEventListener('click', () => {
                inputArquivoAlbum.click();
            });

            // Carregar a imagem selecionada no modal
            inputArquivoAlbum.addEventListener('change', (event) => {
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = (e) => {
                        imagemRecorteAlbum.src = e.target.result;
                        modalRecorteAlbum.show();

                        if (cropper) {
                            cropper.destroy();
                        }

                        cropper = new Cropper(imagemRecorteAlbum, {
                            aspectRatio: 1,
                            viewMode: 1,
                        });
                    };

                    reader.readAsDataURL(file);
                }
            });

            // Salvar recorte
            salvarRecorteAlbum.addEventListener('click', () => {
                if (cropper) {
                    cropper.getCroppedCanvas({
                        width: 300,
                        height: 300,
                    }).toBlob((blob) => {
                        if (blob) {
                            const formData = new FormData();
                            formData.append('image', blob, 'album.jpg');
                            formData.append('id_produto', produtoId);
                            formData.append('id_conta', contaId);

                            fetch("{{ route('recortar_imagem_produto') }}", {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken
                                },
                                body: formData
                            })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.sucesso) {
                                        const img = document.querySelector(`img[data-id="${data.id_imagem}"]`);
                                        if (img) {
                                            img.src = data.nova_imagem;
                                        }
                                        modalRecorteAlbum.hide();
                                    } else {
                                        alert('Erro ao salvar a Imagem do Album.');
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const iconesEditarImagem = document.querySelectorAll('.icone-editar-imagem');
            let cropper;

            iconesEditarImagem.forEach(icone => {
                icone.addEventListener('click', (event) => {
                    // Ao clicar no ícone, aciona o input de arquivo correspondente
                    const idImagem = event.target.closest('button').dataset.id;
                    const inputArquivo = document.getElementById('inputArquivo' + idImagem);
                    inputArquivo.click();
                });
            });

            // Quando uma nova imagem for selecionada
            const inputsArquivo = document.querySelectorAll('input[type="file"]');
            inputsArquivo.forEach(input => {
                input.addEventListener('change', (event) => {
                    const file = event.target.files[0];
                    const idImagem = event.target.id.replace('inputArquivo', '');
                    const modalRecorte = new bootstrap.Modal(document.getElementById('modalRecorteImagem' + idImagem));
                    const imagemRecorte = document.getElementById('imagemRecorte' + idImagem);

                    if (file) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            imagemRecorte.src = e.target.result;
                            modalRecorte.show();

                            if (cropper) {
                                cropper.destroy();  // Destrói qualquer instância anterior do Cropper
                            }

                            cropper = new Cropper(imagemRecorte, {
                                aspectRatio: 1,
                                viewMode: 1,
                            });
                        };
                        reader.readAsDataURL(file);
                    }
                });
            });

            // Salvar o recorte
            const salvarRecortes = document.querySelectorAll('.btn-primary[id^="salvarRecorte"]');
            salvarRecortes.forEach(botao => {
                botao.addEventListener('click', (event) => {
                    const idImagem = event.target.id.replace('salvarRecorte', '');
                    const imagemRecorte = document.getElementById('imagemRecorte' + idImagem);

                    if (cropper) {
                        cropper.getCroppedCanvas({
                            width: 300,
                            height: 300,
                        }).toBlob((blob) => {
                            if (blob) {
                                const formData = new FormData();
                                formData.append('image', blob, 'imagem.jpg');
                                formData.append('id_imagem', idImagem); // Passa o ID da imagem para o backend

                                fetch("{{ route('salvar_imagem_galeria') }}", {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    },
                                    body: formData
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.sucesso) {
                                            // Atualiza a imagem na galeria com a nova imagem cortada
                                            const img = document.querySelector(`img[data-id="${idImagem}"]`);
                                            img.src = data.nova_imagem;
                                            modalRecorte.hide();
                                        } else {
                                            alert('Erro ao salvar a imagem.');
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
        });

    </script>

@endpush
