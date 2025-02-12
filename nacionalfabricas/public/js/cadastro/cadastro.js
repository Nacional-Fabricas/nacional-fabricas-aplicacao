$(document).ready(function () {
    // Adiciona o CNAE
    $('#btn_adicionar_cnae').click(function () {
        var selectedOption = $("#cnaes option:selected");
        var cnaeId = selectedOption.val();
        var cnaeDescription = selectedOption.text();

        // Verifica se uma opção válida foi selecionada
        if (!cnaeId) {
            alert("Por favor, selecione um CNAE antes de adicionar.");
            return;
        }

        var cnaeInput = `
            <input type="hidden" name="cnaeId[]" value="${cnaeId}">
            <input type="hidden" name="cnaeDescription[]" value="${cnaeDescription}">
        `;

        var novaLinha = `
            <div class="linha-cnae">
                <span class="dado">${cnaeId} - ${cnaeDescription}</span>
                ${cnaeInput}
                <a class="removerButton">Remover</a>
            </div>
        `;

        $('#cnaeContainer').append(novaLinha);
        selectedOption.prop('selected', false);
    });

    // Remove CNAE
    $('#cnaeContainer').on('click', '.removerButton', function () {
        $(this).closest('.linha-cnae').remove();
    });

    // Máscaras de input
    $('#cnpj').inputmask('99.999.999/9999-99');
    $('#cnpj_input').inputmask('99.999.999/9999-99', { removeMaskOnSubmit: true });
    $('#telefone_contato').inputmask('(99) 9999-9999', { removeMaskOnSubmit: true });
    $('#celular_contato').inputmask('(99) 99999-9999', { removeMaskOnSubmit: true });
    $('#cep').inputmask('99999-999', { removeMaskOnSubmit: true });

    // Consulta CEP
    $('#cep').on('blur', function () {
        var cep = $(this).val().replace(/\D/g, '');

        if (cep.length !== 8) {
            console.error("CEP deve conter exatamente 8 dígitos.");
            return;
        }

        $('#indicador-carregamento').show();

        $.ajax({
            url: `https://viacep.com.br/ws/${cep}/json/`,
            dataType: 'json',
            success: function (data) {
                if (!data.erro) {
                    $('#endereco').val(data.logradouro);
                    $('#bairro').val(data.bairro);
                    $('#estado').val(data.uf);
                    $('#cidade').val(data.localidade);
                } else {
                    console.error('CEP não encontrado');
                }
            },
            error: function () {
                console.error('Erro ao buscar dados do CEP');
            },
            complete: function () {
                $('#indicador-carregamento').hide();
            }
        });
    });

    // Adiciona novos campos de CNAE dinamicamente
    var cnaeCount = 1;

    $('.adicionar-cnae').on('click', function () {
        cnaeCount++;
        var newInput = $('#cnae_id1').clone();
        newInput.attr('id', `cnae_id${cnaeCount}`);
        newInput.attr('name', `cnae_id${cnaeCount}`);
        $('#cnaeContainer').append(newInput);
    });
});

console.log('funcionando cadastro')
