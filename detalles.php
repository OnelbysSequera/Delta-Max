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
        <a href="index.php"></a>
        <img class="header__logo" src="img/Logo.png" alt="logo-e-commerce">
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlaces" href="index.php">Inicio</a>
        <a class="navegacion__enlaces" href="">Ofertas</a>
        <a class="navegacion__enlaces" href="nosotros.php">Nosotros</a>
        <a class="navegacion__enlaces" href="">Iniciar Sesión</a>
        <a class="navegacion__enlaces" href="">Registrarse</a>
        <a class="navegacion__enlaces" href="Login - Register/login.php">Cerrar Sesion</a>
    </nav>

      <main class="contenedor">
        <h1 class="titulo">Detalles del producto.</h1>

        <div class="detalles__producto">
            <img class="detalles__imagen" src="img/P1-E.png" alt="Producto escolar 1">

            <div class="detalles__contenido">
                <p class="detalles__texto">There are many variations of passages of Lorem Ipsum available,
                    but the majority have suffered alteration in some form, by injected humour,
                    or randomised words which don't look even slightly believable.</p>

                    <form class="formulario">
                        <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">
                        <a href="carrito.html" class="formulario__submit">Agregar al carrito</a>
                    </form>
                </div>
            </div>
      </main>

    <footer class="footer">
        <p class="footer__texto">E-Commerce | Todos los derechos reservados 2023.</p>
    </footer>
</body>
</html>