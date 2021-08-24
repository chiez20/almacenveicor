<?php 

	$conexion=mysqli_connect('sql5.freesqldatabase.com','sql5432591','TmuQF2c4fq','sql5432591');

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Admin - Almacen Veicor </title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estylus.css">
	<link rel="stylesheet" href="css/usuarios.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
 <!---header-menu--->
 <header>
    <div class="header-content">
        <div class="logo">
            <h1>Almacén <b>Veicor</b></h1>
        </div>

        <div class="menu">

            <nav>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="RegistroUsuariosadmin.html">Registro de Usuarios</a></li>
                    <li><a href="Registroproductosadmin.html">Registro Productos</a></li>
                    <li><a href="#">Admin</a></li>
                    <li class="menu-selected"><a href="prueba.php" class="text-menu-selected">Lista de Usuarios</a></li>
                    <li><a href="a"><img src="img/carrito.png" alt="" width="25"
                        height="25"></a></li>
                </ul>
            </nav>

        </div>

    </div>
</header>

<section id="container">
	<h1> </h1>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h1>Lista de Usuarios</h1>
    <br>
	
    
    <h3><a href="prueba.php"> Administradores /</a></th><th> <a >Clientes</a> </th></h3>
	<table>
		<tr>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>ID Tipo Usuario</th>	
			<th>Acciones</th>	
		</tr>

		<?php 
        include("conexion.php");
		$sql="SELECT * from cliente;";
        
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Correo'] ?></td>
			<td><?php echo $mostrar['Usuario'] ?></td>
			<td><?php echo $mostrar['Contrasena'] ?></td>
			<td><?php echo $mostrar['Descripcion'] ?></td>
			<td>
				<a class="link_edit" href="editarusuarioadmin.html?Id=<?php echo $mostrar['Id'] ?>"> Editar </a>
				<a class="link_delete" href="a"> Eliminar </a>
			</td>
		</tr>
	<?php 
	}
	 ?>
	</table>
	</section>

	<footer id="footer">

    <div class="container__footer">
        <div class="box__footer">
            <div class="logo">
                <img src="img/Logo-Almacen.png" alt="">
            </div>
            <div class="terms">
                <p>Contamos con variedad de productos para el hogar a los mejores precios del mercado.
                    Productos de temporada, cristalería, regalaría, juguetería, plásticos y desechables.</p>
            </div>
        </div>
        <div class="box__footer">
            <h2>Contactos</h2>
            <a href="mailto: producto.hogar25@gmail.com">producto.hogar25@gmail.com</a>
            <a>+593995051616</a>
            <a>8:00 - 18:00</a>
            <a>Manta, Ecuador</a>

        </div>


        <div class="box__footer">
            <h2>Redes Sociales</h2>
            <a href="https://www.facebook.com/AlmacenVeicor"> <i class="fab fa-facebook-square"></i> Facebook</a>
            <a href="https://www.instagram.com/almacenveicor/"> <i class="fab fa-instagram-square"></i> Instagram</a>
            <a href="https://api.whatsapp.com/send?phone=593989167751&fbclid=IwAR0m5OqdNmSF-6VsPdyvaJGWlLsq2ZBYR535TLWpxGWE-1O2H5y63fvTmMU"><i class="fab fa-whatsapp-square"></i> Whatsapp</a>
        </div>

    </div>

    <div class="box__copyright">
        <hr>
        <p>Todos los derechos reservados © 2021 <b>Almacen Veicor</b></p>
    </div>
</footer>
</body>
</html>