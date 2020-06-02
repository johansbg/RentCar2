<?
session_start();
include("../include/mysql_class.php");
$Correo=$_POST[email];
$Clave=$_POST[password];
$sql="SELECT 	`Idusuario`, 
`Correo`, 
`Contraseña`, 
`Nombres`, 
`Apellido`, 
`FechaNacimiento`, 
`Documento`, 
`Membresia`, 
`Perfil`
FROM 
`usuarios`
WHERE Correo='$Correo' AND Contraseña='$Clave';";
$micon->consulta($sql);
$row=$micon->campoconsultaA();
if($row[Correo]!=""){
	if ($_POST[remember]=="yes") {
		setcookie("email",$_POST[email],time() + 60 * 60 * 24 * 30, "/");
		setcookie("password",$_POST[password],time() + 60 * 60 * 24 * 30, "/");
    }else{
		setcookie("email",'',time()-100, "/");
		setcookie("password",'',time()-100, "/");
	}
	$_SESSION['Idusuario']  	= $row[Idusuario];
    $_SESSION['Correo']  	= $row[Correo];
	$_SESSION['Contraseña']  = $row[Contraseña];
    $_SESSION['Nombres'] 	= $row[Nombres];
	$_SESSION['Apellido'] 	= $row[Apellido];
	$_SESSION['FechaNacimiento'] 	= $row[FechaNacimiento];
    $_SESSION['Documento'] 	= $row[Documento];
    $_SESSION['Membresia'] 	= $row[Membresia];
    $_SESSION['Perfil'] 	= $row[Perfil];
    header('Location: ../index.php');
}else{
    header('Location: ../Login.php?Validate=1');
}

?>