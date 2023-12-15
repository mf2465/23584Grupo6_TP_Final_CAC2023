<!doctype html>
<html lang="es">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Editar registro</title>
  
</head>
  
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php 
require 'pages/menunav.php'; 
?> 

<!--
<h1>Página EDITAR.php</h1>
-->
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

// Verificar si se ha enviado un ID válido mediante GET
    if (isset($_GET['id_orador']) && is_numeric($_GET['id_orador'])) {
    $id_orador = $_GET['id_orador'];

    // Consulta para obtener los datos del registro antes de borrar
    $sql = "SELECT * FROM orador WHERE id_orador = $id_orador ";
 
    $resultado = mysqli_query( $conexion, $sql);    
	
	/*
	echo "<pre>";
	var_dump($resultado);
	echo "</pre>";
	*/
	
	if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $mail = $row['mail'];
        $tema = $row['tema'];
        $fecha_alta = $row['fecha_alta'];
    //    echo "<br>";
    //    echo "Registro a modificar : ";
    //    echo "$nombre"." - ". "$apellido"." - "."$mail"." - "."$tema"." - "."$fecha_alta";
    //    echo "<br><br>";
    } else {
    //   echo "Registro Inexistente";
       exit;
    }
} else {
 //   echo "ID no válido";
    exit;
	
    }
    
// Procesar el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los nuevos valores del formulario
    $nombre_update = $_POST['nombre'];
    $apellido_update = $_POST['apellido'];
    $mail_update = $_POST['email'];
    $tema_update = $_POST['comentarios'];

    // Actualizar el registro en la base de datos
    $sql_update = "UPDATE orador SET nombre='$nombre_update', apellido='$apellido_update', mail='$mail_update', tema='$tema_update' WHERE `id_orador` = $id_orador";
    
   
    if ($conexion->query($sql_update) === TRUE) {
     //   echo "Registro modificado correctamente";
    } else {
        echo "Error al modificar el registro: " . $conexion->error;
    }
}

// Cerrar la conexión
$conexion->close();
    
    
    
    
?>    
<br>
<!--  inicio Formulario -->

<div class="form" id="solicitud">
    
  <div class="container">
      
    <div class="row text-center">
        <h2>Editar Registro de ORADOR</h2>
        <p>Modifique los datos que considere conveniente y confirme.</p>
    </div>
    
    <form action="" method="post">
        
      <div class="row mb-3">
          
        <div class="col">
        <input type="text" class="form-control" value="<?php echo $nombre; ?>" aria-label="Nombre" name="nombre" required>
        </div>
        
        <div class="col">
        <input type="text" class="form-control" value="<?php echo $apellido; ?>" aria-label="Apellido" name="apellido" required>
        </div>
        
      </div>
      
      <div class="row mb-3">
          
        <div class="col">
        <input type="email" class="form-control" value="<?php echo $mail ?>" aria-label="email" name="email" required>
        </div>
        
        <div class="col">
        <input type="text" class="form-control" value="<?php echo $fecha_alta; ?>" aria-label="fecha_alta" name="fecha_alta" disabled required>
        </div>
   
      </div>
      
      <div class="row mb-3">
        
        <div class="col">
        <input type="text" class="form-control" value="<?php echo $tema ?>" aria-label="comentarios" name="comentarios" required>
       
       <!--  no funciona con textarea 
        <textarea class="form-control" cols="30" rows="10" value="<?php echo $tema ?>" aria-label="comentarios" name="comentarios" required> </textarea>
        -->
        
        <br>
         <div class="mb-3">
        <p>La Organización se reserva el derecho de no permitir la modificación de la fecha.</p>
        <!--
        <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">He leído las bases y condiciones del evento para participar como ORADOR</label>
        -->
        </div>
        
        </div>
    
      </div>
        <button type="submit" class="btn mb-3" style="width: 100%; background-color: #96C93E; color: white">Enviar</button>
      
    </form>
    <br>
  </div>

  <!--  fin Formulario -->


<?php 
require 'pages/footer.php'; 
?>

</body>
</html>
