<?
include("../include/mysql_class.php");
$NombreCategoria=$_POST[NombreCategoria];
$PrecioHora=$_POST[PrecioHora];
$PrecioDia=$_POST[PrecioDia];
$Tiempodevida=$_POST[Tiempodevida];

$sql="INSERT INTO `categoriavehiculo` 
	(
    `NombreCategoria`, 
    `PrecioHora`, 
	`PrecioDia`, 
	`Tiempodevida`
	)
	VALUES
	( 
    '$NombreCategoria',
    '$PrecioHora',
    '$PrecioDia',
    '$Tiempodevida'
	);";
$micon->consulta($sql);
header('Location: ../AdministrarVehiculos.php?val=1');
?>