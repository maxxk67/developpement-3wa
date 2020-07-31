document.addEventListener('DOMContentLoaded', function() {
    //attend le chargement complet de la page.

const button= document.querySelector('#infosstations');

button.addEventListener('click', vaChercher); //ecoute le bouton infostations

var map;
var marker;

function vaChercher(e) {
    console.log('ok');
    e.preventDefault();
    let url = "https://api.jcdecaux.com/vls/v1/stations?apiKey=819c002124b7e7c5e4724df217dd72fa4e312299&contract=mulhouse";
    $.get(url , load);
} //Je recupère les données velib au sein de L'api Jcdeceaux.

    // je charge les données.
    
function load (data) {

    let stations = data
    
    //je les affiches dans une liste sur la page HTML.
    $("#list").append("<tr><th>Nom station </th> <th> adresse </tr>");
    
    for (let i = 0; i < data.length ; i++) {
    $("#list").append(`<tr><td data-number = "${stations[i].number}" > ${stations[i].name}</td><td> ${stations[i].address}</td></tr>`);
        
    }
}

    // poser des listeners sur tout les elements ( td) presents et futurs
    // delegate event
    $(document).on('click', "td", function() { // ad event listner (ecoute)

        // recuperer le numero de la station
        // lire le dataset number sur le (tr)
        let number = $(this).data('number');
        let url = 'https://api.jcdecaux.com/vls/v3/stations/'+ number +'?apiKey=819c002124b7e7c5e4724df217dd72fa4e312299&contract=mulhouse'
        $.get(url , infos);

    });
// je recupere les informations de la station en fontion du numéro cliquer.
function infos (data) {
    
    let station = data;
// J'affiche les informations de la station cliqué.
    $("#station").show();
    $("#station h1:first-child").text(station.name)
    $("#available-bikes").text(station.mainStands.availabilities.bikes)
    $("#address").text(station.address)
    $("#free-slots").text(station.mainStands.availabilities.stands)
    $("#GPS").text(station.position.latitude + ',' + station.position.longitude)
}


});

    // affichage de la carte
        
         // initialisation

        if( map == null )
        {
            map = L.map('map').setView([station.position.latitude, station.position.longitude], 14);
        
            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicnplIiwiYSI6ImNrZDh1MnIwYTAxbXkzM3J4MzQ4OGNnZDEifQ.p3Jqg1aMILv4CRHydga2gQ'
            , {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1IjoicnplIiwiYSI6ImNrZDh1MnIwYTAxbXkzM3J4MzQ4OGNnZDEifQ.p3Jqg1aMILv4CRHydga2gQ'
            }).addTo(map);
            marker = L.marker([station.position.latitude, station.position.longitude]).addTo(map);
        }
        else
        {
            map.panTo([station.position.latitude, station.position.longitude])
            marker.setLatLng([station.position.latitude, station.position.longitude])
        }