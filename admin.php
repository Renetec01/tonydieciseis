<?php
session_start();

// 1. Candado de Seguridad: Si no hay sesión, manda al Lobby
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// 2. Conexión a la base de datos
$conexion = mysqli_connect("localhost", "dev_user", "User*2026", "tonydieciseis");

// Verificar conexión
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
    <!-- Bootstrap para que se vea profesional -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .header-flex { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
    </style>
</head>
<body class="container mt-5">

    <div class="header-flex">
        <h2>Panel de Administración - Equipo 16</h2>
        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>

    <div class="mb-4">
        <a href="agregar.php" class="btn btn-primary"> + Agregar Nuevo Artículo</a>
    </div>

    <hr>

    <table class="table table-striped table-bordered shadow-sm bg-white">
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
                <td>$<?php echo number_format($fila['precio'], 2); ?></td>
                <td><?php echo $fila['stock']; ?></td>
                <td>
                    <!-- Botón de Editar -->
                    <a href="editar.php?id=<?php echo $fila['id_articulo']; ?>" class="btn btn-warning btn-sm">Editar</a>

                    <!-- Botón de Eliminar con confirmación real -->
                    <a href="eliminar.php?id=<?php echo $fila['id_articulo']; ?>" 
                       class="btn btn-danger btn-sm" 
                       onclick="return confirm('¿Seguro que quieres borrar este artículo?')">
                       Eliminar
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>
