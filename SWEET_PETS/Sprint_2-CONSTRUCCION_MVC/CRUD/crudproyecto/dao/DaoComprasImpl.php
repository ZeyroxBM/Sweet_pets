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
                $detalle = $a->getDetalle();
                $imagen = $a->getImagen();
                $precio = $a->getPrecio();
                $sql = "insert into productos (nombre,detalle,imagen, precio) values('$nombre','$detalle','$imagen','$precio')";
                $stmt = $this->getCnx()->prepare($sql);
                $stmt->execute(['$nombre', '$detalle', '$imagen', '$precio']);
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
        $detalle = $a->getDetalle();
        $imagen = $a->getImagen();
        $precio = $a->getPrecio();
        $stmt = $this->getCnx()->prepare(
            "update productos
            set
            nombre ='$nombre',
            detalle ='$detalle',         
            imagen= '$imagen',
            precio='$precio' 
            where nombre ='$nombre'");
        $stmt->execute();
    }

    public function eliminar(Compras $a)
    {
        $nombre = $a->getNombre();
        $stmt = $this->getCnx()->prepare("delete from productos where nombre='$nombre'");
        $stmt->execute();
    }
    //public function listar();
    public function listar()
    {
        $lista = null;
        try {
            $stmt = $this->getCnx()->prepare("select * from productos");
            $lista = array();
            $stmt->execute();
            foreach ($stmt as $key) {
                $a = new Compras(null, null, null, null);
                $a->getNombre($key['nombre']);
                $a->getDetalle($key['detalle']);
                $a->getImagen($key['imagen']);
                $a->getPrecio($key['precio']);
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
        $lista= null;
        try {
            $nombre = $a->getNombre();
            $stmt = $this->getCnx()->prepare("select * from productos where nombre='$nombre'");
            $listar = array();
            $stmt->execute(array($nombre));
            $r = $stmt->fetch(PDO::FETCH_OBJ);

            $a = new Compras(null, null, null, null);
            $a->getNombre($r->nombre);
            $a->getDetalle($r->detalle);
            $a->getImagen($r->imagen);
            $a->getPrecio($r->precio);
            //array_push($lista, $a);

            //$this->getCnx()->close();
        } catch (PDOException $e) {
            $e->getMessage() . 'error en listar de DaoComprasImpl';
        }
        return $a;
    }
}
