// MAP

window.addEventListener("DOMContentLoaded", (event) => {
    // On initialise la carte 
    let map = L.map('myMap').setView([44.837789,  -0.57918], 13);
    // On charge les tuiles
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', 
    {attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
    minZoom: 1,
    maxZoom: 20
    }).addTo(map);

    // Marqueur et sa popup
    let marker = L.marker([44.837789,  -0.57918]).addTo(map);
    marker.bindPopup("<h4>Bordeaux</h4>");
});