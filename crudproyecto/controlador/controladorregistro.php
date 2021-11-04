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
require('../vista/indexinsertar.php');
require('../dao/DaoComprasImpl.php');
$dao=new DaoComprasImpl();
if (isset($_GET['boton'])) {
    $nombre=$_GET['nombre'];
     $valor=$_GET['valor'];
     $cantidad=$_GET['cantidad'];
     $fecha=$_GET['fecha']; 
     $a=new Compras($nombre,$valor,$cantidad,$fecha);
    $dao->registrar($a);
    echo "DATOS INSERTADOS CON EXITO";    
}
           
?>    
</body>
</html>
