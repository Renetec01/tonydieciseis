<?php
session_start();
// Seguridad: solo admins
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
// Usa tu archivo de conexión como siempre
include('conexion.php');
// Validar que el ID venga en la URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID no válido");
}
$id = intval($_GET['id']);
// Usa "id" que es como se llama tu columna
$query = mysqli_query($conexion, "SELECT * FROM articulos WHERE id = $id");
if (!$query) {
    die("Error SQL: " . mysqli_error($conexion));
}
$dato = mysqli_fetch_assoc($query);
if (!$dato) {
    die("Artículo no encontrado.");
}
// Guardar cambios cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock  = $_POST['stock'];
    $actualizar = mysqli_query($conexion, "
        UPDATE articulos 
        SET nombre='$nombre', precio='$precio', stock='$stock' 
        WHERE id = $id
    ");
    if ($actualizar) {
        header("Location: admin.php");
        exit();
    } else {
        $error = "Error al guardar: " . mysqli_error($conexion);
    }
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
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="POST">
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control"
                   value="<?php echo htmlspecialchars($dato['nombre']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control"
                   value="<?php echo $dato['precio']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Stock</label>
            <input type="number" name="stock" class="form-control"
                   value="<?php echo $dato['stock']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
        <a href="admin.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>
