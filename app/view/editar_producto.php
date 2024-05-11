<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/editar_producto.css">
</head>
<body>

<div class="container">
    <h1>Editar Producto</h1>

    <?php
    require_once '../../core/database/connection.php';

    // Verificar si se proporcionó un ID válido
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Verificar si la conexión a la base de datos está establecida correctamente
        if ($conn) {
            $sql = "SELECT * FROM productos WHERE id = $id";
            $result = $conn->query($sql);

            if ($result) {
                // Verificar si se encontraron resultados
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
    ?>
                    <form action="../models/guardar_edicion_producto.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre_producto']; ?>" required><br><br>
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad" name="cantidad" value="<?php echo $row['cantidad']; ?>" required><br><br>
                        <label for="precio">Precio:</label>
                        <input type="number" id="precio" name="precio" step="0.01" value="<?php echo $row['precio']; ?>" required><br><br>
                        <label for="disponibilidad">Disponibilidad:</label>
                        <select id="disponibilidad" name="disponibilidad">
                            <option value="1" <?php if ($row['disponibilidad'] == 1) echo "selected"; ?>>Disponible</option>
                            <option value="0" <?php if ($row['disponibilidad'] == 0) echo "selected"; ?>>No disponible</option>
                        </select><br><br>
                        <button type="submit">Guardar Cambios</button>
                    </form>
    <?php
                } else {
                    echo "Producto no encontrado.";
                }
            } else {
                echo "Error al ejecutar la consulta: " . $conn->error;
            }

            $result->free(); // Liberar el resultado
            $conn->close(); // Cerrar la conexión
        } else {
            echo "Error de conexión a la base de datos.";
        }
    } else {
        echo "ID del producto no especificado.";
    }
    ?>
</div>
</body>
</html>
