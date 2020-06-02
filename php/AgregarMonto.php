<?
session_start();
include("../include/mysql_class.php");
$cantidad=$_POST[Cantidad];
$sql="SELECT `Saldo` FROM `usuarios` WHERE `Idusuario`='$_SESSION[Idusuario]';";
$micon->consulta($sql);   
$row=$micon->campoconsultaA();   
$saldoA=$row[Saldo];
$saldoN=intval($saldoA)+intval($cantidad);
$sql="UPDATE `usuarios` SET `Saldo`='$saldoN' WHERE `Idusuario`='$_SESSION[Idusuario]';";
$micon->consulta($sql);
header('Location: ../Perfil.php?Val=2');
?>