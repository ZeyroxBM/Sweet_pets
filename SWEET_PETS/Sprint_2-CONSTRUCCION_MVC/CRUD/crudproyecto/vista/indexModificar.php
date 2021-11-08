<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuentas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>


    <div class="wrap">
        <form action="../controlador/controladorModificar.php" , method="GET">

            <label for="">NOMBRE </label>
            <br>
            <br>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $datos->getNombre(); ?>">
            <br>
            <label for="">DETALLE</label>
            <br>
            <br>
            <input type="text" name="detalle" id="detalle" class="form-control" value="<?php echo $datos->getValor(); ?>">
            <br>
            <label for="">IMAGEN</label>
            <br>
            <br>
            <input type="image" name="imagen" id="imagen" class="form-control" value="<?php echo $datos->getCantidad(); ?>">
            <br>
            <label for="">PRECIO</label>
            <br>
            <br>
            <input type="text" name="precio" id="precio" value="<?php echo $datos->getFecha(); ?>">
            <br>
            <br>

            <input type="submit" name="boton" value="Modificar Datos" class="btn btn-primary">
        </form>
        <a href="../controlador/controladorlistar.php" class="Link">
            <div class="ver">
                <p class="Centrar">Ver Datos </p>
            </div>
        </a>

    </div>
</body>

</html>