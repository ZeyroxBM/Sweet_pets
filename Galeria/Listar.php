<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR IMG</title>
</head>
<body>
    <?php
        include("conexion.php");

        $consulta = "SELECT * FROM productos";
        $resultado= $conexion->query($consulta);
        
        while($mostrar =$resultado->fetch_assoc()){
    ?>
        <tr>
            <td><?php echo $mostrar['nombre'];?></td>
            <td><?php echo $mostrar['detalle'];?></td>
            <td><img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']);?>"/></td>
            <td><?php echo $mostrar['precio'];?></td>
        </tr>
    <?php        
        }
    ?>
</body>
</html>