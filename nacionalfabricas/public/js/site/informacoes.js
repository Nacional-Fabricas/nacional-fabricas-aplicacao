document.addEventListener('DOMContentLoaded', function () {
    const verInformacoesBtn = document.querySelector('.ver-informacoes');
    const informacoesContato = document.querySelector('.informacoes-contato');
    let fecharInformacoesBtn = document.querySelector('.fechar-informacoes');

    if (!fecharInformacoesBtn) {
        fecharInformacoesBtn = document.createElement('button');
        fecharInformacoesBtn.classList.add('fechar-informacoes');
        fecharInformacoesBtn.textContent = 'Fechar Informações';
        informacoesContato.appendChild(fecharInformacoesBtn);
    }

    verInformacoesBtn.addEventListener('click', () => {
        informacoesContato.style.display = 'flex';
        verInformacoesBtn.style.display = 'none';
    });

    fecharInformacoesBtn.addEventListener('click', () => {
        informacoesContato.style.display = 'none';
        verInformacoesBtn.style.display = 'block';
    });

    // Função para exibir/ocultar os horários
    window.verHorarios = function() {
        const blocoHorarios = document.querySelector('.bloco-horarios');
        if (blocoHorarios) {
            if (blocoHorarios.style.display === 'flex') {
                blocoHorarios.style.display = 'none';
            } else {
                blocoHorarios.style.display = 'flex';
            }
        }
    };
});
