document.addEventListener('DOMContentLoaded', function () {
    const etapas = document.querySelectorAll('.etapa');
    etapas.forEach((etapa, index) => {
        setTimeout(() => {
            const numero = etapa.querySelector('.etapa-numero');
            const descricao = etapa.querySelector('.etapa-descricao');
            numero.classList.add('show');
            setTimeout(() => {
                descricao.classList.add('show');
            }, 500); // Delay between numero and descricao
        }, (index + 1) * 1500); // Delay between each etapa
    });
});
