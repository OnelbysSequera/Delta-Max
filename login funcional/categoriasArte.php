<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria artes</title>
    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include "php/menuNavegacion.php";
    ?>
    <h1 class="mt-5 ml-5">Productos</h1>

    <div class="container">
        <div class="row mt-5">
            <?php
            require_once 'php/conexion.php';
            $query = "SELECT * FROM producto WHERE id_categoria = 5";
            $resultado = $conexion->query($query);

            while ($producto = $resultado->fetch_assoc()) {
            ?>
                
                <div class="col-8 mb-5">
                    <div class="card" style="width: 18rm">
                        <img src="<?php echo $producto['img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto['nombre_producto']; ?></h5>
                            <p class="card-text">Precio: $<?php echo $producto['precio']; ?></p>
                            <a href="#" class="btn btn-primary">Ver detalles</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            $conexion->close();
            ?>
            <div class="col-4">
        <aside class="bg-light p-5">
          <h2>Disponibilidad</h2>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="enStock">
            <label class="form-check-label" for="enStock">
              En stock
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="agotados">
            <label class="form-check-label" for="agotados">
              Agotados
            </label>
          </div>
          <h4 class="mt-3">Resultados</h4>
          <div>
            <?php
            include 'php/contarProductos.php';
            ?>
          </div>
        </aside>
      </div>
        </div>
    </div>
    <?php
    include "php/pie.php";
    ?>

</body>

</html>