<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Pets</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                        <button><a href="../../sweet_pets/index.html">Inicio</a></button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="login.php" method="post" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="email" name="email" placeholder="Correo Electronico" required>
                        <input type="password" name="psw" placeholder="Contraseña" required>
                        <button type="submit">Entrar</button>
                    </form>


                    <!--Register-->
                    <form action="registrar.php" method="post" enctype="multipart/form-data" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" name="name" placeholder="Nombre completo" required>
                        <input type="email" name="email" placeholder="Correo Electronico" required>
                        <input class="img" type="file" name="foto" placeholder="Foto usuario" required>
                        <input type="password" name="psw" placeholder="Contraseña" required>
                        <button type="submit">Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>