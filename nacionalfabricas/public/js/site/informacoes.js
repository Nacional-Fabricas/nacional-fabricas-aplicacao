document.addEventListener('DOMContentLoaded', function () {
    const verInformacoesBtn = document.querySelector('.ver-informacoes');
    const informacoesContato = document.querySelector('.informacoes-contato');
    const fecharInformacoesBtn = document.createElement('button');
    fecharInformacoesBtn.classList.add('fechar-informacoes');
    fecharInformacoesBtn.textContent = 'Fechar Informações';
    informacoesContato.appendChild(fecharInformacoesBtn);

    verInformacoesBtn.addEventListener('click', () => {
        informacoesContato.style.display = 'flex';
        verInformacoesBtn.style.display = 'none';
    });

    fecharInformacoesBtn.addEventListener('click', () => {
        informacoesContato.style.display = 'none';
        verInformacoesBtn.style.display = 'block';
    });
});
