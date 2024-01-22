<?php
/* Establecer la conexión con la base de datos*/

$conexion = new mysqli("localhost", "root", "", "implantacion");

	if ($conexion) {
		echo "Se ha establecido la conexion con la base de datos exitosamente";
	} else {
		echo "No se ha podido establacer la conexion con la base de datos";
	}


?>