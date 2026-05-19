<?php
$conexion = mysqli_connect("localhost", "dev_user", "User*2026", "tonydieciseis");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
