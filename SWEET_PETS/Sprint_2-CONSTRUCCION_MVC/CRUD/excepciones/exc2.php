<?php 
try {
    echo intdiv(2, 0);
} catch (DivisionByZeroError $e) {
    echo "Caught DivisionByZeroError!\n";
}

try {
    echo (2 / 0);
} catch (DivisionByZeroError $e) {
    echo "Caught DivisionByZeroError!\n";
}
?>