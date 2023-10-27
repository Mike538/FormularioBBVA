<?php
$conexion = mysqli_connect("http://localhost/formulario/", "12345", "","localhost/xe");
if (!$conexion){
	echo 'Error al conectar en la base de datos';
}
else{
	echo 'Conectado exitosamente';
}
