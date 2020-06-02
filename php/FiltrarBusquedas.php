<?
session_start();
include("../include/mysql_class.php");
$filtro2="";
$filtro="SELECT 	`IdVehiculos`, 
`Nombre`, 
`Marca`, 
`Modelo`, 
`Color`,
`Ano`, 
`Kilometraje`, 
`IdCategoria`,
`Imagen1`, 
`Imagen2`, 
`Imagen3`
FROM 
`vehiculos`
WHERE '1'='1' AND ('1'='2' ";
$sql1="SELECT `IdCategoria`, 
                `NombreCategoria`, 
                `PrecioHora`, 
                `PrecioDia`, 
                `Tiempodevida`
                FROM 
                `categoriavehiculo`";
                $micon1->consulta($sql1);
$val="0";
while($row1=$micon1->campoconsultaA()){
    if($_POST[$row1[NombreCategoria]]=="yes"){
        $filtro=$filtro."OR `IdCategoria`='$row1[IdCategoria]' ";
        $val="1";
    }
}
if($val=="1"){
    $filtro=$filtro.") AND ('1'='2' ";
}else{
    $filtro=$filtro."OR '1'='1') AND ('1'='2' ";
}
$sql="SELECT DISTINCT `Marca`
      FROM 
      `vehiculos`";
$micon->consulta($sql);
$val1="0";
while($row=$micon->campoconsultaA()){
    if($_POST[$row[Marca]]=="yes"){
        $val1="1";
        $filtro=$filtro." OR `Marca`='$row[Marca]'";
    }
}
if($val1=="1"){
    $filtro=$filtro.") AND ('1'='2' ";
}else{
    $filtro=$filtro."OR '1'='1') AND ('1'='2' ";
}
$max = explode("$", $_POST[maxamount]);
$min = explode("$", $_POST[minamount]);
$filtro2=$filtro2."AND (PrecioDia BETWEEN $min[1] AND $max[1]) AND (PrecioHora BETWEEN $min[1] AND $max[1]);";
$SW1="0";
$SW2="0";
$SW3="0";
$SW4="0";
$SW5="0";
$SW6="0";
$negro=$_POST[negro];
if($negro=="yes"){
    $filtro=$filtro." OR `Color`='NEGRO' ";
}else{
    $SW1="1";
}
$blanco=$_POST[blanco];
if($blanco=="yes"){
    $filtro=$filtro." OR `Color`='BLANCO' ";
}else{
    $SW2="1";
}
$azul=$_POST[azul];
if($azul=="yes"){
    $filtro=$filtro." OR `Color`='AZUL' ";
}else{
    $SW3="1";
}
$Amarillo=$_POST[Amarillo];
if($Amarillo=="yes"){
    $filtro=$filtro." OR `Color`='AMARILLO' ";
}else{
    $SW4="1";
}
$rojo=$_POST[rojo];
if($rojo=="yes"){
    $filtro=$filtro." OR `Color`='ROJO' ";
}else{
    $SW5="1";
}
$verde=$_POST[verde];
if($verde=="yes"){
    $filtro=$filtro." OR `Color`='VERDE' ";
}else{
    $SW6="1";
}
if($SW1=="1"){
    if($SW2=="1"){
        if($SW3=="1"){
            if($SW4=="1"){
                if($SW5=="1"){
                    if($SW6=="1"){
                        $filtro=$filtro."OR '1'='1')";
                    }else{
                        $filtro=$filtro.")";
                    }
                }else{
                    $filtro=$filtro.")";
                }
            }else{
                $filtro=$filtro.")";
            }
        }else{
            $filtro=$filtro.")";
        }
    }else{
        $filtro=$filtro.")";
    }
}else{
    $filtro=$filtro.")";
}
$orden=$_POST[orden];
if($orden==0){
    $filtro=$filtro." ORDER BY IdVehiculos DESC;";
}else{
    if ($orden==1) {
        $filtro=$filtro." ORDER BY Ano DESC;";
    }else{
        if ($orden==2) {
            $filtro=$filtro." ORDER BY Ano ASC;";
        }
    }
}
echo $filtro;
echo '<br>';
echo $filtro2;
$filtroEnc1= base64_encode($filtro);
$filtroEnc2= base64_encode($filtro2);
header('Location: ../Catalogo.php?SRCH='.$filtroEnc1."&SRCH2=".$filtroEnc2);
?>