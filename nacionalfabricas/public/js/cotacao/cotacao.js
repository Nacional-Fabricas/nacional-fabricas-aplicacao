// Função para abrir e fechar a cotação
function abrirCotacao() {
    var cotacao = document.getElementById("cotacao");
    if (cotacao.style.display === 'flex') {
        cotacao.style.display = 'none';
        cotacao.style.animation = 'fadeOut 2s';
    } else {
        cotacao.style.display = 'flex';
    }
}

function areaCompra() {

    menuCompra = document.getElementById('orcamento');
    sidebar = document.getElementById('sidebarMenu');

    const sidebarStyles = window.getComputedStyle(sidebar);
    const sidebarWidth = sidebarStyles.getPropertyValue('width');

    if (menuCompra.style.display === 'none' && sidebarWidth > '50%') {

        menuCompra.style.display = 'flex'

    } else {

        menuCompra.style.display = 'none'
    }

}

