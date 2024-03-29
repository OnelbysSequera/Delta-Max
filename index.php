<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce | Inicio</title>
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
        <a class="navegacion__enlaces" href="nosotros.php">Nosotros</a>
        <a class="navegacion__enlaces" href="Login - Register/login.php">Iniciar Sesion</a>
        <a class="navegacion__enlaces" href="Login - Register/register.php">Registrarse</a>
        <a class="navegacion__enlaces" href="Login - Register/login.php">Cerrar Sesion</a>
    </nav>

    <div class="carousel-container">
        <div class="carousel-slide">
          <img src="img/Banner1.png" alt="Imagen 1">
          <img src="img/Banner2.png" alt="Imagen 2">
          <img src="img/Banner3.png" alt="Imagen 3">
          <!-- Agrega más imágenes aquí -->
        </div>
      
        <button id="prevBtn"></button>
        <button id="nextBtn"></button>
      </div>

      <main class="contenedor">

        <!-- Información Importante -->
        <h2 class="tituloinfo">¡INFORMACIÓN!</h2>
        <div class="container">
            <div class="row espaciado-superior">
              <div class="col-md-4 espaciado-inferior-sm">
                <img src="img/1.png" class="img-fluid" alt="Imagen 1">
              </div>
              <div class="col-md-4 espaciado-inferior-sm">
                <img src="img/2.png" class="img-fluid" alt="Imagen 2">
              </div>
              <div class="col-md-4 espaciado-inferior-sm">
                <img src="img/3.png" class="img-fluid" alt="Imagen 3">
              </div>
            </div>
          </div>
        <h1 class="titulo">Elige tu categoria.</h1>

        <div class="grid">
            <div class="categorias">
                <a href="escolares.php">
                <img class="categoria__imagen" src="img/cat1.svg" alt="categoria1">
                <div class="categoria__informacion">
                    <p class="categoria__nombre">Escolares</p>
                </div>
                </a>
            </div> <!-- Categorias fin -->
            <div class="categorias">
                <a href="oficina.php">
                <img class="categoria__imagen" src="img/cat2.svg" alt="categoria1">
                <div class="categoria__informacion">
                    <p class="categoria__nombre">Oficina</p>
                </div>
                </a>
            </div> <!-- Categorias fin -->
            <div class="categorias">
                <a href="manualidades.php">
                <img class="categoria__imagen" src="img/cat3.svg" alt="categoria1">
                <div class="categoria__informacion">
                    <p class="categoria__nombre">Manualidades</p>
                </div>
                </a>
            </div> <!-- Categorias fin -->
            <div class="categorias">
                <a href="decoracion.php">
                <img class="categoria__imagen" src="img/cat4.svg" alt="categoria1">
                <div class="categoria__informacion">
                    <p class="categoria__nombre">Decoración</p>
                </div>
                </a>
            </div> <!-- Categorias fin -->
            <div class="categorias">
                <a href="arte.php">
                <img class="categoria__imagen" src="img/cat5.svg" alt="categoria1">
                <div class="categoria__informacion">
                    <p class="categoria__nombre">Arte</p>
                </div>
                </a>
            </div> <!-- Categorias fin -->
            <div class="categorias">
                <a href="regalos.php">
                <img class="categoria__imagen" src="img/cat6.svg" alt="categoria1">
                <div class="categoria__informacion">
                    <p class="categoria__nombre">Regalos</p>
                </div>
                </a>
            </div> <!-- Categorias fin -->
        </div>
      </main>


    <footer class="footer">
        <p class="footer__texto">E-Commerce | Todos los derechos reservados 2023.</p>
    </footer>
    <script src="js/carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>