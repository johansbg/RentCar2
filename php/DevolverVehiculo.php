<?
session_start();
include("../include/mysql_class.php");
$sql="SELECT `Idreserva`, `IdVehiculos`, `Idusuario`, `FechayhoraComienzo`, `FechayhoraFinal`, `Total`, `Estado` FROM `reservas` WHERE `Estado`='U' AND `Idusuario`='$_SESSION[Idusuario]' ;";
$micon->consulta($sql);   
$row=$micon->campoconsultaA(); 
$Inicio=$row[FechayhoraComienzo];
$Final=date("Y-m-d H:i:s");  
//2001-03-10 17:16:18
$separacionI = explode(" ", $Inicio);
$separacionF = explode(" ", $Final);
$fechaI=$separacionI[0];
$horaI=$separacionI[1];
$fechaF=$separacionF[0];
$horaF=$separacionF[1];
$sql1="SELECT `IdCategoria` FROM `vehiculos` WHERE `IdVehiculos`='$row[IdVehiculos];'";
$micon1->consulta($sql1);   
$row1=$micon1->campoconsultaA();
$sql2="SELECT `PrecioHora`, `PrecioDia`FROM `categoriavehiculo` WHERE `IdCategoria`='$row1[IdCategoria]';";
$micon2->consulta($sql2);   
$row2=$micon2->campoconsultaA();  
if($fechaI==$fechaF){
    $horaExactaI=explode(":", $horaI);
    $horaExactaF=explode(":", $horaF);
    $tiempoEnhoras=abs(intval($horaExactaI[0])-intval($horaExactaF[0]));
    $Total=(intval($row2[PrecioHora])*intval($tiempoEnhoras+1));
}else{
    $fechaExactaI=explode("-", $fechaI);
    $fechaExactaF=explode("-", $fechaF);
    $tiempoEndias=abs(intval($fechaExactaF[2])-intval($fechaExactaI[2]));
    $Total=(intval($row2[PrecioDia])*intval($tiempoEndias));
}
$sql="SELECT `Saldo` FROM `usuarios` WHERE `Idusuario`='$_SESSION[Idusuario]';";
$micon->consulta($sql);   
$row=$micon->campoconsultaA(); 
$saldoActualizado=intval($row[Saldo])-intval($Total);
$sql4="UPDATE `usuarios` SET `Saldo`='$saldoActualizado' WHERE `Idusuario`='$_SESSION[Idusuario]';";
$micon1->consulta($sql4);
if($saldoActualizado>=0){
    $sql3="UPDATE `reservas` SET `FechayhoraFinal`='$Final',`Total`='$Total',`Estado`='E' WHERE `Estado`='U';";
}else{
    $sql3="UPDATE `reservas` SET `FechayhoraFinal`='$Final',`Total`='$Total',`Estado`='D' WHERE `Estado`='U';";
}
$micon->consulta($sql3);
header('Location: ../Reservas.php?validate=3');
?>