<?php
    $contraseña = 'SweetPets2021';
    $usuario = 'root';
    $nombre_bd = 'u991668360_sweetpets';

    try {
        $bd = new PDO(
            'mysql:host=localhost;
            dbname='.$nombre_bd,
            $usuario,
            $contraseña,
            /* array para que reconozca todos los caracteres especiales*/
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (Exception $e) {
        echo "Error de conexion".$e->getMessage();
    }

?>