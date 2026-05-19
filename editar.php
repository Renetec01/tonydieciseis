<?php
$conexion = mysqli_connect("localhost", "dev_user", "User*2026", "tonydieciseis");
$id = $_GET['id'];

// Obtener datos actuales del producto
$query = mysqli_query($conexion, "SELECT * FROM articulos WHERE id_articulo = $id");
$dato = mysqli_fetch_assoc($query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    mysqli_query($conexion, "UPDATE articulos SET nombre='$nombre', precio='$precio', stock='$stock' WHERE id_articulo = $id");
    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar - Equipo 16</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Editar Artículo #<?php echo $id; ?></h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $dato['nombre']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" value="<?php echo $dato['precio']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Stock</label>
            <input type="number" name="stock" class="form-control" value="<?php echo $dato['stock']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
        <a href="admin.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>
