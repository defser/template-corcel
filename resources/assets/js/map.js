var map;
function initMap() {


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


//   var mapLocation = {lat: -30.0346471, lng: -51.217658400000005}

//   var map = new google.maps.Map(document.getElementById('map'), {
//     zoom: 10,
//     center: mapLocation,
//     scrollwheel: false
//   })

//   var image = new google.maps.MarkerImage('/images/map-icon.png',
//     new google.maps.Size(59, 65),
//     new google.maps.Point(0, 0),
//     new google.maps.Point(24, 42)
//   );


//   var marker = new google.maps.Marker({
//     position: mapLocation,
//     //icon: image,
//     title: 'Hello World!'
//   })

//   map.addMarker({
//         position: mapLocation,
//         icon: image,
//         title: 'Titulo',
//         infoWindow: {
//             content: '<p><strong>Titulo</strong><br/>rua xyz<br/><br/>	(55) 3333333 - teste@teste.com.br</p>'
//         }
//     });
}