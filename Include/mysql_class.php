<?php
session_start();
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set("America/Bogota");
require_once('setup.php');

class DB_mysql{
	/* variables de conexi�n */
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	/* identificador de conexi�n y consulta */
	var $Conexion_ID = 0;
	var $Consulta_ID = 0;
	/* n�mero de error y texto error */
	var $Errno = 0;
	var $Error = "";
	
	
	/// variables de log 
	var $IpLog;
	var $UserLog;
	var $PageLog;
	
	/* M�todo Constructor: Cada vez que creemos una variable de esta clase, se ejecutar� esta funci�n */
	function DB_mysql($bd = "", $host = "localhost", $user = "nobody", $pass = "") {
		$this->BaseDatos = $bd;
		$this->Servidor = $host;
		$this->Usuario = $user;
		$this->Clave =$pass;
	}
	/*Conexi�n a la base de datos*/
	function conectar($bd, $host, $user, $pass){
		if ($bd != "") $this->BaseDatos = $bd;
		if ($host != "") $this->Servidor = $host;
		if ($user != "") $this->Usuario = $user;
		if ($pass != "") $this->Clave = $pass;
		// Conectamos al servidor
		$this->Conexion_ID = mysqli_connect($this->Servidor, $this->Usuario, $this->Clave);
		if (!$this->Conexion_ID){
			$this->Error = "Ha fallado la conexi�n.";return 0;}
		//seleccionamos la base de datos
		if (!@mysqli_select_db( $this->Conexion_ID,$this->BaseDatos)){$this->Error = "Imposible abrir ".$this->BaseDatos;return 0;}
		/* Si hemos tenido �xito conectando devuelve el identificador de la conexi�n, sino devuelve 0 */
		return $this->Conexion_ID;
	}
	/* Ejecuta un consulta */
	function consulta($sql = ""){
		if ($sql == ""){$this->Error = "No ha especificado una consulta SQL";return 0;}
		//ejecutamos la consulta
		
		$sqlG = preg_replace('/\s+/', ' ', trim($sql));
		$Accion = explode(' ',$sqlG);
		
		//print_r($Accion);
		/*
		if(strtolower($Accion[0])!="select" and strtolower($Accion[0])!="set"){
			// ejecutar log de consulta //
			$PageLog = $this->get_req_uri();
			$IpLog = $this->get_ip();
			
			$sqlG= mysqli_real_escape_string($sqlG);
			
			$QueryLog = "INSERT INTO lis_log ( usu_id, log_fecha, log_sql, log_ip, log_origen)
			VALUES ('".$_SESSION['UserID']."', NOW(), '".$sqlG."',   '".$IpLog."',  '".$PageLog."');";
			$this->Consulta_ID = @mysqli_query( $this->Conexion_ID,$QueryLog);
		}
		*/
		
		$this->Consulta_ID = @mysqli_query($this->Conexion_ID,$sql);
		if (!$this->Consulta_ID){$this->Errno = mysqli_errno($this->Conexion_ID);$this->Error = mysqli_error($this->Conexion_ID);}
		/* Si hemos tenido �xito en la consulta devuelve el identificador de la conexi�n, sino devuelve 0 */
		//return $this->Conexion_ID;
		return $this->Consulta_ID;
	}
	function consulta1($sql = ""){
		if ($sql == ""){$this->Error = "No ha especificado una consulta SQL";return 0;}
		//ejecutamos la consulta
		$this->Consulta_ID = @mysqli_query($sql, $this->Conexion_ID);
		if (!$this->Consulta_ID){$this->Errno = mysqli_errno($this->Conexion_ID);$this->Error = mysqli_error($this->Conexion_ID);}
		/* Si hemos tenido �xito en la consulta devuelve el identificador de la conexi�n, sino devuelve 0 */
		return $this->Consulta_ID;
	}
	//devuelve el error
	function getError(){return $this->Error;}
	/* Devuelve el n�mero de campos de una consulta */
	function numcampos(){return mysqli_num_fields($this->Consulta_ID);}
	/* Devuelve el n�mero de registros de una consulta */
	function numregistros(){
		//return $this->Consulta_ID;
		return mysqli_num_rows($this->Consulta_ID);

	}
	/* Devuelve el nombre de un campo de una consulta */
	function nombrecampo($numcampo){return mysqli_field_name($this->Consulta_ID, $numcampo);}
	/* Muestra los datos de una consulta */
	function verconsulta(){
		echo "<table border=1>\n";
		// mostramos los nombres de los campos
		for ($i = 0; $i < $this->numcampos(); $i++){echo "<td><b>".$this->nombrecampo($i)."</b></td>\n";}
		echo "</tr>\n";
		// mostrarmos los registros
			while ($row = mysqli_fetch_row($this->Consulta_ID)){
				echo "<tr> \n";
				for ($i = 0; $i < $this->numcampos(); $i++){echo "<td>".$row[$i]."</td>\n";}
				echo "</tr>\n";
			}
	}
	function campoconsulta(){return  mysqli_fetch_row($this->Consulta_ID);}
	function campoconsultaA(){return  mysqli_fetch_array($this->Consulta_ID);}
	function campoconsulta1(){return  mysqli_fetch_row($this->Consulta_ID);}	
	function ultimoID(){ return mysqli_insert_id();}
	function procesoal($sql = ""){
		if ($sql == ""){$this->Error = "No ha especificado una consulta SQL";return 0;}
		//ejecutamos la consulta
		$this->Consulta_ID = @mysqli_query($sql, $this->Conexion_ID);
		if (!$this->Consulta_ID){$this->Errno = mysqli_errno();$this->Error = mysqli_error();}
		/* Si hemos tenido �xito en la consulta devuelve el identificador de la conexi�n, sino devuelve 0 */
		return $this->Consulta_ID;
		}
	function get_req_uri(){
		//$url=$_SERVER['REQUEST_URI'];
		return  $_SERVER['REQUEST_URI'];
	}
	function get_ip(){
		if (!empty($_SERVER['HTTP_CLIENT_IP'])){	return $_SERVER['HTTP_CLIENT_IP']; } 
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ return $_SERVER['HTTP_X_FORWARDED_FOR'];	}
		return $_SERVER['REMOTE_ADDR'];
		//return  $url;
	}
	} //fin de la Clse DB_mysql

	
	$micon->consulta("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	$micon1->consulta("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
?>
