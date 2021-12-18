<?php  

$sname = "sql307.epizy.com";
$uname = "epiz_30464368";
$password = "MqNIeGRgETYiX";

$db_name = "epiz_30464368_prima";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Conexión fallida!";
	exit();
}
