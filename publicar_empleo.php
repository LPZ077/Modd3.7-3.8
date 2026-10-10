<?php
include 'conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Suponiendo que guardas el id del empleador en sesión al iniciar sesión
    $empleador_id = isset($_SESSION['usuario_id']) ? $_SESSION['usuario_id'] : 1; 
    $titulo = $_POST['titulo_puesto'];
    $negocio = $_POST['nombre_negocio'];
    $correo = $_POST['correo_empleador'];
    $desc = $_POST['descripcion'];
    $horario = $_POST['horario'];
    $edad = $_POST['rango_edad'];
    $edu = $_POST['nivel_educativo'];

    $sql = "INSERT INTO empleos (empleador_id, titulo_puesto, nombre_negocio, correo_empleador, descripcion, horario, rango_edad, nivel_educativo) 
            VALUES ($empleador_id, '$titulo', '$negocio', '$correo', '$desc', '$horario', '$edad', '$edu')";

    if ($conexion->query($sql) === TRUE) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => $conexion->error]);
    }
}
$conexion->close();
?>