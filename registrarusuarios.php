<?php

include("conexion.php");

$nombre = $_POST["nombres"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$pass   = $_POST["pass"];
$tipo = $_POST["tipo"];


//Registrar Usuarios
if(isset($_POST["btnregister"]))
{
	$sqlgrabar = "INSERT INTO usuario(Nombre,Correo,Usuario,Contrasena,Descripcion) values ('$nombre','$correo','$usuario','$pass','$tipo')";

	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='RegistrarUsuariosadmin.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
}

?>
