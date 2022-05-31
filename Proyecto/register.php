<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
    <center>
        <form action="login.php" method="POST">
            <h1>Registrate</h1>
            <p>Ingresa tu usuario</p> 
            <input type="text" name="usuario" placeholder="Usuario"><br><br>
            <p>Ingresa tu contraseña</p> 
            <input type="password" name="contraseña" placeholder="contraseña"><br><br>
            <button type="submit" name="boton">Registrate!</button><br><br>
        </form>
        <p>Ya tenes cuenta? <a href="login.php">Logueate</a></p>
    </center>

    <div id="registro">

    <?php
        $host = "localhost";
        $usuario = "root";
        $clave = "";
        $bd = "loginphp";

        $conexion = new mysqli($host,$usuario,$clave,$bd);


        if (isset($_POST['boton'])){
            if (strlen($_POST['usuario']) >= 1 &&
            strlen($_POST['contraseña']) >= 1 ){
                $usuario = trim($_POST['usuario']);
                $contraseña = trim($_POST['contraseña']);
                $consulta = "INSERT INTO usuario(Usuario, contraseña) VALUES ('$usuario','$contraseña')";
                $resultado = mysqli_query($conexion,$consulta);
                if($resultado) {
                    ?>
                        <h3 class="registrado"> ¡Te has inscripto correctamente!</h3>
                    <?php
                }else{
                    ?>
                        <h3 class="No_reg">¡Ups a ocurrido un error!</h3>
                    <?php
                }
            }else{
                ?>
                        <h3 class="no_comp">¡Por favor complete los campos!</h3>
                    <?php
            }
        }
    ?>

    </div>
    
</body>
</html>

