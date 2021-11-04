<?php
class Compras{
private $nombre;
private $valor;
private $cantidad;
private $fecha;

function __construct($nombre,$valor,$cantidad,$fecha){
    $this->nombre=$nombre;
    $this->valor=$valor;
    $this->cantidad=$cantidad;
    $this->fecha=$fecha;
}

function getNombre() {
    return $this->nombre;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function getValor() {
    return $this->valor;
}

function setValor($valor) {
    $this->valor = $valor;
}

function getCantidad() {
    return $this->cantidad;
}

function setCantidad($cantidad) {
    $this->cantidad = $cantidad;
}

function  getFecha() {
    return $this->fecha;
}

function  setFecha($fecha) {
    $this->fecha = $fecha;
}

}
