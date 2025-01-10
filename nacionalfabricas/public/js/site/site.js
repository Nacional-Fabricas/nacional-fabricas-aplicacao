
var infoBasica = document.getElementById("infoContato");
var close = document.getElementById("close");

window.verInfo = function() {

    // Script para exibir ou esconder os dados de contato
    if (infoBasica.style.display === 'flex') {
        infoBasica.style.display = 'none';
        close.style.display = 'none';
    } else {
        infoBasica.style.display = 'flex';
        close.style.display = 'flex';
    }
}

console.log('site.js funcionando')




