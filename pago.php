<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pago.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300;1,400;1,700&display=swap" rel="stylesheet">
    <title>Página de Pago</title>
</head>
<body>

<div class="container">
    <img class="producto-pago" src="img/P1-E.png" alt="Producto">
    <h2>Caja de lapices Pointer</h2>
    <p>Total a pagar: 3$</p>

    <label for="nombre">Nombre y Apellidos:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="tarjeta">Número de Tarjeta:</label>
    <input type="text" id="tarjeta" name="tarjeta" required>

    <label for="fecha">Fecha de Vencimiento:</label>
    <input type="text" id="fecha" name="fecha" placeholder="MM/AA" required>

    <label for="codigo">Código de Seguridad:</label>
    <input type="text" id="codigo" name="codigo" required>

    <button onclick="realizarPago()">Realizar Pago</button>
</div>

<footer>
    <p class="footer__texto">E-Commerce | Todos los derechos reservados 2023.</p>
</footer>

<script src="js/script.js"></script>

</body>
</html>
