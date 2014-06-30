function initialize() {
  var latlng = new google.maps.LatLng(34.434877,135.24421);
  var opts = {
    zoom: 11,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map_canvas"), opts);

  var infowindow = new google.maps.InfoWindow({
    content: '関西空港',
    position: latlng
  });
  infowindow.open(map);
}