function initMap() {
 var longitude = $('#map').attr('data-long');
var latitude = $('#map').attr('data-lat');

  var uluru = {lat: parseInt(latitude), lng: parseInt(longitude)};
console.log(uluru);
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 3,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}