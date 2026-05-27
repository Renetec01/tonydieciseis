<?php
include 'conexion.php';
$id = $_GET['id'];

if (isset($id)) {
    mysqli_query($conexion, "DELETE FROM articulos WHERE id_articulo = $id");
}

header("Location: admin.php");
exit();
?>
