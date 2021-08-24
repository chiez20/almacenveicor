<?php
$dbhost = "sql5.freesqldatabase.com";
$dbuser = "sql5432591";
$dbpass = "TmuQF2c4fq";
$dbname = "sql5432591";


$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
	die("No hay conexion:" .mysqli_connect_error());
}
?>