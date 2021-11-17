<?php
session_start();
$usuario=$_SESSION['usuario'];
echo ("Bienvenido a Sweet pets $usuario");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Sweet Pets</title>
    <link rel="icon" href="../../../img/imagenes/logoPNG.png">
</head>
<body>
    <h1>Esoo</h1>
    <form method="POST" action="../../modelo/cerrar-sesion.php">
        <button type="submit"  name="cerrar-sesion" >Cerrar sesion</button>
    </form>
</body>
</html>