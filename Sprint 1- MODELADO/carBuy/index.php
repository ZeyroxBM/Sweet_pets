<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Carrito de Compras</title>

    <!-- link css -->
    <link rel="stylesheet" href="./assets/css/index/glob.css">
    <link rel="stylesheet" href="./assets/css/index/hed-sect.css">
    <link rel="stylesheet" href="./assets/css/index/ab-sec.css">
    <link rel="stylesheet" href="./assets/css/index/nav-section.css">
    <link rel="stylesheet" href="./assets/css/index/serv-sec.css">

    <!-- boxicons link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- default color skin -->
    <link rel="stylesheet" type="text/css" href="./assets/css/skin/col-1.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/skin/col-2.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/skin/col-3.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/skin/col-4.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/skin/col-5.css">

    
    
    
    </script>
</head>

<body>
    <!-- header start -->

    <header class="header">
        <div class="container">
            <div class="row justify-content-between">
                <div class="logo">
                    <a href="index.html">sweet pets</a>
                </div>
                <div class="ham-cart">

                        <a href="./misProductos.php	" class="cart hover-in-shadow"><i class='bx bx-cart-alt'></i></a>
                
                        <a href="./#" class="user hover-in-shadow"><i class='bx bxs-user-circle'></i></a>
                    
                    <div class="hamburger-btn hover-in-shadow">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- header end -->


    <!-- menu navegacion start -->

    <nav class="nav-menu">
        <div class="close-nav-menu outer-shadow hover-in-shadow">&times;</div>
        <div class="nav-menu-inner">
            <ul>
                <li><a href="#home" class="link-item inner-shadow active">Home</a></li>
                <li><a href="#about" class="link-item outer-shadow hover-in-shadow">About</a></li>
                <li><a href="#services" class="link-item outer-shadow hover-in-shadow">Servicios</a></li>
            </ul>
        </div>
        <!-- copyright text -->
        <p class="copyright-text">&copy; 2021 The ZeyroxBM</p>
    </nav>

    <!-- menu navegacion end -->

    

    <section class="service-section section">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading='Principal'>Nuestras Mascotas</h2>
                </div>
            </div>
            <div class="row">
            

                <?php 
                include "conexion.php";
                $re = $conn->query("SELECT * FROM productos");
                while($f = mysqli_fetch_array($re)) {
                    
                    ?>

                
                    <!-- service item start -->
                        <div class="service-item">
                            <div class="service-item-inner outer-shadow hover-in-shadow">
                                <div class="icon ">
                                    <img src="./productos/<?php echo $f['imagen'];?>" alt="">
                                </div>
                                <h3><?php echo $f['nombre'];?></h3>

                                <a class="btn btn-1 outer-shadow hover-in-shadow " href="./detalles.php?id=<?php echo $f['id']; ?>">ver</a>
                            </div>
                        </div>
                    <!-- service item end -->	
                
                <?php	
                        
                }
                ?>

                

            </div>
        </div>
    </section>
    <!-- service section end -->




    <!-- scripts -->
<script src="./assets/scripts/hamburger.js"></script>
</body>
</html>