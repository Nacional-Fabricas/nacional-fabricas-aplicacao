
// CookieConsent

document.addEventListener('DOMContentLoaded', function () {
    window.cookieconsent.initialise({
        palette: {
            popup: { background: '#07c48d' },
            button: { background: '#000' }
        },
        position: 'bottom-right',
        content: {
            message: 'Este site usa cookies para garantir que você obtenha a melhor experiência em nosso site.',
            dismiss: 'Entendi',
            link: 'Ler Mais',
            href: '/politica-de-privacidade'
        }
    });
});

// Exibe o formulário para Registrar
window.registrar = function () {
    var formReg = document.getElementById("registrar");

    if (formReg) {
        if (formReg.style.display === 'flex') {
            formReg.style.display = 'none';
        } else {
            formReg.style.display = 'flex';
        }
    } else {
        console.error('Elemento com id "registrar" não encontrado');
    }
};

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})


console.log('Arquivo JS Layout Geral carregado com sucesso');
