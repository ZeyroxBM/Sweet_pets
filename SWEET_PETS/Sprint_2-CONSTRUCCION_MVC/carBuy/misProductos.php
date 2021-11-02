<?php 
session_start();
include './conexion.php';
if (isset($_SESSION['carrito'])) {
    $arreglo=$_SESSION['carrito'];
    $encontro=false;
    $numero=0;
    
    for ($i=0; $i < count($arreglo) ; $i++) { 
        if ($arreglo[$i]['Id'] == $_GET['id']) {
            $encontro=true;
            $numero=$i;
        }
    }
    if ($encontro==true) {
        $arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad']+1;
        $_SESSION['carrito'] = $arreglo;
    }else {
        $nombre = "";
        $precio = 0;
        $imagen ="";
        $re = $conn->query("SELECT * FROM productos WHERE id=".$_GET['id']);
        while ($f = mysqli_fetch_array($re)) {
            $nombre = $f['nombre'];
            $precio = $f['precio'];
            $imagen = $f['imagen'];
        }
        $datosNuevos= Array("Id"     =>$_GET['id'],
        "Nombre" =>$nombre,
        "Precio" =>$precio,
        "Imagen" =>$imagen, 
        "Cantidad" => 1
        );
        array_push($arreglo, $datosNuevos);
        $_SESSION['carrito'] = $arreglo;
    }
    
    
    
}else {
    if (isset($_GET['id'])) {
        $nombre = "";
        $precio = 0;
        $imagen ="";
        $re = $conn->query("SELECT * FROM productos WHERE id=".$_GET['id']);
        while ($f = mysqli_fetch_array($re)) {
            $nombre = $f['nombre'];
            $precio = $f['precio'];
            $imagen = $f['imagen'];
        }
        $arreglo[]= Array("Id"     =>$_GET['id'],
        "Nombre" =>$nombre,
        "Precio" =>$precio,
        "Imagen" =>$imagen, 
        "Cantidad" => 1
        );
        $_SESSION['carrito']=$arreglo;
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Carrito de Compras</title>

    <!-- link css -->
    <link rel="stylesheet" href="./assets/css/mis_productos/ab-sec.css">
    <link rel="stylesheet" href="./assets/css/mis_productos/glob.css">
    <link rel="stylesheet" href="./assets/css/mis_productos/hed-sect.css">
    <link rel="stylesheet" href="./assets/css/mis_productos/nav-section.css">
    <link rel="stylesheet " href="./assets/css/mis_productos/serv-sect.css">

    <!-- boxicons link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- default color skin -->
    <link rel="stylesheet " type="text/css " href="./assets/css/skin/col-1.css ">
    <link rel="stylesheet " type="text/css " href="./assets/css/skin/col-2.css ">
    <link rel="stylesheet " type="text/css " href="./assets/css/skin/col-3.css ">
    <link rel="stylesheet " type="text/css " href="./assets/css/skin/col-4.css ">
    <link rel="stylesheet " type="text/css " href="./assets/css/skin/col-5.css ">


    <script type="text/javascript " href="./js/scripts.js "></script>
    <script type="text/javascript " href="js/hamburguer.js ">
    </script>
</head>

<body>
    <!-- header start -->

    <header class="header ">
        <div class="container ">
            <div class="row justify-content-between ">
                <div class="logo ">
                    <a href="index.html ">sweet pets</a>
                </div>
                <div class="ham-cart ">

                    <a href="./misProductos.php " class="cart hover-in-shadow "><i class='bx bx-cart-alt'></i></a>

                    <a href="./# " class="user hover-in-shadow "><i class='bx bxs-user-circle'></i></a>

                    <div class="hamburger-btn hover-in-shadow ">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- header end -->


    <!-- menu navegacion start -->

    <nav class="nav-menu ">
        <div class="close-nav-menu outer-shadow hover-in-shadow ">&times;</div>
        <div class="nav-menu-inner ">
            <ul>
                <li><a href="../sweet_pets/index.html" class="link-item inner-shadow active ">Home</a></li>
                <li><a href="" class="link-item outer-shadow hover-in-shadow ">Servicios</a></li>

            </ul>
        </div>
        <!-- copyright text -->
        <p class="copyright-text ">&copy; 2021 The ZeyroxBM</p>
    </nav>

    <!-- menu navegacion end -->




    <section class="service-section section ">
        <div class="container ">
            <div class="row ">
                <div class="section-title ">
                    <h2 data-heading='productos'>mis Mascotas</h2>
                </div>
            </div>
            <div class="row ">


                <?php 
                
                $total=0;
                if(isset($_SESSION['carrito'])){
                    $datos=$_SESSION["carrito"];
                    
                    for ($i=0; $i < count($datos); $i++) { 
                        ?>
                <div class="service-item productos">
                    <div class="service-item-inner outer-shadow hover-in-shadow ">
                        <img class="icon" src="./productos/<?php echo $datos[$i]['Imagen'];?>">
                        <span> <?php echo $datos[$i]['Nombre']; ?></span><br>
                        <span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
                        <span>cantidad: <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"></span><br>
                        <span>Subtotal: <?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
                    </div>
                </div>


                <?php 
                    $total=( $datos[$i]['Precio']*$datos[$i]['Cantidad'])+$total;
                    
                    }
                
                }else{
                    echo "<div><center><h2>no hay mascotas añadidas </h2></center></div>"."<br>";
                }
            
            ?>




            </div>

    </section>
    <div>
        <?php echo ("<div><center><h2><br>total: ". $total ."<br><br></h2></center></div> "); ?>
        <center><a href="./" class="btn btn-1 hover-in-shadow outer-shadow">ver catalogo</a></center>
    </div>

    <!-- service section end -->


    <script src="./assets/scripts/hamburger.js"></script>
</body>

</html>