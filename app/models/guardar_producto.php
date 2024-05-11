<?php
require_once '../../core/database/connection.php';


if(isset($_POST['nombre']) && isset($_POST['cantidad']) && isset($_POST['precio']) && isset($_POST['disponibilidad'])) {

    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $disponibilidad = $_POST['disponibilidad'];

    $sql = "INSERT INTO productos (nombre_producto, cantidad, precio, disponibilidad)
            VALUES ('$nombre', $cantidad, $precio, $disponibilidad)";


    if ($conn->query($sql) === TRUE) {

        header("Location: ../view/productos.php");
        exit();
    } else {
        // Mostrar mensaje de error en caso de fallo en la consulta
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Mostrar mensaje de error si no se recibieron todos los datos del formulario
    echo "Error: Todos los campos del formulario son requeridos.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
