<?php
session_start();

// Seguridad: solo admins logueados pueden eliminar
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

include("conexion.php");

$id = intval($_GET['id']); // intval protege contra inyección SQL

if (isset($id) && $id > 0) {
    $result = mysqli_query($conexion, "DELETE FROM articulos WHERE id = $id");
    if (!$result) {
        die("Error al eliminar: " . mysqli_error($conexion));
    }
}

header("Location: admin.php");
exit();
?>
