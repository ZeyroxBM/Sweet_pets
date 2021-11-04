<?php
include('daoCompras.php');
include('../conexion/conexion.php');
include('../modelo/Compras.php');

class DaoComprasImpl extends Conexion implements DaoCompras
{


    public function registrar(Compras $a)
    {
        try {
            if ($this->getCnx() != null) {
                $nombre = $a->getNombre();
                $valor = $a->getValor();
                $cantidad = $a->getCantidad();
                $fecha = $a->getFecha();
                $sql = "insert into producto (nombre,valor,cantidad, fecha) values('$nombre','$valor','$cantidad','$fecha')";
                $stmt = $this->getCnx()->prepare($sql);
                $stmt->execute(['$nombre', '$valor', '$cantidad', '$fecha']);
            } else {
                echo $this->getCnx() . ' Es nulo <br>';
            }
        } catch (PDOException $p) {
            echo $p->getMessage() . '***********************';
        }
    }
    public function modificar(Compras $a)
    {
        $nombre = $a->getNombre();
        $valor = $a->getValor();
        $cantidad = $a->getCantidad();
        $fecha = $a->getFecha();
        $stmt = $this->getCnx()->prepare(
            "update producto 
            set
            nombre ='$nombre',
            valor ='$valor',         
            cantidad = '$cantidad',
            fecha ='$fecha' 
            where nombre ='$nombre'");
        $stmt->execute();
    }

    public function eliminar(Compras $a)
    {
        $nombre = $a->getNombre();
        $stmt = $this->getCnx()->prepare("delete from producto where nombre='$nombre'");
        $stmt->execute();
    }
    //public function listar();
    public function listar()
    {
        $lista = null;
        try {
            $stmt = $this->getCnx()->prepare("select * from producto");
            $lista = array();
            $stmt->execute();
            foreach ($stmt as $key) {
                $a = new Compras(null, null, null, null);
                $a->setNombre($key['nombre']);
                $a->setValor($key['valor']);
                $a->setCantidad($key['cantidad']);
                $a->setFecha($key['fecha']);
                array_push($lista, $a);
            }
            //$this->getCnx()->close();
        } catch (PDOException $e) {
            $e->getMessage() . 'error en listar de DaoComprasImpl';
        }
        return $lista;
    }
    // public function buscar($campo,$dato);
    public function buscar(Compras $a)
    {
        $lista = null;
        try {
            $nombre = $a->getNombre();
            $stmt = $this->getCnx()->prepare("select * from producto where nombre='$nombre'");
            $lista = array();
            $stmt->execute(array($nombre));
            $r = $stmt->fetch(PDO::FETCH_OBJ);

            $a = new Compras(null, null, null, null);
            $a->setNombre($r->nombre);
            $a->setValor($r->valor);
            $a->setCantidad($r->cantidad);
            $a->setFecha($r->fecha);
            //array_push($lista, $a);

            //$this->getCnx()->close();
        } catch (PDOException $e) {
            $e->getMessage() . 'error en listar de DaoComprasImpl';
        }
        return $a;
    }
}
