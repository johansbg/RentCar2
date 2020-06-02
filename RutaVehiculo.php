<!DOCTYPE html>
<html lang="en">
<?include("include/mysql_class.php");?>
<?session_start();?>
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
      #googleMap{
        height:500px;
    	width:1200px;
    	margin: 0px;
    	padding:0px;
      }
    </style>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript">
      function initialize() {
      // Configuración del mapa
      var mapProp = {
       zoom: 14,
       center: {lat: 11.0117669, lng: -74.8156084},
      mapTypeId: google.maps.MapTypeId.TERRAIN
      };
      // Agregando el mapa al tag de id googleMap
      var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
       
      // Coordenada de la ruta (desde Misiones hasta Tierra del Fuego)
      <?$sql="SELECT `Latitud`, `Longitud` FROM `vehiculos` WHERE`IdVehiculos`='$_GET[idVeh]';";
      $micon->consulta($sql);
      $row=$micon->campoconsultaA();
      ?>
      var flightPlanCoordinates = [
        {lat: 11.0217669, lng: -74.8156084},
        {lat: <?=$row[Latitud]?>, lng: <?=$row[Longitud]?>}
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
<?include("Content/cabecera.php")?>

    <!-- Header End -->
    <br>
    <br>
    <br> 
    <br>
    <br>
	<section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                            <h2>Ruta de Vehiculo reservado</h2>
                            <p>Aqui podreas ver la ruta de tu vehiculo llegando donde ti, si el vehiculo ya esta contigo, presionar en comenzar reserva.</p>
                        </div>
                    </div>
            </div>
        </div>
    </section> 
	<section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="googleMap"></div>
					</div>
                </div>
            </div>
	</section>
    <br>
    <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="./php/CrearReserva.php?idUser=<?=$_SESSION[Idusuario]?>&idVeh=<?=$_GET[idVeh]?>" class="primary-btn" value="Agregar Vehiculo">Comenzar Reserva</a>
                        <a href="Catalogo.php?error=1" class="primary-btn" value="Agregar Categoria">Vehiculo no llego</a>
					</div>
                </div>
            </div>
	</section>
	<br>
    <br>
    <br> 
	<?include("Content/footer.php")?>
</body>
</html>