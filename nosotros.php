<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce | Inicio</title>
    <link rel="stylesheet" href="css/normalize.css"> <!-- Normalize -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css"> <!-- CSS -->

</head>
<body>
    <header class="header">
        <a href="index.html"></a>
        <img class="header__logo" src="img/Logo.png" alt="logo-e-commerce">
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlaces" href="index.php">Inicio</a>
        <a class="navegacion__enlaces" href="">Ofertas</a>
        <a class="navegacion__enlaces navegacion__enlaces--activo" href="nosotros.php">Nosotros</a>
        <a class="navegacion__enlaces" href="Login - Register/login.php">Iniciar Sesión</a>
        <a class="navegacion__enlaces" href="Login - Register/register.php">Registrarse</a>
    </nav>

      <main class="contenedor">
        <h1 class="titulo">¡Conocenos!</h1>

        <div class="nosotros">
        <div class="nosotros__contenido">
            <p class="texto__nosotros">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse lorem arcu, fringilla in metus quis, congue pharetra augue.
                Maecenas purus enim, gravida non maximus vel, maximus ut orci.
                Vivamus vitae enim hendrerit, luctus enim a, pulvinar velit.
                Etiam in lacus viverra, maximus felis nec, aliquet nunc.
                Vestibulum a ornare libero. Suspendisse facilisis tincidunt leo at suscipit.
                Curabitur consequat arcu a vehicula blandit.
                Suspendisse vulputate nulla id nulla hendrerit gravida. Etiam accumsan quis eros at finibus.
            </p>
        </div>
        <div class="imgenNosotros">
            <img class="nosotros__imagen" src="img/Conocenos2.png" alt="imagen nosotros">

        </div>
    </div>
      </main>

      <section class="contenedor comprar">
        <h2 class="comprar__titulo titulo">¿Por que comprar en mi tienda?</h2>

        <div class="bloques">
        <div class="bloque">
            <img class="bloque__imagen" src="img/icono__1.svg" alt="por que comrpar">
            <h3 class="bloque__titulo">El mejor precio</h3>
            <p class="texto__nosotros">Aenean porttitor quam eu sapien auctor, in aliquam ex viverra.</p>
        </div> <!--.bloque-->

        <div class="bloque">
            <img class="bloque__imagen" src="img/icono__2.svg" alt="por que comrpar">
            <h3 class="bloque__titulo">Envio gratis</h3>
            <p class="texto__nosotros">Aenean porttitor quam eu sapien auctor, in aliquam ex viverra.</p>
        </div> <!--.bloque-->

        <div class="bloque">
            <img class="bloque__imagen" src="img/icono__3.svg" alt="por que comrpar">
            <h3 class="bloque__titulo">Productos de calidad</h3>
            <p class="texto__nosotros">Aenean porttitor quam eu sapien auctor, in aliquam ex viverra.</p>
        </div> <!--.bloque-->

        <div class="bloque">
            <img class="bloque__imagen" src="img/icono__4.svg" alt="por que comrpar">
            <h3 class="bloque__titulo">Compra segura</h3>
            <p class="texto__nosotros">Aenean porttitor quam eu sapien auctor, in aliquam ex viverra.</p>
        </div> <!--.bloque-->
    </div> <!--.bloques-->
      </section>
      

    <footer class="footer">
        <p class="footer__texto">E-Commerce | Todos los derechos reservados 2023.</p>
    </footer>
</body>
</html>