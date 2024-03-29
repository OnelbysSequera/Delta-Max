<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer contraseña</title>

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
                <a href="../index.php">Inicio</a>
                <a href="../contacto.php">Contacto</a>
                <a href="../Login - Register/register.php">Registrarse</a>
        </nav>
    </header>

    <div class="fondo-formf">
        <div class="contenedor-form login">
            <h2>¿Has olvidado tu contraseña?</h2>
                <form action="#">
                    
                    <div class="instrucciones">
                        <p class="recordar">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam laudantium, expedita, esse tempore quam officiis error architecto saepe obcaecati illum fuga, consequuntur sit! Nostrum necessitatibus molestiae eaque sunt pariatur est? No te preocupes. Escribe tu email y te enviaremos las instrucciones para recuperarla</p>
                    </div>

                    <div class="contenedor-input">
                        <span class="icono"><i class="fa-sharp fa-solid fa-envelope"></i></span>
                        <input type="email" required>
                        <label for="#">Email</label>
                    </div>

                    <button type="submit" class="btn">Recuperar contraseña</button>

                    <p id="mensaje">Se han enviado las intrucciones a su correo electronico</p>

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