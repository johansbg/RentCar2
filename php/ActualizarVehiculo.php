<?
require('../include/mysql_class.php');
require('../include/resize-class.php');
$idVehc=$_GET[idVeh];
$Nombre=$_POST[Nombre];
$Marca=$_POST[Marca];
$Modelo=$_POST[Modelo];
$Color=$_POST[Color];
$Año=$_POST[Año];
$Kilometraje=$_POST[Kilometraje];
$Categoria=$_POST[Categoria];
$PrdImagen1		= $_POST[PrdImagen1];
$FilePrdImagen1	= $_FILES[PrdImagen1];
$PrdImagen2		= $_POST[PrdImagen2];
$FilePrdImagen2	= $_FILES[PrdImagen2];
$PrdImagen3		= $_POST[PrdImagen3];
$FilePrdImagen3 = $_FILES[PrdImagen3];
echo $PrdImagen1;
echo $FilePrdImagen1;
echo $PrdImagen2;

$fileExt1 = pathinfo($_FILES[PrdImagen1][name], PATHINFO_EXTENSION);
$fileExt2 = pathinfo($_FILES[PrdImagen2][name], PATHINFO_EXTENSION);
$fileExt3 = pathinfo($_FILES[PrdImagen3][name], PATHINFO_EXTENSION);

$sql="UPDATE `vehiculos` 
SET 
`Nombre`='$Nombre',
`Marca`='$Marca',
`Modelo`='$Modelo',
`Color`='$Color',
`Ano`='$Año',
`Kilometraje`='$Kilometraje',
`IdCategoria`='$Categoria'
WHERE `IdVehiculos`='$idVehc';";
$micon->consulta($sql);
echo $sql;
$IdVehiculos=$idVehc;
echo $IdVehiculos;
$ruta = '../images/productos/'.$IdVehiculos.'/';
if (!file_exists($ruta)) {
    mkdir($ruta, 0777, true);
}
echo $_FILES['PrdImagen1']['tmp_name'].'<=<br>';
if($_FILES['PrdImagen1']['tmp_name']!=""){

	$fileExt = pathinfo($_FILES['PrdImagen1'][name], PATHINFO_EXTENSION);
	$Images =   'Product-'.$IdVehiculos.'-1.'.$fileExt;
	//echo $Images;
	//echo $Images.'<br>';

	$target_path = $ruta . $Images;
	
	if(move_uploaded_file($_FILES['PrdImagen1']['tmp_name'], $target_path)) { 
		$resizeObj = new resize($target_path);
		$resizeObj -> resizeImage(400, 300,'exact');
		$resizeObj -> saveImage($target_path, 100);
	}else{
		echo "No sube foto===>".$_FILES['PrdImagen1']['tmp_name'].' <-> '.$target_path;
	}

	$sql = "UPDATE vehiculos SET Imagen1='".$Images."' WHERE IdVehiculos='".$IdVehiculos."'";
	echo $sql.'2----<br>';
	$micon->consulta($sql);
}
echo $_FILES['PrdImagen2']['tmp_name'].'<=<br>';

if($_FILES['PrdImagen2']['tmp_name']!=""){

	$fileExt = pathinfo($_FILES['PrdImagen2'][name], PATHINFO_EXTENSION);
	$Images =   'Product-'.$IdVehiculos.'-2.'.$fileExt;
	//echo $Images;
	//echo $Images.'<br>';

	$target_path = $ruta . $Images;
	
	if(move_uploaded_file($_FILES['PrdImagen2']['tmp_name'], $target_path)) { 
		$resizeObj = new resize($target_path);
		$resizeObj -> resizeImage(400, 300,'exact');
		$resizeObj -> saveImage($target_path, 100);
	}else{
		echo "No sube foto===>".$_FILES['PrdImagen2']['tmp_name'].' <-> '.$target_path;
	}

	$sql = "UPDATE vehiculos SET Imagen2='".$Images."' WHERE IdVehiculos='".$IdVehiculos."'";
	echo $sql.'2----<br>';
	$micon->consulta($sql);
}
echo $_FILES['PrdImagen3']['tmp_name'].'<=<br>';
if($_FILES['PrdImagen3']['tmp_name']!=""){

	$fileExt = pathinfo($_FILES['PrdImagen3'][name], PATHINFO_EXTENSION);
	$Images =   'Product-'.$IdVehiculos.'-3.'.$fileExt;
	//echo $Images;
	//echo $Images.'<br>';

	$target_path = $ruta . $Images;
	
	if(move_uploaded_file($_FILES['PrdImagen3']['tmp_name'], $target_path)) { 
		$resizeObj = new resize($target_path);
		$resizeObj -> resizeImage(400, 300,'exact');
		$resizeObj -> saveImage($target_path, 100);
	}else{
		echo "No sube foto===>".$_FILES['PrdImagen3']['tmp_name'].' <-> '.$target_path;
	}

	$sql = "UPDATE vehiculos SET Imagen3='".$Images."' WHERE IdVehiculos='".$IdVehiculos."'";
	echo $sql.'2----<br>';
	$micon->consulta($sql);
}
header('Location: ../AdministrarVehiculos.php?Validate=2');
?>