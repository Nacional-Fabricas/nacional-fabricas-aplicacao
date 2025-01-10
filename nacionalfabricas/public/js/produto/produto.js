

document.addEventListener('DOMContentLoaded', function () {

    // Função para esconder o aviso
    window.hiddenAviso = function() {

        var blocoAviso = document.getElementById("blocoAviso");

            if(blocoAviso.style.display === "flex") {
                blocoAviso.style.display = "none";
            } else {
                blocoAviso.style.display = "none";
            }
        }

    // Script para exibir os dados de contato
    var infoBasica = document.getElementById("infoContato");
    var close = document.getElementById("close");

    // Script para alternar a imagem em destaque quando trocar
    window.changeHighlightedImg = function() {

        var destaqueImg = document.querySelector('.destaqueImg');

            if (isThumbnail) {
                destaqueImg.style.backgroundImage = 'url(/nacionalfabricas/public/images/thumbnails/' + url + ')';
            } else {
                destaqueImg.style.backgroundImage = 'url(/nacionalfabricas/public/images/' + url + ')';
            }
        }
});
