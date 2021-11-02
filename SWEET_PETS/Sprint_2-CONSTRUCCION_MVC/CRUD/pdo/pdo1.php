<?php 
//PDO = PHP Data Objects
$dsn='mysql:host=localhost;dbname=adsi';
$username='root';
$password='';
$conexion;
try {
    $conexion=new PDO($dsn,$username,$password);
    $statement=$conexion->prepare('select * FROM aprendiz');
    $statement->execute();    
    
} catch (PDOException $ob) {
    echo $ob->getMessage();    
}
var_dump($statement);
foreach ($statement as $key) {
    echo 'Nombre: '.$key['nombre'].' - ';
    echo 'Documento: '.$key['documento'].' - ';
    echo 'Formación: '.$key['formacion'].' - ';
    echo 'Genero: '.$key['sexo'].'<br>';
}

$statement->execute();
while ($key=$statement->fetch()) {
    echo 'Nombre...: '.$key['nombre'].' - ';
    echo 'Documento...: '.$key['documento'].' - ';
    echo 'Formación...: '.$key['formacion'].' - ';
    echo 'Genero...: '.$key['sexo'].'<br>';
}

 echo '--------------------------------------------<br>';
 $statement->execute();
 $resultado=$statement->fetchAll();
 //print_r($resultado);


 foreach ($resultado as $key) {
     echo 'Nombre: '.$key[0].' - ';
     echo 'Documento: '.$key['documento'].' - ';
     echo 'Formación: '.$key['formacion'].' - ';
     echo 'Genero: '.$key['sexo'].'<br>';
 } 
?>