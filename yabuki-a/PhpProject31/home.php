<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <title>Google Maps JavaScript API サンプル</title>
  <div id="map" style="width: 740px; height: 400px;"></div>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">


  var Gaba ="こんちくわ";

				
				
  var myLatLng = new google.maps.LatLng(35.691688,140.020513);

  function attachMessage(marker, msg) {
    google.maps.event.addListener(marker, 'click', 
      function(event) {
      window.open("commentform.php", "width=350,height=250,scrollbars=yes");
    });
  };

  
  var data = new Array();
  data.push({position: new google.maps.LatLng(35.692768,140.019933), 
    content: Gaba,
  });
  data.push({position: new google.maps.LatLng(35.692500,140.019500), 
    content: Gaba,
  });


  var myMap = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: myLatLng,
    scrollwheel: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });


  //津田沼駅周辺1kmをぬってみました
new google.maps.Circle({
  center: myLatLng,       // 中心点(google.maps.LatLng)
  fillColor: '#ff0000',   // 塗りつぶし色
  fillOpacity: 0.5,       // 塗りつぶし透過度（0: 透明 ⇔ 1:不透明）
  map: myMap,             // 表示させる地図（google.maps.Map）
  radius: 1000,          // 半径（ｍ）
  strokeColor: '#ff0000', // 外周色 
  strokeOpacity: 1,       // 外周透過度（0: 透明 ⇔ 1:不透明）
  strokeWeight: 1         // 外周太さ（ピクセル）
 });



  for (i = 0; i < data.length; i++) {
    var myMarker = new google.maps.Marker({
      position: data[i].position,
      map: myMap,   
    });
    attachMessage(myMarker, data[i].content);
  };
  
  

</script></head>
<body></body>
</html>