<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuentas</title>
    <link rel="stylesheet" href="Estilos.css">
    <link rel="stylesheet" type="text/css" href="css/nav-section.css">
    <script src="https://kit.fontawesome.com/e58b3a8ba1.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="header">
            <div class="header__div" id="uno">
                <a href="index.html"><i class="fas fa-home"></i></a>
                <p class="header__div__p">INICIO</p>
            </div>
            <div class="header__div" id="dos">
                <a target="_blank" href="../inicio/index.html"><i class="fas fa-cat"></i></a>
                <p class="header__div__p">GATOS</p>
            </div>
            <div class="header__div" id="tres">
                <a target="_blank" href="../inicio/index.html"><i class="fas fa-dog"></i></a>
                <p class="header__div__p">PERROS</p>
            </div>
            <div class="header__div" id="cuatro">
                <a target="_blank" href="../inicio/index.html"><span class="icon-ticket"></span></a>
                <p class="header__div__p">OBJETIVOS</p>
            </div>
            <div class="header__div" id="cinco">
                <a target="_blank" href="../inicio/index.html"><span class="icon-folder"></span></a>
                <p class="header__div__p">QUE SE DICE</p>
            </div>
            <div class="header__div" id="seis">
                <a target="_blank" href="../inicio/index.html"><span class="icon-home"></span></a>
                <p class="header__div__p">DIAGRAMAS</p>
            </div>
        </header>


    <div class="wrap">
        <form action="../controlador/controladorregistro.php" , method="GET">

            <label for="">nombre de tu animal</label>
            <br>
            <br>
            <input type="text" name="nombre" id="nombre" class="form-control" >
            <br>
            <label for="">descripcion</label>
            <br>
            <br>
            <input type="text" name="valor" id="valor" class="form-control" >
            <br>
            <label for="">valor en caso de venta</label>
            <br>
            <br>
            <input type="text" name="cantidad" id="cantidad" class="form-control" >
            <br>
            <label for="">fecha de registro</label>
            <br>
            <br>
            <input type="date" name="fecha" id="fecha" >
            <br>
            <br>

            <input type="submit" name="boton" value="Registra a tu animal" class="btn btn-primary">
        </form>
        <a href="../controlador/controladorlistar.php" class="Link">
            <div class="ver">
                <p class="Centrar">Ver Datos </p>
            </div>
        </a>

    </div>
</body>

</html>