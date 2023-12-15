<!doctype html>
<html lang="es">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Listado ORADORES</title>
  
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
                <a class="nav-link text-white-50" href="index.html#oradores">Los oradores</a>
                <a class="nav-link text-white-50" href="index.html#playa">El lugar y la fecha</a>
                <a class="nav-link text-white-50" href="index.html#solicitud">Conviértete en orador</a>
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

<!--  Conexón y consulta a Base de Datos de Oradores -->
<?php 
require './funcs/conexion.php';
//require 'conexion.php';
?>

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
<br>
<br>
<?php 
require 'pages/footer.php'; 
?>

</body>

</html>

