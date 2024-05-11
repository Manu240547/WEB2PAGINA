<?php
require_once '../../core/database/connection.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM productos WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <link rel="stylesheet" href="../../public/css/detalles_producto.css">
</head>
<body>
    <h1>Detalles del Producto</h1>
    <ul>
        <li><strong>ID:</strong> <?php echo $row['id']; ?></li>
        <li><strong>Nombre:</strong> <?php echo $row['nombre_producto']; ?></li>
        <li><strong>Cantidad:</strong> <?php echo $row['cantidad']; ?></li>
        <li><strong>Precio:</strong> <?php echo $row['precio']; ?></li>
        <li><strong>Disponibilidad:</strong> <?php echo ($row['disponibilidad'] == 1 ? 'Disponible ✔' : 'No disponible ✘'); ?></li>
    </ul>
    <a href="javascript:history.go(-1)">Volver</a>
</body>
</html>
<?php
    } else {
        echo "Producto no encontrado.";
    }
} else {
    echo "ID de producto no especificado o inválido.";
}
?>
