<?
session_start();
include("../include/mysql_class.php");
$IDusuario=$_GET[UserID];
$sql="DELETE FROM `usuarios` WHERE `Idusuario`='$IDusuario';";
$micon->consulta($sql);
header('Location: ../AdminstrarUsuarios.php?Validate=1');
?>