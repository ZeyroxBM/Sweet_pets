<?php
require('../dao/DaoComprasImpl.php');
$dao = new DaoComprasImpl();
if (isset($_GET['boton'])) {
    $nombre = $_GET['nombre'];
    $valor = $_GET['valor'];
    $cantidad = $_GET['cantidad'];
    $fecha = $_GET['fecha'];
    $a = new Compras($nombre, $valor, $cantidad, $fecha);
    $dao->modificar($a);
    require('../controlador/controladorlistar.php');
}
