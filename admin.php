<?php
// 1. Conexión a la base de datos
$conexion = mysqli_connect("localhost", "dev_user", "User*2026", "tonydieciseis");

// 2. Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// 3. Consultar los artículos
$resultado = mysqli_query($conexion, "SELECT * FROM articulos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Papelería Tony</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Panel de Administración - Equipo 16</h2>
    <hr>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while($fila = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?php echo $fila['id_articulo']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td>$<?php echo $fila['precio']; ?></td>
                <td><?php echo $fila['stock']; ?></td>
                <td>
                    <!-- Botón de Editar con enlace dinámico -->
                    <a href="editar.php?id=<?php echo $fila['id_articulo']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    
                    <!-- Botón de Eliminar con enlace dinámico y confirmación -->
                    <a href="eliminar.php?id=<?php echo $fila['id_articulo']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres eliminar este artículo?')">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
