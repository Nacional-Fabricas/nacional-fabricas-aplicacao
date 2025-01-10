// Incluindo Bootstrap e outras dependências JS

$(document).ready(function () {
    // Escutando mudanças no campo de estado
    $('#estado').on('change', function () {
        var selectedState = $(this).val();
        var citiesDatalist = $('#cities');

        if (selectedState) {
            // Fazendo a requisição AJAX para obter as cidades
            $.ajax({
                url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/' + selectedState + '/distritos',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    // Limpar as opções anteriores
                    citiesDatalist.empty();

                    // Adicionar as novas cidades no datalist
                    $.each(data, function (index, city) {
                        citiesDatalist.append($('<option>', {
                            value: city.nome
                        }));
                    });
                },
                error: function (error) {
                    console.error(error);
                }
            });
        } else {
            // Limpar as cidades quando nenhum estado for selecionado
            citiesDatalist.empty();
        }
    });

    // Aplicando a máscara CNPJ
    $('#cnpj').inputmask('99.999.999/9999-99');

    // Função para alternar a visibilidade do formulário de registro
    var formReg = document.getElementById("register");

    function registrar() {
        if (formReg.style.display === 'flex') {
            formReg.style.display = 'none';
        } else {
            formReg.style.display = 'flex';
        }
    }
});

// Variáveis globais evitadas
let cropper = null;

// Função para inicializar o Cropper
window.initializeCropper = function (imageElement) {
    return new Cropper(imageElement, {
        aspectRatio: 1,
        viewMode: 1,
        preview: '.preview',
        zoomOnWheel: true, // Ativa zoom ao rolar o mouse
        scalable: true,
        zoomable: true,
        crop(event) {
            console.log('Crop:', event.detail);
        },
    });
};

// Função para abrir o modal e inicializar o Cropper
window.openModalAndCrop = function (imageUrl) {
    const imageElement = document.getElementById('modalImage');
    imageElement.src = imageUrl;

    // Instância do modal Bootstrap
    const modalElement = document.getElementById('modalCrop');
    const modal = new bootstrap.Modal(modalElement);

    // Evento de inicialização do modal
    modalElement.addEventListener('shown.bs.modal', () => {
        // Destruir instância anterior do Cropper, se existir
        if (cropper) cropper.destroy();
        cropper = new Cropper(imageElement, {
            aspectRatio: 1,
            viewMode: 1,
            preview: '.preview',
            zoomOnWheel: true,
            scalable: true,
            zoomable: true,
        });
    });

    modal.show();
};

// Função para tratar a seleção de arquivos
window.handleFileSelect = function (event) {
    const inputId = event.target.id;
    const file = event.target.files[0];

    // Validação básica do arquivo
    if (!file || !file.type.startsWith('image/')) {
        alert('Por favor, selecione um arquivo de imagem válido.');
        return;
    }

    const imageUrl = URL.createObjectURL(file);
    let route;

    // Define a rota com base no campo
    switch (inputId) {
        case 'banner':
            route = '/recortar-plano-fundo';
            break;
        case 'logotipo':
            route = '/recortar-logo';
            break;
        case 'primeiro_destaque':
        case 'segundo_destaque':
        case 'terceiro_destaque':
            route = '/recortar-destaque';
            break;
        default:
            console.error('Entrada desconhecida:', inputId);
            return;
    }

    // Armazena a rota como atributo do botão de recorte
    document.getElementById('cropImageBtn').dataset.route = route;

    // Abre o modal e inicializa o Cropper
    openModalAndCrop(imageUrl);
};

// Função para enviar a imagem recortada
window.cropAndUpload = function () {
    if (cropper) {
        cropper.getCroppedCanvas().toBlob((blob) => {
            const formData = new FormData();
            formData.append('croppedImage', blob);

            const route = document.getElementById('cropImageBtn').dataset.route;

            fetch(route, {
                method: 'POST',
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    alert('Imagem salva com sucesso!');
                    console.log('Resposta do servidor:', data);
                })
                .catch((error) => {
                    console.error('Erro ao salvar imagem:', error);
                });
        });
    } else {
        alert('Nenhuma imagem foi recortada.');
    }
};

// Vincula eventos aos inputs de arquivo
document.querySelectorAll('input[type="file"]').forEach((input) => {
    input.addEventListener('change', handleFileSelect);
});

// Vincula evento ao botão de recorte
document.getElementById('cropImageBtn').addEventListener('click', cropAndUpload);
