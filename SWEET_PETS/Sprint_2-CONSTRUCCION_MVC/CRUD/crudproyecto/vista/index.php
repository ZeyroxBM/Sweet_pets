<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="div">
    <?php 
    $compras=$dao->listar();
    foreach ($compras as $key) {
        echo $key->getNombre().'<br>';
    }
    ?>
</div>    
</body>
</html>