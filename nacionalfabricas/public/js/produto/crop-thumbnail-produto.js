function mostrarEtapa(etapa) {
    const etapas = document.querySelectorAll('.etapa');
    etapas.forEach((div, index) => {
        div.style.display = (index + 1 === etapa) ? 'block' : 'none';
    });
}

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
