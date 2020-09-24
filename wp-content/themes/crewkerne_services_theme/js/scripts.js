$(document).ready(function(){

  //mapid
  if($("#mapid").length > 0){
    var map = L.map('mapid').setView([50.881500, -2.788814], 15);

    var OpenStreetMap_Mapnik = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var BobsMarker = L.icon({
      iconUrl: '../../wp-content/themes/BobsTyresLtd/images/map-marker.png',
      iconSize: [20,30]
    });

    L.marker([50.883680, -2.790659]).addTo(map).bindPopup("<h4 class='text-center'>We're Here!</h4><small>Crewkerne Business Park Cropmead</small>").openPopup();
  }

});
