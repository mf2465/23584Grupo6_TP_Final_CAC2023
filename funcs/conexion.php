<?php
	
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	$host="localhost";
	$user="id21561867_proyectogaribaldi";
	$pass="Donado97$";
	$DB="id21561867_cac_integrador";
	
	$conexion = mysqli_connect($host,$user,$pass,$DB);

	if(mysqli_connect_errno()){
		echo "Error de conexión a Base de Datos : " . mysqli_connect_error();
		exit();
	}

	$query = "SELECT * FROM orador";
	$resultado = mysqli_query($conexion,$query);    
	$Array = mysqli_fetch_array($resultado);

	mysqli_data_seek($resultado, 0);//devuelve el puntero a la primera posicion para recorrerlo

	?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Oradores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <div class="container text-center">
    <br>
    <h1>Listado de ORADORES</h1>
    <table class="table align-middle">

  <thead>
    <tr class="table-warning">
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Tema</th>
      <th scope="col">Fecha de Alta</th>
      <th scope="col">Acciones</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <!-- <th scope="row">1</th> -->
	  <?php
	  while($Array=mysqli_fetch_array($resultado)){
	  ?>
- 			<td><?php echo $Array['id_orador'];?></td>
			<td><?php echo $Array['nombre'];?></td>
			<td><?php echo $Array['apellido'];?></td>
			<td><?php echo $Array['mail'];?></td>
			<td><?php echo $Array['tema'];?></td>
			<td><?php echo $Array['fecha_alta'];?></td>
			<td>
			    <button type="button" class="btn btn-outline-primary"><?php echo"<a href='editar.php?id_orador=".$Array['id_orador']."'>" ?>Editar</button>
			</td>
			<td>
			<button type="button" class="btn btn-outline-danger"><?php echo"<a href='eliminar.php?id_orador=".$Array['id_orador']."'>" ?>Eliminar</button>
			</td>
        
        </tr>
<?php 
                     }
mysqli_close($conexion);
   		
?>

  	</tbody>
</table>

</div>

  </body>
</html>
