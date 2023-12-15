<?php
	
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	$host="localhost";
	$user="id21561867_proyectogaribaldi";
	$pass="Donado97$";
	$DB="id21561867_cac_integrador";
	$tabla1 = "orador";
	
	$conexion = mysqli_connect($host,$user,$pass,$DB);

	if(mysqli_connect_errno()){
		echo "Error de conexión a Base de Datos : " . mysqli_connect_error();
		exit();
	} else { 
	    //echo "se conectó exitosamente";
	    
	};
	
	echo "<br>";

	$query = "INSERT INTO $tabla1 (`id_orador`, `nombre`, `apellido`, `mail`, `tema`) VALUES  (NULL,'$nombreUsuario','$apellidoUsuario','$emailUsuario','$comentariosUsuario')";
	$insertar = mysqli_query($conexion,$query);    
	
	?>
