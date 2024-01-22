<?php
    include 'confiConexion.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $query = "INSERT INTO usuario_practica(usuario_id, usuario_nombre, usuario_correo, usuario_clave) VALUES('', '$nombre', '$correo', '$clave')";
  
    $verificar_correo = mysqli_query($conexion, "SELECT usuario_correo FROM usuario_practica WHERE usuario_correo='$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <div class="">
            Este correo ya esta registrado
        </div>
        <script>
            window.location = "http://localhost/proyecto_implantacion/Login%20-%20Register/register.php";
        </script>
        ';

        exit(0);

    }
    
    $ejecutar = mysqli_query($conexion, $query);

   

    if($ejecutar){
        echo '
        <script>
            alert("Usuario guardado exitosamente");
            window.location = "http://localhost/proyecto_implantacion/Login%20-%20Register/login.php";
        </script>';
    }else{
        echo '
        <script>
            alert("Usuario no pudo ser guardado exitosamente");
            window.location = "http://localhost/proyecto_implantacion/Login%20-%20Register/register.php";
        </script>';
    }
    mysqli_close($conexion);
?>