<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css" type="text/css">
    <title>Inicio de sesion</title>
</head>
<body>
<center>
    <h1>Inicia sesion</h1>
    <form action="loguear.php" method ="POST">
        <p>Usuario</p>
        <input type="text" name="usuario" placeholder="Usuario">
        <br><br>
        <p>Contraseña</p>
        <input type="password" name="clave" placeholder="Contraseña">
        <br><br>
        <button type="submit">Entrar</button>
        <br><br>
        <p>No tenes cuenta?</p><a href="register.php">registrate</a>

    </form>
</center>


</body>
</html>