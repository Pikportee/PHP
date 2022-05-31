<?php

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location:login.php");
}else{

?>

<h1> Bienvenido <?php echo $usuario; ?> </h1>

<a href = "salir.php">Cerrar sesion</a>
<?php
}