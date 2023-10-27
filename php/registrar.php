<?php
include 'conexion.php';
//Recibir los datos y almacenarlos en variables
$nombre_jugador = $_POST["nombre_jugador"];
$apellido_Paterno = $_POST["apellido_Paterno"];
$apellido_Materno = $_POST["apellido_Materno"];
$apodo = $_POST["apodo"];
$id_jugador = $_POST["id_jugador"];
$Lugar_nacimiento = $_POST["Lugar_nacimiento"];
$dorsal = $_POST["dorsal"];
$posicion = $_POST["posicion"];
$precio_mercado = $_POST["precio_mercado"];
$id_equipo = $_POST["id_equipo"];
//Consulta para insertar
$insertar = "INSERT INTO tb_usuarios(Nombre jugador, Apellido Paterno, Apellido Materno, Apodo, ID del jugador, Lugar de nacimiento, Dorsal del jugador, posicion jugador, Precio del jugador, ID del equipo donde juega) VALUES ('$nombre_jugador', '$apellido_Paterno', '$apellido_Materno', '$apodo', '$id_jugador', '$Lugar_nacimiento', '$id_jugador', '$dorsal', '$posicion', '$precio_mercado'), '$id_equipo')";
//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}else{
	echo 'Usuario registrado exitosamente';
}
//Cerrrar conexion
mysqli_close($conexion);
