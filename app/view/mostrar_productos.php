<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link rel="stylesheet" type="text/css" href="public/css/mostrar_productos.css">
</head>
<body>
<?php
require_once '../../core/database/connection.php';

$sql = "SELECT id, nombre_producto, cantidad, precio, disponibilidad FROM productos";
$result = $conn->query($sql);

if ($result === false) {
    die("Error al ejecutar la consulta: " . $conn->error); // Manejar errores en la consulta SQL
}

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre del Producto</th>";
    echo "<th>Cantidad</th>";
    echo "<th>Precio</th>";
    echo "<th>Disponibilidad</th>";
    echo "<th>Acciones</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre_producto"] . "</td>";
        echo "<td>" . $row["cantidad"] . "</td>";
        echo "<td>" . $row["precio"] . "</td>";
        echo "<td>" . ($row["disponibilidad"] == 1 ? 'Disponible' : 'No disponible') . "</td>";
        echo "<td class='button-cell'>";
        echo "<button onclick='editarProducto(" . $row["id"] . ")'>Editar</button>";
        echo "<button onclick='confirmarEliminar(" . $row["id"] . ")'>Eliminar</button>";
        echo "<a href='detalles_producto.php?id=" . $row["id"] . "'><button>Más Detalles</button></a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay resultados.";
}

// No necesitas liberar el resultado aquí ya que lo estás haciendo después de usarlo
// $result->free(); // Liberar el resultado
?>
</body>
</html>
