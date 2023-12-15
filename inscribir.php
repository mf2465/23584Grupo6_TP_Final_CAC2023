<!doctype html>
<html lang="es">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Conferencia TP</title>
  
</head>
  
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!--  Inicio menu nav

<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#353A40">
        
        <div class="container-fluid">
          
            <a class="navbar-brand text-white" href="index.html">
            <img src="img/codoacodo.png" alt="Logo" width="120">Conf Bs As</a>
          
            <div class="collapse navbar-collapse justify-content-end">
            
                <div class="navbar-nav">
                <a class="nav-link active text-white" aria-current="page" href="index.html">La conferencia</a>
                <a class="nav-link text-white-50" href="#oradores">Los oradores</a>
                <a class="nav-link text-white-50" href="#playa">El lugar y la fecha</a>
                <a class="nav-link text-white-50" href="#solicitud">Conviértete en orador</a>
                <a class="nav-link text-success" href="buyticket.html">Comprar tickets</a>
                <a href="oradores.php"><button type="button" class="btn btn-success">Usuarios</button></a>
                </div>
            
            </div>

        </div>

    </nav>

fin menu nav-->

<?php 
require 'pages/menunav.php'; 
?> 

<?php 
$nombreUsuario = $_POST['nombre'];
$apellidoUsuario = $_POST['apellido'];
$emailUsuario = $_POST['email'];
$comentariosUsuario = $_POST['comentarios'];
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fechaAltaUsuario = date('d-m-Y h:i:s');

/*
echo "Datos del ORADOR";
echo "<br>";
echo "<br>";
echo "Nombre = ".$_GET["nombre"];
echo "<br>";
echo "Apellido = ".$_GET['apellido'];
echo "<br>";
echo "Email = ".$_GET['email'];
echo "<br>";
echo "Comentarios = ".$_GET['comentarios'];
echo "<br>";
echo "<br>";
echo "<pre>";
echo var_dump($_GET);
echo "</pre>";
*/

/*
if (isset($nombreUsuario) && $nombreUsuario=="") {?>
  <div class="alert alert-warning" role="alert">
  Omitió escribir su Nombre!
</div><?php 
  echo "Omitió escribir su Nombre";
} else {
  echo "Bienvenido ". $nombreUsuario;
}

echo "<br>";
echo "<br>";
*/

if (isset($apellidoUsuario) && $apellidoUsuario=="") {?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
  <div class="alert alert-warning d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    Omitió escribir su Apellido
  </div>
</div><?php 
  echo "Omitió escribir su Apellido";
} else {
 // echo "Bienvenido ". $nombreUsuario;
}
echo "<br>";

?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inscripción</title>
  </head>
  <body>
      
    <div class="container fluid d-flex justify-content-center ">
    <h3>Verifique todos sus datos antes de confirmar</h3>
    <br>
    <br>
    </div>
    <div class="container fluid d-flex justify-content-center ">
    <br> 
    <br>
    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title"><?php echo $nombreUsuario." ". $apellidoUsuario ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $emailUsuario . " - ". $fechaAltaUsuario ?></h6>
    <p class="card-text"><?php echo $comentariosUsuario?></p>
    <a href="index.html#solicitud" class="card-link">confirmar</a>
    <a href="index.html#solicitud" class="card-link">regresar</a>
    </div>
    </div>
    </div>
</div>
<br>
<br>

     <!--  inicio Footer

 <footer>
  <nav class="navbar navbar-expand-lg navbar-dark text-white justify-content-center" style="background-color: #1E516E;">
  
      <ul class="navbar-nav" style="justify-content: space-evenly; width: 100%">
     
      <li class="nav-item active">
        <a class="nav-link" href="#">Preguntas <br>frecuentes</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contáctanos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Prensa</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Conferencias</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Términos y<br>condiciones</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Privacidad</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Estudiantes</a>
      </li>
    </ul>
    
  </nav>  
</footer>

fin Footer -->
    
<?php 
require 'pages/footer.php'; 
?>    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
