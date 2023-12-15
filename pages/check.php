<?php

$usuario_correcto = "demo";
$palabra_secreta_correcta = "demo";

$usuario = $_POST["username"];
$palabra_secreta = $_POST["password"];


if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {

    session_start();
    $_SESSION["usuario"] = $usuario;
    # Luego redireccionamos a la página de nuestro interes
    header("Location: ../oradores.php");
} else {
    # No coinciden, así que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
    //echo "El usuario o la contraseña son incorrectos";
   header('Location: login.php');
    die();
    }
?>