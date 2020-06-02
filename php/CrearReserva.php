<?
include("../include/mysql_class.php");
$iduser=$_GET[idUser];
$idveh=$_GET[idVeh];
$hoy = date("Y-m-d H:i:s");
$sql="SELECT `Saldo` FROM `usuarios` WHERE `Idusuario`='$_SESSION[Idusuario]';";
$micon->consulta($sql);   
$row=$micon->campoconsultaA();
if(intval($row[Saldo])>=0){
    $sql="INSERT INTO `reservas`(`IdVehiculos`, `Idusuario`, `FechayhoraComienzo`, `FechayhoraFinal`, `Total`, `Estado`) VALUES ('$idveh','$iduser','$hoy','No Definida','No Definido','U')";
    $micon->consulta($sql);
    header('Location: ../Reservas.php?validate=1');
}else{
    header('Location: ../Reservas.php?validate=2');
}

?>