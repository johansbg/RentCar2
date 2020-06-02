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
    #mapa {
    	height:500px;
    	width:1200px;
    	margin: 0px;
    	padding:0px;
    }
  </style>
  <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script>
    var mapa;
		function initialize() {
            <?$sql="SELECT 	`Nombre`,
                            `Latitud`,
                            `Longitud`
                     FROM `vehiculos`";	
                     $micon->consulta($sql);
                ?>
				var chinchetas = [
                <?while($row=$micon->campoconsultaA()){?>
				    {title: "<?=$row[Nombre]?>", pin:"red-dot", lat: <?=$row[Latitud]?>, lng: <?=$row[Longitud]?>},
                <?}?>
				];
				//lat: 11.0117669, lng: -74.8156084
				var centroMapa = new google.maps.LatLng(11.0117669,-74.8156084);
			
				var opcionesDeMapa = {
						zoom: 14,
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
                            <h2>Ubicacion de Vehiculos Disponibles</h2>
                            <p>Seccion determinada para la visualizacion de Vehiculos disponibles</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
	<br>
    <br>
    <br> 
	<section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
  						<div id="mapa"></div>
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