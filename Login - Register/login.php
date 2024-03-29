<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/56aef74e76.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="contenido">
    <header>
        <div class="logo-titulo">
            <a href="login.php"><img src="../img/logo-login.svg" class="logopag" alt="LOGO DE LA PAGINA"/></a>
         </div>
        
            <nav class="navegacion">
                <a class="navegacion__enlaces" href="../index.php">Inicio</a>
                <a class="navegacion__enlaces" href="">Ofertas</a>
                <a class="navegacion__enlaces" href="../nosotros.php">Nosotros</a>
                <a class="navegacion__enlaces" href="register.php">Registrarse</a>
            </nav>
    </header>

    <div class="fondo-forml">
        <div class="contenedor-form login">
            <h2>INICIAR SESION</h2>
                <form action="php/login.php" method="POST">
                    <div class="contenedor-input">
                        <span class="icono"><i class="fa-sharp fa-solid fa-envelope"></i></span>
                        <input type="email"name="correo" required>
                        <label for="#">Email</label>
                    </div>

                    <div class="contenedor-input">
                        <span class="icono"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="clave" required>
                        <label for="#">Contraseña</label>
                    </div>

                    <div class="recordar">
                        <label for="recordar-sesion"><input name="recordar-sesion" id="recordar-sesion" type="checkbox">Recordar Sesion</label>
                        <a href="restablecer.php">Recuperar Contraseña</a>
                    </div>

                    <button type="submit" class="btn">Entrar</button>
                    
                    <div class="crear-cuenta">
                        <p>¿No tienes una cuenta? <a href="register.php">Registrate</a></p>
                    </div>
                </form>
        </div>
    </div>
</div>

<footer>
    <p class="footer__texto">E-Commerce | Todos los derechos reservados 2023.</p>
</footer>
    
</body>
</html>
