<?php
include 'conexion.php';

$sql = "SELECT * FROM empleos ORDER BY fecha_publicacion DESC";
$resultado = $conexion->query($sql);

$empleos = [];
while($row = $resultado->fetch_assoc()) {
    $empleos[] = $row;
}

echo json_encode($empleos);
$conexion->close();
?>