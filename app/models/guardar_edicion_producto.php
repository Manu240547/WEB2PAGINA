<?php
require_once '../../core/database/connection.php';

if (isset($_POST['id'], $_POST['nombre'], $_POST['cantidad'], $_POST['precio'], $_POST['disponibilidad'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $disponibilidad = $_POST['disponibilidad'];

    $sql = "UPDATE productos SET nombre_producto = ?, cantidad = ?, precio = ?, disponibilidad = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("siiii", $nombre, $cantidad, $precio, $disponibilidad, $id);

        if ($stmt->execute()) {
            // Producto editado correctamente
            echo "<!DOCTYPE html>";
            echo "<html lang='en'>";
            echo "<head>";
            echo "<meta charset='UTF-8'>";
            echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<title>Producto Editado</title>";
            echo "<link rel='stylesheet' href='../../public/css/index.css'>";
            echo "</head>";
            echo "<body>";
            echo "<div class='container'>";
            echo "<h2>Producto Editado</h2>";
            echo "<p>¡El producto ha sido editado correctamente!</p>";
            echo "<div class='enlace-productos'><a href='../view/productos.php'>Volver al CRUD</a></div>";
            echo "</div>";
            echo "</body>";
            echo "</html>";
        } else {
            // Error al actualizar el producto
            echo "<!DOCTYPE html>";
            echo "<html lang='en'>";
            echo "<head>";
            echo "<meta charset='UTF-8'>";
            echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
            echo "<title>Error</title>";
            echo "<link rel='stylesheet' href='../../public/css/index.css'>";
            echo "</head>";
            echo "<body>";
            echo "<div class='container'>";
            echo "<h2>Error</h2>";
            echo "<p>Ocurrió un error al actualizar el producto: " . $stmt->error . "</p>";
            echo "<div class='enlace-productos'><a href='../view/productos.php'>Volver al CRUD</a></div>";
            echo "</div>";
            echo "</body>";
            echo "</html>";
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        // Error en la preparación de la consulta
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>Error</title>";
        echo "<link rel='stylesheet' href='public/css/index.css'>";
        echo "</head>";
        echo "<body>";
        echo "<div class='container'>";
        echo "<h2>Error</h2>";
        echo "<p>Error en la preparación de la consulta: " . $conn->error . "</p>";
        echo "<div class='enlace-productos'><a href='../view/productos.php'>Volver al CRUD</a></div>";
        echo "</div>";
        echo "</body>";
        echo "</html>";
    }
} else {
    // Datos del formulario incompletos
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Error</title>";
    echo "<link rel='stylesheet' href='public/css/index.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h2>Error</h2>";
    echo "<p>Datos del formulario incompletos.</p>";
    echo "<div class='enlace-productos'><a href='../view/productos.php'>Volver al CRUD</a></div>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
}

// Cerrar la conexión
$conn->close();
?>
