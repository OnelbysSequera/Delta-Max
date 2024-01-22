<?php

include '../php/confiConexion.php';

//Almacenamiento de datos
$correo = $_POST['correo'];
$clave= $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario_practica WHERE usuario_correo='$correo' and  usuario_clave='$clave'");

    if(mysqli_num_rows($validar_login) > 0){
        header("location: http://localhost/proyecto_implantacion/index.php");
        exit;
    } else {
        echo '<script>
            alert("Correo o contraseña incorrectos, por favor intentelo nuevamente");
            window.location = "http://localhost/proyecto_implantacion/Login%20-%20Register/login.php";
        </script>';
        exit;
    }

    mysqli_close($conexion);
?>