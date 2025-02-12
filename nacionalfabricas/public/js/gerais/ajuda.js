document.addEventListener('DOMContentLoaded', function () {
    const perguntas = document.querySelectorAll('.perguntas h4');
    const respostas = document.querySelectorAll('.respostas span');

    perguntas.forEach((pergunta, index) => {
        pergunta.addEventListener('click', () => {
            perguntas.forEach(p => p.classList.remove('active'));
            respostas.forEach(r => r.classList.remove('active'));

            pergunta.classList.add('active');
            respostas[index].classList.add('active');
        });
    });
});
