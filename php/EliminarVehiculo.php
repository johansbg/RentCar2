<?
session_start();
include("../include/mysql_class.php");
$IDvehiculo=$_GET[Idvehi];
$sql="DELETE FROM `vehiculos` WHERE `IdVehiculos`='$IDvehiculo';";
$micon->consulta($sql);
header('Location: ../AdministrarVehiculos.php?Validate=1');
?>