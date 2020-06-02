<? 
//$DB="trans_trans";
$DB="epiz_25753980_rentcar";
$HOST="sql204.epizy.com";
//$USR="trans";
//$PASS="tt2007";
$USR="epiz_25753980";
$PASS="YeywWcrjoqJvf7";


/** SE COLOCAN COMO CONSTANTES GLOBALES PARA EL  MANEJO DE POJO EN LOS SERVICIOS **/
DEFINE("DB" , $DB);
DEFINE("HOST" ,$HOST);
DEFINE("USR" , $USR);
DEFINE("PASS" , $PASS);

$micon = new DB_mysql ;
$micon1 = new DB_mysql ;
$micon2 = new DB_mysql ;
$micon3 = new DB_mysql ;
$micon4 = new DB_mysql ;
$micon5 = new DB_mysql ;
$micon6 = new DB_mysql ;
$micon7 = new DB_mysql ;
$micon8 = new DB_mysql ;
$micon->conectar($DB, $HOST, $USR, $PASS);
$micon1->conectar($DB, $HOST, $USR, $PASS);
$micon2->conectar($DB, $HOST, $USR, $PASS);
$micon3->conectar($DB, $HOST, $USR, $PASS);
$micon4->conectar($DB, $HOST, $USR, $PASS);
$micon5->conectar($DB, $HOST, $USR, $PASS);
$micon6->conectar($DB, $HOST, $USR, $PASS);
$micon7->conectar($DB, $HOST, $USR, $PASS);
$micon8->conectar($DB, $HOST, $USR, $PASS);
?>