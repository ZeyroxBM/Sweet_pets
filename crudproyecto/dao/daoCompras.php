<?php 
interface DaoCompras{
    public function registrar(Compras $a);
    public function modificar(Compras $a);
    public function eliminar(Compras $a);
    //public function buscar($campo,$dato);
    public function listar();
}
?>