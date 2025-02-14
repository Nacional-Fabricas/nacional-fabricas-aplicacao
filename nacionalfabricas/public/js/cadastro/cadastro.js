document.addEventListener('DOMContentLoaded', () => {
    const passos = document.querySelectorAll('.passo');
    let passoAtual = 0;

    const mostrarPasso = (index) => {
        passos.forEach((passo, i) => {
            passo.style.display = i === index ? 'flex' : 'none';
        });
    };

    document.querySelectorAll('.btn-proximo').forEach(btn => {
        btn.addEventListener('click', () => {
            if (passoAtual < passos.length - 1) {
                passoAtual++;
                mostrarPasso(passoAtual);
            }
        });
    });

    document.querySelectorAll('.btn-voltar').forEach(btn => {
        btn.addEventListener('click', () => {
            if (passoAtual > 0) {
                passoAtual--;
                mostrarPasso(passoAtual);
            }
        });
    });

    mostrarPasso(passoAtual);
});

$(document).ready(function () {
    $('#btn_adicionar_cnae').off('click').on('click', function () {
        var selectedOption = $("#cnaes").val().trim();
        console.log("Selected Option:", selectedOption); // Adiciona um log para depuração

        if (selectedOption === "") {
            alert("Por favor, selecione um CNAE antes de adicionar.");
            return;
        }

        // Divide o valor selecionado para pegar o ID e a descrição
        var cnaeParts = selectedOption.split(' - ');
        var cnaeId = cnaeParts[0].trim();
        var cnaeDescription = cnaeParts[1] ? cnaeParts[1].trim() : "";

        if (cnaeId === "" || cnaeDescription === "") {
            alert("Por favor, selecione um CNAE válido.");
            return;
        }

        // Verifica se o CNAE já foi adicionado
        var alreadyAdded = false;
        $('.linha-cnae input[name="cnaeId[]"]').each(function() {
            if ($(this).val() === cnaeId) {
                alreadyAdded = true;
                return false;
            }
        });

        if (alreadyAdded) {
            alert("Este CNAE já foi adicionado.");
            return;
        }

        var cnaeInput =
            '<input type="hidden" name="cnaeId[]" value="' + cnaeId + '">' +
            '<input type="hidden" name="cnaeDescription[]" value="' + cnaeDescription + '">';

        var newRow =
            '<div class="linha-cnae">' +
            '<span class="dado">' + cnaeId + ' - ' + cnaeDescription + '</span>' +
            cnaeInput +
            ' <a href="#" class="removerButton">Remover</a>' +
            '</div>';

        $('#cnaesEscolhidos').append(newRow);

        // Reseta o input após adição
        setTimeout(function() {
            $("#cnaes").val("");
        }, 100);
    });

    // Evento para remover CNAEs
    $('#cnaesEscolhidos').on('click', '.removerButton', function (e) {
        e.preventDefault();
        $(this).closest('.linha-cnae').remove();
    });
});

$(document).ready(function () {


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

        //carregamento

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


});

