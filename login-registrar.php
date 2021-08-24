<?php

include("conexion.php");

$nombre = $_POST["usuario"];
$pass   = $_POST["pass"];

//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM usuario WHERE Usuario = '$nombre' AND Contrasena='$pass'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script> alert('Bienvenido $nombre'); window.location='indexadmin.html' </script>";
	}else
	{
		echo "<script> alert('Usuario o Contraseña incorrectos'); window.location='login.html' </script>";
	}

	
}


?>
