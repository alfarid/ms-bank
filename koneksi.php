<?php
$host = "localhost";
$user = "root";
$name = "msbank";
$pass = "";
$conn = mysql_connect($host,$user,$pass);

if ($conn) {
	$buka = mysql_select_db($name);
	if (!$buka) {
		("database tidak terbuka");
	}
}

else {
	die ("mysql tidak terhubung");
}
?>