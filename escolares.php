<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce | Escolares</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        <a class="navegacion__enlaces navegacion__enlaces--activo" href="index.php">Inicio</a>
        <a class="navegacion__enlaces" href="">Ofertas</a>
        <a class="navegacion__enlaces" href="nosotros.html">Nosotros</a>
        <a class="navegacion__enlaces" href="Login - Register/login.php">Iniciar Sesión</a>
        <a class="navegacion__enlaces" href="Login - Register/register.php">Registrarse</a>
        <a class="navegacion__enlaces" href="Login - Register/login.php">Cerrar Sesion</a>
    </nav>

      <main class="contenedor">
        <h1 class="titulo">Productos Escolares</h1>

        <div class="container mt-4">
            <!-- Primera fila -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="border border-dark border-2 p-4" style="background-color: lightpink;">
                        <a href="detalles.php">
                        <img src="img/P1-E.png" class="img-fluid imagen-fija" alt="Imagen 1">
                        </a>
                        <h3>Caja de lapices Pointer: <span class="badge bg-primary">3$</span></h3>
                        <p class="texto__producto">Click para ver detalles del producto.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="border border-dark border-2 p-4" style="background-color: lightpink;">
                        <img src="img/P2-E.png" class="img-fluid imagen-fija" alt="Imagen 2">
                        <h3>Caja de borradores Pointer: <span class="badge bg-primary">5$</span></h3>
                        <p class="texto__producto">Click para ver detalles del producto.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="border border-dark border-2 p-4" style="background-color: lightpink;">
                        <img src="img/P3-E.png" class="img-fluid imagen-fija" alt="Imagen 3">
                        <h3>Caja de sacapuntas Pointer: <span class="badge bg-primary">5$</span></h3>
                        <p class="texto__producto">Click para ver detalles del producto.</p>
                    </div>
                </div>
            </div>
        
            <!-- Segunda fila -->
            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="border border-dark border-2 p-4" style="background-color: lightpink;">
                        <img src="img/P4-E.png" class="img-fluid imagen-fija" alt="Imagen 4">
                        <h3>Caja de colores Pointer: <span class="badge bg-primary">5$</span></h3>
                        <p class="texto__producto">Click para ver detalles del producto.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="border border-dark border-2 p-4" style="background-color: lightpink;">
                        <img src="img/P5-E.png" class="img-fluid imagen-fija" alt="Imagen 5">
                        <h3>Tijeras escolares Pointer: <span class="badge bg-primary">4$</span></h3>
                        <p class="texto__producto">Click para ver detalles del producto.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="border border-dark border-2 p-4" style="background-color: lightpink;">
                        <img src="img/P6-E.png" class="img-fluid imagen-fija" alt="Imagen 6">
                        <h3>Pega blanca Pointer:  <span class="badge bg-primary">2.5$</span></h3>
                        <p class="texto__producto">Click para ver detalles del producto.</p>
                    </div>
                </div>
            </div>
        </div>
        
      </main>
      

    <footer class="footer">
        <p class="footer__texto">E-Commerce | Todos los derechos reservados 2023.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>