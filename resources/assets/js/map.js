var map;
function initMap() 
{
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: {lat: -30.0346471, lng: -51.217658400000005}
  });

  var image = 'images/map-icon.png';
  var marker = new google.maps.Marker({
    position: {lat: -30.0346471, lng: -51.217658400000005},
    map: map,
    icon: image,
    title: 'Uluru (Ayers Rock)'
  });

  var infowindow = new google.maps.InfoWindow({
    content: "endereço"
  });

  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}
