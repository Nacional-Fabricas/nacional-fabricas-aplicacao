function initSingleMap () {
    if (typeof google === 'undefined' || typeof google.maps === 'undefined') {
        console.error("Google Maps não foi carregado corretamente.");
        return;
    }

    // Inicializa o mapa
    const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -23.5505, lng: -46.6333 }, // Centraliza o mapa (São Paulo)
        zoom: 4
    });

    // A variável "window.enderecoSite" é passada do Blade
    const enderecoSite = window.enderecoSite;

    if (!enderecoSite) {
        console.error("Endereço não encontrado.");
        return;
    }

    // Cria o marcador para o único endereço
    const marker = new google.maps.Marker({
        position: { lat: parseFloat(enderecoSite.latitude), lng: parseFloat(enderecoSite.longitude) },
        map: map,
        title: enderecoSite.nomeEmpresa // Usando o nome da empresa como título
    });

    // Adiciona um evento de clique para exibir mais informações
    const infowindow = new google.maps.InfoWindow({
        content: `<h3>${enderecoSite.nomeEmpresa}</h3>`
    });

    marker.addListener("click", () => {
        infowindow.open(map, marker);
    });
}

console.log('mapa-site.js funcionando')
