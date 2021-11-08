<?php
class Compras{
private $nombre;
private $detalle;
private $imagen;
private $precio;

function __construct($nombre,$detalle,$imagen,$precio){
    $this->nombre=$nombre;
    $this->detalle=$detalle;
    $this->imagen=$imagen;
    $this->precio=$precio;
}

function getNombre() {
    return $this->nombre;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function getDetalle() {
    return $this->detalle;
}

function setDetalle($detalle) {
    $this->detalle = $detalle;
}

function getImagen() {
    return $this->imagen;
}

function setImagen($imagen) {
    $this->imagen = $imagen;
}

function  getPrecio() {
    return $this->precio;
}

function  setPrecio($precio) {
    $this->precio = $precio;
}

}
