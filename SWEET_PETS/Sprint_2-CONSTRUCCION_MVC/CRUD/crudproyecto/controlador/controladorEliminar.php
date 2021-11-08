<?php 

    require_once('../dao/DaoComprasImpl.php');
    $dao=new DaoComprasImpl();
    $nombre=$_GET['nombre'];
    $a=new Compras($nombre,null,null,null);
    $dao->eliminar($a);
    require('../controlador/controladorlistar.php');
 ?>  
 