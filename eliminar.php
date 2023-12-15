<!doctype html>
<html lang="es">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- redirección luego de 10 segundos a página INICIO para evitar refresco y reingreso de datos  -->
   <meta http-equiv="refresh" content="10;url=https://proyectogaribaldi.000webhostapp.com">
    <title>Borrar registro</title>
  
</head>
  
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php 
require 'pages/menunav.php'; 
?> 

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
    //    echo "Registro eliminado : ";
    //    echo "$nombre"." - ". "$apellido"." - "."$mail"." - "."$tema"." - "."$fecha_alta";
    //    echo "<br><br>";
    } else {
       echo "
Registro Inexistente";
  
        exit;
    }
} else {
 //   echo "ID no válido";
    exit;
	
    }
  ?>
    <br> 
    <div class="container fluid d-flex justify-content-center ">
    <h4>Registro ELIMINADO</h4>
    </div>
    <br>
    <div class="container fluid d-flex justify-content-center ">
    <br> 
    <br>
    <div class="card border-danger" style="width: 30rem;">
       <div class="card-body">
    <h5 class="card-title"><?php echo $nombre." ". $apellido ?></h5>
    <br>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $mail ?> </h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $fecha_alta ?></h6>
    <p class="card-text"><p class="text-decoration-underline">Tema:</p><?php echo " ". $tema?></p>
    <a href="index.html" class="card-link">Regresar</a>
    <!-- comentario: proyecto a futuro: que edite, si cometió un error en el formulario  
    <a href="#" class="card-link">Editar</a>
    -->
    </div>
    <div class="card-header border-danger text-center">
     Acción irreversible
    </div> 
    </div>
    </div>
    </div>
<br><br>
    <div class="container fluid d-flex justify-content-center ">
    <h6>En breve, será redirigido automáticamente a la página de Inicio...</h6>
    </div>
<br>
  
  
  
<?php  
    
    // Procesar el formulario de confirmación de eliminación
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Eliminar el registro de la base de datos
    
    $sql_delete = "DELETE FROM orador WHERE `id_orador` = $id_orador";

    
   
    if ($conexion->query($sql_delete) === TRUE) {
     //   echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }
}

// Cerrar la conexión
$conexion->close();

    ?>


<?php 
require 'pages/footer.php'; 
?>

</body>
</html>
