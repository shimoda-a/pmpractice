var map;
var infowindow;

function initialize() {
  //地図
  var latlng = new google.maps.LatLng(35.691468, 140.020508);
  var opts = {
    zoom: 16,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map_canvas"), opts);


//ガバラーメン
  var m_latlng1 = new google.maps.LatLng(35.692207, 140.020934);
  var marker1 = new google.maps.Marker({
    position: m_latlng1,
    map: map
  });
  //情報ウィンドウ
 infowindow = new google.maps.InfoWindow({
    content: 'ガバラーメン',
    position: latlng
  });
//九十九ラーメン
  var m_latlng2 = new google.maps.LatLng(35.692870, 140.022951);
  var marker2 = new google.maps.Marker({
    position: m_latlng2,
    map: map
  });
}

function doOpen(){
  infowindow.open(map);
}
function doClose(){
  infowindow.close();
}

