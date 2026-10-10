<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Cifra la contraseña de forma segura
    $rol = $_POST['rol'];

    $sql = "INSERT INTO usuarios (nombre, correo, password_hash, rol) VALUES ('$nombre', '$correo', '$password', '$rol')";

    if ($conexion->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "¡Registro exitoso!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: El correo ya está registrado o hay un fallo."]);
    }
}
$conexion->close();
?>