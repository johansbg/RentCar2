<?
include("../include/mysql_class.php");
$Correo=$_POST[email];
$Clave=$_POST[password];
$sql="SELECT 	
	`Correo` 
	FROM 
    `usuarios`
    WHERE `Correo`='$Correo';";
$micon->consulta($sql);
$row=$micon->campoconsultaA();
if($row[Correo]==""){
    $sql="INSERT INTO `usuarios` 
	(
	`Correo`, 
	`Contraseña`
	)
	VALUES
	( 
	'$Correo', 
	'$Clave'
	);";
    $micon->consulta($sql);
    header('Location: ../Login.php?user=2');
}else{
    header('Location: ../Login.php?user=1');
}
?>