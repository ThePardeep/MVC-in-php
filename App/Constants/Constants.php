<?php 
$DU = getenv("DU");
$DP = getenv("DP");
$DBNAME = getenv("DBNAME");

$RP = getenv("RP");
define("Home","/");
define("ROOT_PATH",$RP);
define("HEADER_PATH","View/headerAndNav.php");
define("FOOTER_PATH","View/footer.php");
define('JUMBOTRON_PATH', "View/jumbotron.php");
define('LOGO_PATH', '../logo.png');
define('Db_USERNAME',$DU);
define('Db_PASSWORD',$DP);
define('Db_HOST','remotemysql.com');
define('Db_NAME',$DBNAME);
?>

