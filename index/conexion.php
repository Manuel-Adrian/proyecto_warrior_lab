<?php

$dbhost = "host=localhost";
$dbport="port=5432";
$dbuser="user=warrior_lab";
$dbpass = "password=123";
$dbname = "dbname=prueba_laravel";

$conn = pg_connect($dbhost,$dbport,$dbname,$dbuser,$dbpass);

if(!$conn)
{
	echo "<h3> ERRROR</h3>";
}
else{
	echo "<h3> CONEXIÓN EXITOSA</h3>";
	return$conn;
}
?>