<?php
require_once '../../core/database/connection.php';

$sql = "SELECT id, nombre_producto, cantidad, precio, disponibilidad FROM productos";
$result = $conn->query($sql);

if ($result === false) {
    die("Error al ejecutar la consulta: " . $conn->error); // Manejar errores en la consulta SQL
}
?>
