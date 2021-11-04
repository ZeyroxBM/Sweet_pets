<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/Estilos.css">
    <title>Document</title>
</head>
<body>
<?php 

    require_once('../dao/DaoComprasImpl.php');
    $dao=new DaoComprasImpl();
    $nombre=$_GET['nombre'];
    $a=new Compras($nombre,null,null,null);
    $datos=$dao->buscar($a);
    require('../vista/indexModificar.php');
 ?> 
 </body>
</html> 