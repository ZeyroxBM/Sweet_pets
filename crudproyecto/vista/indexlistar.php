<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos.css">
    <title>Listar</title>
</head>

<body>
    <div class="div">
        <table class="table">
            <caption>COMPRAS</caption>
            <thead>
                <tr>
                    <th>NOMBRE PRODUCTO</th>
                    <th>VALOR PRODUCTO</th>
                    <th>CANTIDAD PRODUCTOS COMPRADOS</th>
                    <th>FECHA DE COMPRA</th>
                    <th></th>
                    <th></th>
                </tr>

            </thead>
            <tbody>
                <?php

                foreach ($datos as $key) {
                    echo "<tr><td>" . $key->getNombre() . "</td>";
                    echo "<td>" . $key->getValor() . "</td>";
                    echo "<td>" . $key->getCantidad() . "</td>";
                    echo "<td>" . $key->getFecha() . "</td>";
                    //echo "<td><input type='submit' value='Editar' class='btn btn-primary' /></td>";
                    // echo "<td><a href='?action=eliminar&id=". $key->getNombre()  . "' class='btn btn-primary'>Eliminar</a></td></tr>";
                    echo "<td><a href='../controlador/controladorEliminar.php?nombre=" . $key->getNombre()  . "' class='btn btn-primary'>Eliminar</a></td>";
                    echo "<td><a href='../controlador/controladorVistaDatos.php?nombre=" . $key->getNombre()  . "' class='btn btn-primary'>Modificar</a></td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>