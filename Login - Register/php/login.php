<?php

include 'conexion.php';

//Almacenamiento de datos
$correo = $_POST['correo'];
$contraseña = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM clientes WHERE correo='$correo' and contraseña='$contraseña'");

    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../index.html");
        exit;
    } else {
        echo '<script>
            alert("Correo o contraseña incorrectos, por favor intentelo nuevamente");
            window.location = "../login.html";
        </script>';
        exit;
    }

    mysqli_close($conexion);
?>
