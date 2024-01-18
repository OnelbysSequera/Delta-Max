<?php

include 'conexion.php';

//Almacenamiento de datos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$documento = $_POST['documento'];
$correo = $_POST['correo'];
$contraseña = $_POST['clave'];
$numb_celular = $_POST['numb_celular'];
$sexo = $_POST['genero'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$parroquia = $_POST['parroquia'];

$query = "INSERT INTO clientes(nombre, apellido, cedula, correo, contraseña, telefono, genero, estado, municipio, parroquia)
			  VALUES('$nombre', '$apellido', '$documento', '$correo', '$contraseña', '$numb_celular', '$sexo', '$estado', '$municipio', '$parroquia')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
	echo '
		<script>
			alert("Registro completado exitosamente");
			window.location = "../login.html";
		</script>
	';
} else {
	echo '
		<script>
			alert("Ha ocurrido un error en el registro, intentelo nuevamente");
			window.location = "../register.html";
		</script>
	';
}
mysqli_close($conexion);
?>
