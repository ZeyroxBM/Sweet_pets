<?php
include 'conexion.php';
$nombre=$_POST["nombreImagen"];
$foto= addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$consulta= "INSERT INTO fotos_galeria (nombre,foto) values('$nombre','$foto')";
$resultado = $conexion->query($consulta);

if($resultado){
    echo "si se inserto";
}
else{
    echo "NOOO AS";
}
header("Location: listar.php");
?>