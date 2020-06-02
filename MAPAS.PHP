<!DOCTYPE html>
<html style="height:100%">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Zipcar">
    <meta name="keywords" content="Zipcar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zipcar</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="css/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
      html, body{
        height:100%;
        margin: 0px;
      }
      #googleMap{
        width:100%;
        height:100%;
      }
    </style>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
      function initialize() {
      // Configuración del mapa
      var mapProp = {
       zoom: 15,
       center: {lat: 11.0117669, lng: -74.8156084},
      mapTypeId: google.maps.MapTypeId.TERRAIN
      };
      // Agregando el mapa al tag de id googleMap
      var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
       
      // Coordenada de la ruta (desde Misiones hasta Tierra del Fuego)
      var flightPlanCoordinates = [
        {lat: 11.0117669, lng: -74.8156084},
        {lat: 11.0159669, lng: -74.8288084}
      ];
      
      // Información de la ruta (coordenadas, color de línea, etc...)
      var flightPath = new google.maps.Polyline({
        path: flightPlanCoordinates,
        geodesic: true,
        strokeColor: '#FF0000',
        strokeOpacity: 1.0,
        strokeWeight: 2
      });
      
      // Creando la ruta en el mapa
      flightPath.setMap(map);
      }
       
      // Inicializando el mapa cuando se carga la página
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
  	<div id="googleMap"></div>
    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"height":554,"width":803,"zoom":17,"queryString":"Cra. 54 #96-157, Barranquilla, Atlántico, Colombia","place_id":"EjNDcmEuIDU0ICM5Ni0xNTcsIEJhcnJhbnF1aWxsYSwgQXRsw6FudGljbywgQ29sb21iaWEiGxIZChQKEgl1Zczvsi30jhE4-639u2mwtxCdAQ","satellite":false,"centerCoord":[11.014206653090906,-74.82563124999997],"lang":"es","cityUrl":"/colombia/hacienda-caujaral-80369","cityAnchorText":"Mapa de Hacienda Caujaral, Atlántico, Colombia","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"212066"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=212066';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/es/map-embed">1 Map</a></div>
  </body>
</html>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=ISO-8859-1">
<title>Ejemplo de Google Maps API</title>
<script src="http://maps.google.com/maps?file=api&v=2&key=AQUI-TU-CLAVE-GOOGLE-MAPS" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function load() {
   if (GBrowserIsCompatible()) {
      var map = new GMap2(document.getElementById("map"));   
      map.setCenter(new GLatLng(40.41689826118782,-3.7034815549850464), 17);   
      map.addControl(new GLargeMapControl());
      map.setMapType(G_SATELLITE_MAP);
   
      var point = new GPoint (-3.7034815549850464, 40.41689826118782);
      var marker = new GMarker(point);
      map.addOverlay(marker);
   }
}
//]]>
</script>
</head>
<body onload="load()" onunload="GUnload()">
<div id="map" style="width: 615px; height: 400px"></div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Un mapa sencillo</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <style>
    html, body, #mapa {
    	height:500px;
    	width:800px;
    	margin:0px;
    	padding:0px;
    }
  </style>
  <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script>
    var mapa;
		function initialize() {
				// las coordenadas de Barcelona		
				var chinchetas = [
				{title: "Carro1", pin:"red-dot", lat: 11.0117669, lng: -74.8156084},
				{title: "Carro2", pin:"red-dot", lat: 11.0017669, lng: -74.8356084}, 
				{title: "Carro3", pin:"red-dot", lat: 11.0007669, lng: -74.8256084},
				];
				
				var centroMapa = new google.maps.LatLng(11.0117669,-74.8156084);
			
				var opcionesDeMapa = {
						zoom: 12,
						center: centroMapa,
						mapTypeId: google.maps.MapTypeId.ROADMAP //SATELITE, HYBRID, ROADMAP, TERRAIN
				};
				// instancia un nuevo objeto Map
				mapa = new google.maps.Map(document.getElementById("mapa"), opcionesDeMapa);										
				
				var marcador, pin;
				// la carpeta donde se encuentran los iconos de Google
				var url = "http://maps.google.com/mapfiles/ms/micons/";
				for( var i = 0; i < chinchetas.length; i++){
				// el icono utilizado 
				pin = url + chinchetas[i].pin + ".png";
				// nuevo marcador
				marcador = new google.maps.Marker({
						position: new google.maps.LatLng(chinchetas[i].lat, chinchetas[i].lng),
						map: mapa,
						title: chinchetas[i].title,
						icon: pin
				});		
			}
		}// acaba la función initialize
				// inicializa el mapa cuando la ventana se haya cargado:
		google.maps.event.addDomListener(window, "load", initialize);
  </script>
</head>
<body>
  <div id="mapa"></div>
</body>
</html>