<?php
require('../dao/DaoComprasImpl.php');
$dao = new DaoComprasImpl();
if (isset($_GET['boton'])) {
    $nombre = $_GET['nombre'];
    $detalle = $_GET['detalle'];
    $imagen = $_GET['imagen'];
    $precio = $_GET['precio'];
    $a = new Compras($nombre, $detalle, $imagen, $precio);
    $dao->modificar($a);
    require('../controlador/controladorlistar.php');
}
