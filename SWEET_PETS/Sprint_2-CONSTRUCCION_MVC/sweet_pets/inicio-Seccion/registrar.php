<?php 
include 'cone.php';
$nombre = $_POST['name'];
$email = $_POST['email'];
$psw = $_POST['psw'];

$foto = $_FILES['foto'];


$tmp_name = $foto['tmp_name'];
$directorio_destino = "images";
    
        $img_file = $foto['name'];
        $img_type = $foto['type'];

        // Si se trata de una imagen   
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
        strpos($img_type, "jpg")) || strpos($img_type, "png")))
        {
            //¿Tenemos permisos para subir la imágen?

            $destino = $directorio_destino . '/' .  $img_file;
            mysqli_query($con, "INSERT INTO  usuarios VALUES ('$nombre','$email','$destino','$psw');");
            if (move_uploaded_file($tmp_name, $destino))
            {
                header("Location: index.php");

            }
        }
    
    //Si llegamos hasta aquí es que algo ha fallado
    return false;


?>
