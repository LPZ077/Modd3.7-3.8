<?php
$host = "localhost";
$usuario = "root";
$contrasena = "INFRAMEN2026"; // Tu contraseña configurada
$base_datos = "db_chispa";

// Crear conexión
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Configurar juego de caracteres a UTF-8
$conexion->set_charset("utf8");
?>