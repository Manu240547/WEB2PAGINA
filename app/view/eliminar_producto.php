<?php
require_once '../../core/database/connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM productos WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirecciona al usuario a producto.php con un mensaje de éxito
        header("Location: productos.php?deleted=true");
        exit();
    } else {
        echo "Error al eliminar el producto: " . $conn->error;
    }
} else {
    echo "ID del producto no especificado.";
}

$conn->close();
?>
