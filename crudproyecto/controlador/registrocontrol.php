<?php 
 require('../dao/DaoComprasImpl.php');
$dao=new DaoComprasImpl();
$a=new Compras("tenis","85225","2","08-09-2021");
//$dao->registrar($a);
 //echo '........'.var_dump($dao);
require('../vista/index.php');
?>