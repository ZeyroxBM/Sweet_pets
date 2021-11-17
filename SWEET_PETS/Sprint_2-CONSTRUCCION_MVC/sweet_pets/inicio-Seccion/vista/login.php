<?php 
include ("../modelo/conexion.php");


session_start();

$email = $_REQUEST['email'];
$contraseña = $_REQUEST['contraseña'];


$sentencia = "SELECT COUNT(*) as contar FROM usuario WHERE email = '$email' AND contraseña = '$contraseña'";
$consulta = mysqli_query($conn,$sentencia);

$lista = mysqli_fetch_array($consulta);

if($lista['contar']>0) {
	$_SESSION['usuario']=$email; 	
	// window.location = "../inicioSweet/inicioSweet.php";
	header("location:../carBuy/index.php");
}else{
	die("Querido usuario la contraseña y/o usuario No corresponden!... Por favor verificar");
}
?>