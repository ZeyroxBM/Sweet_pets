<?php 
$num=20;
try {
    for ($i=0; $i <$num ; $i++) { 
        if ($num%$i==0) {
            echo $i.' es divisor';
        }
    }
} catch (ArithmeticError $e) {
    echo $e->getMessage().'Salida Error';
}
echo '<br>--------------Después del ciclo for';
?>