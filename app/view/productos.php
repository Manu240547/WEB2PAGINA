<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Productos</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/productos.css">
</head>
<body>

    <h1>PRODUCTOS</h1>
    
    <h2 class="agregar">Agregar Producto</h2>
    <div class="container">
        <div class="form-container">
            <form action="../models/guardar_producto.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br>
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" required><br>
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" step="0.01" required><br>
                <label for="disponibilidad">Disponibilidad:</label>
                <select id="disponibilidad" name="disponibilidad">
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                </select><br>
                <button type="submit">Agregar Producto</button>
            </form>
        </div>
    </div>
    
    <h2>Productos existentes</h2>
    <?php include 'mostrar_productos.php'; ?>

    <script src="../../public/js/scripts.js"></script>
</body>
</html>
