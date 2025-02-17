function mostrarEtapa(etapa) {
    document.querySelectorAll('.etapa').forEach(function(el) {
        el.style.display = 'none';
    });
    document.getElementById('etapa-' + etapa).style.display = 'flex';
}
