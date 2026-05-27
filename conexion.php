<?php
$conexion = mysqli_connect("localhost", "dev_user", "tso2026", "tonydieciseis");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
