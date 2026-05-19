<?php
// Conexión
$conexion = mysqli_connect("localhost", "dev_user", "User*2026", "tonydieciseis");

// Si el usuario envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    // Insertar el nuevo artículo
    $query = "INSERT INTO articulos (nombre, precio, stock) VALUES ('$nombre', '$precio', '$stock')";
    
    if (mysqli_query($conexion, $query)) {
        // Si sale bien, lo regresa a la tabla
        header("Location: admin.php");
        exit();
    } else {
        echo "Error al agregar: " . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto - Equipo 16</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Agregar Nuevo Artículo</h2>
    <hr>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Nombre del Artículo</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Precio ($)</label>
            <input type="number" step="0.01" name="precio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Stock Inicial</label>
            <input type="number" name="stock" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Producto</button>
        <a href="admin.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>
