<div class="bloco-destaque" data-destaque="primeiro_destaque">
    <div class="cabecalho">
        <h3>Primeiro Destaque</h3>
    </div>
    <img id="previsualizar_primeiro_destaque" class="destaque-site"
         src="{{ asset('storage/images/sites/destaques/' . $site->primeiro_destaque) }}"
         alt="Primeiro Destaque">
    <button class="btn-editar-imagem" data-input="inputArquivo_primeiro_destaque">
        @if($site->primeiro_destaque)
            <img src="{{asset('icons/pencil.svg')}}" alt="Editar Banner do Produto">
        @else
            Adicionar Primeiro Destaque
        @endif
    </button>
    <input type="file" id="inputArquivo_primeiro_destaque" class="d-none" accept="image/*">
</div>

<div class="bloco-destaque" data-destaque="segundo_destaque">
    <div class="cabecalho">
        <h3>Segundo Destaque</h3>
    </div>
    <img id="previsualizar_segundo_destaque" class="destaque-site"
         src="{{ asset('storage/images/sites/destaques/' . $site->segundo_destaque) }}"
         alt="Segundo Destaque">
    <button class="btn-editar-imagem" data-input="inputArquivo_segundo_destaque">
        @if($site->segundo_destaque)
            <img src="{{asset('icons/pencil.svg')}}" alt="Editar Banner do Produto">
        @else
            Adicionar Segundo Destaque
        @endif
    </button>
    <input type="file" id="inputArquivo_segundo_destaque" class="d-none" accept="image/*">
</div>

<div class="bloco-destaque" data-destaque="terceiro_destaque">
    <div class="cabecalho">
        <h3>Terceiro Destaque</h3>
    </div>
    <img id="previsualizar_terceiro_destaque" class="destaque-site"
         src="{{ asset('storage/images/sites/destaques/' . $site->terceiro_destaque) }}"
         alt="Terceiro Destaque">
    <button class="btn-editar-imagem" data-input="inputArquivo_terceiro_destaque">
        @if($site->terceiro_destaque)
            <img src="{{asset('icons/pencil.svg')}}" alt="Editar Banner do Produto">
        @else
            Adicionar Terceiro Destaque
        @endif
    </button>
    <input type="file" id="inputArquivo_terceiro_destaque" class="d-none" accept="image/*">
</div>

<div class="modal fade" id="modalRecorteDestaque" tabindex="-1" aria-labelledby="modalRecorteDestaqueLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRecorteDestaqueLabel">Recortar Imagem de Destaque</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <img id="imagemRecorteDestaque" class="img-fluid" alt="Recortar destaque">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" id="salvarRecorteDestaque" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modalRecorteDestaque = new bootstrap.Modal(document.getElementById('modalRecorteDestaque'));
            const imagemRecorteDestaque = document.getElementById('imagemRecorteDestaque');
            const salvarRecorteDestaque = document.getElementById('salvarRecorteDestaque');
            let cropper;
            let destaqueAtual = '';

            document.querySelectorAll('.btn-editar-imagem').forEach(botao => {
                botao.addEventListener('click', (event) => {
                    const inputId = event.target.dataset.input;
                    document.getElementById(inputId).click();
                    destaqueAtual = inputId.replace('inputArquivo_', '');
                });
            });

            document.querySelectorAll('input[type="file"]').forEach(input => {
                input.addEventListener('change', (event) => {
                    const file = event.target.files[0];

                    if (file) {
                        const reader = new FileReader();

                        reader.onload = (e) => {
                            imagemRecorteDestaque.src = e.target.result;
                            modalRecorteDestaque.show();

                            if (cropper) {
                                cropper.destroy();
                            }

                            cropper = new Cropper(imagemRecorteDestaque, {
                                aspectRatio: 390 / 480,
                                viewMode: 1,
                            });
                        };

                        reader.readAsDataURL(file);
                    }
                });
            });

            salvarRecorteDestaque.addEventListener('click', () => {
                if (cropper) {
                    cropper.getCroppedCanvas({
                        width: 390,
                        height: 480,
                    }).toBlob((blob) => {
                        if (blob) {

                            const formData = new FormData();
                            formData.append('image', blob, `${destaqueAtual}.jpg`);
                            formData.append('id_site', @json($site->id));
                            formData.append('field', destaqueAtual); // ✅ Laravel espera 'field' e não 'destaque'
                            formData.append('_token', '{{ csrf_token() }}');

// Verifique os valores antes de enviar
                            for (let pair of formData.entries()) {
                                console.log(pair[0] + ':', pair[1]);
                            }

                            fetch("{{ route('recortar_destaque') }}", {
                                method: 'POST',
                                body: formData
                            })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.sucesso) {
                                        document.getElementById(`previsualizar_${destaqueAtual}`).src = data.nova_imagem;
                                        modalRecorteDestaque.hide();
                                    } else {
                                        alert('Erro ao salvar a imagem de destaque: ' + data.mensagem);
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
