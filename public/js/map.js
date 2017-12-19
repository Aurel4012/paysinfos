function initMap() {
  var longitude = $(this).attr('data-long');
  var latitude = $(this).attr('data-lat');
  var uluru = {lat: 46.115909, lng: 3.435792};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}