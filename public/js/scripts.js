function confirmarEliminar(id) {
    var confirmacion = confirm("¿Estás seguro de que deseas eliminar este producto?");
    if (confirmacion) {
        window.location.href = "eliminar_producto.php?id=" + id;
    }
}

function editarProducto(id) {
    window.location.href = "editar_producto.php?id=" + id;
}
