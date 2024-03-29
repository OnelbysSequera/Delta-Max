<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="css/normalize.css"> <!-- Normalize -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="carrito-container">
        <h2 class="titulo-carrito">Tu Carrito de Compras</h2>
        <div class="producto">
            <img src="img/P1-Carrito.png" alt="Producto" class="producto-imagen">
            <div class="producto-info">
                <h3 class="nombre-producto">Caja de lapices Pointer</h3>
                <p class="descripcion-producto">Excelente calidad en lapices de carbón</p>
                <p">Precio: $<span class="precio">3</span></p>
            </div>
            <img class="logo-carrito" src="img/logo-login.svg" alt="Logo carrito">
        </div>
        <div class="total">
            <p>Total: $<span class="precio-total">3</span></p>
        </div>
        <a href="pago.php" class="boton-pago">Proceder al Pago</a>
    </div>

    <footer>
        <p class="footer__texto">E-Commerce | Todos los derechos reservados 2023.</p>
    </footer>
</body>
</html>
