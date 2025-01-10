// Script para pesquisa mobile
var buscaMobile = document.getElementById("formPesquisa");
var close = document.getElementById("close");
var mobileAviso = document.getElementById("mobileAviso");

document.addEventListener('DOMContentLoaded', function () {

    window.pesquisaMobile = function() {

        var buscaMobile= document.getElementById("formPesquisa");
        var close = document.getElementById("close");
        var mobileAviso = document.getElementById("mobileAviso");

        if (!buscaMobile.style.display){

            console.log('erro')
        }

        if (buscaMobile.style.display != null && buscaMobile.style.display === 'flex') {

            buscaMobile.style.display = 'none';
            close.style.display = 'none';
            mobileAviso.style.display = 'none';
        } else {

            buscaMobile.style.display = 'flex';
            close.style.display = 'flex';
            mobileAviso.style.display = 'flex';
        }
    }

    // Agora a função 'pesquisaMobile' estará disponível
});

console.log('busca-geral.js funcionando')
