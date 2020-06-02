<?
session_start();
include("../include/mysql_class.php");
$sql="UPDATE `usuarios` 
SET `Nombres`='$_POST[first_name]', 
	`Apellido`='$_POST[last_name]', 
	`FechaNacimiento`='$_POST[start]', 
	`Documento`='$_POST[DOCU]'
WHERE `Idusuario` = '$_SESSION[Idusuario]';";
$micon->consulta($sql);
header('Location: ../Perfil.php?Val=1');
?>