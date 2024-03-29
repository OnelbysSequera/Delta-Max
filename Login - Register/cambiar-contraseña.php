<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establecer nueva contraseña</title>

    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/56aef74e76.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="contenido">
    <header>
        <div class="logo-titulo">
            <a href="login.php"><img src="logo.png" class="logopag" alt="LOGO DE LA PAGINA"></a>
         </div>
        
            <nav class="navegacion">
                <a href="index.php">Inicio</a>
                <a href="contacto.php">Contacto</a>
                <a href="register.php">Registrarse</a>
        </nav>
    </header>

    <div class="fondo-formf">
        <div class="contenedor-form login">
            <h2>Restablecer contraseña</h2>
                <form action="#">
                    
                    <div class="instrucciones">
                        <p class="recordar">! Para restablecer tu cuenta es necesario que introduzcas tu contraseña ¡</p>
                    </div>

                    <div class="contenedor-input">
                        <span class="icono"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" required>
                        <label for="#">Nueva Contraseña</label>
                    </div>

                    <div class="contenedor-input">
                        <span class="icono"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" required>
                        <label for="#">Repetir Contraseña</label>
                    </div>

                    <button type="submit" class="btn">Confirmar</button>

                    <div class="contenedor-back">
                        <a href="login.php">Volver</a></p>
                    </div>
                </form>
        </div>
    </div>
</div>

<footer>
    <p>Copyright © 2022. Todos los derechos reservados.</p>
    <div class="nav-footer">
        <a href="#">Condiciones de uso</a>
        <a href="#">Aviso de privacidad</a>
        
    </div>

</footer>
    
</body>
</html>