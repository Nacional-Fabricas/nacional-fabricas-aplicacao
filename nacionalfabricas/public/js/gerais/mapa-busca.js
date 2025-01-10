
//Mapa da Busca Geral
window.initMap = function () {
    if (typeof google === 'undefined' || typeof google.maps === 'undefined') {
        console.error("Google Maps não foi carregado corretamente.");
        return;
    }

    // Inicializa o mapa
    const map = new google.maps.Map(document.getElementById("map"), {
        center: {lat: -23.5505, lng: -46.6333}, // Centraliza o mapa (São Paulo)
        zoom: 5
    });

    // Exemplo de dados retornados do backend (Livewire ou outra tecnologia)
    let enderecos = window.enderecos;  // Usando a variável "enderecos" definida globalmente

    // Adiciona marcadores no mapa para cada endereço
    enderecos.forEach(endereco => {
        const marker = new google.maps.Marker({
            position: {lat: parseFloat(endereco.latitude), lng: parseFloat(endereco.longitude)},
            map: map,
            title: endereco.nome // Usando o nome da empresa como título
        });

        // Adiciona um evento de clique para exibir mais informações
        const infowindow = new google.maps.InfoWindow({
            content: `<h3>${endereco.nomeEmpresa}</h3>`
        });

        marker.addListener("click", () => {
            infowindow.open(map, marker);
        });
    });
}

console.log('ola')
