<?php 
$email = $_POST['email'];
$psw = $_POST['psw'];

include 'cone.php';

$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '$email' AND psw = '$psw';");
if ($row = mysqli_fetch_array($consulta)) {
	session_start();
	$_SESSION['id'] = $row['email'];
	?>

	<script type="text/javascript">
		// window.location = "inicioSweet/inicioSweet.php";
		window.location = "carBuy/index.php";
	</script>
	<?php 
}
?>