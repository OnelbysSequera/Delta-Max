<?php

include 'conexion.php';

//Almacenamiento de datos
$correo = $_POST['correo'];
$contraseña = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario_practica WHERE usuario_correo='$correo' and usuario_clave='$contraseña'");

    if(mysqli_num_rows($validar_login) > 0){
        header("location: http://localhost/proyecto_defendido/Delta-Max-main/Delta-Max-main/index.php");
        exit;
    } else {
        echo '<script>
            alert("Correo o contraseña incorrectos, por favor intentelo nuevamente");
            window.location = "http://localhost/proyecto_defendido/Delta-Max-main/Delta-Max-main/Login%20-%20Register/login.php";
        </script>';
        exit;
    }

    mysqli_close($conexion);
?>
