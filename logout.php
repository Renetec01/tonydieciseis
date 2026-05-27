<?php
session_start(); // Ubica la sesión actual
session_unset(); // Limpia las variables de sesión
session_destroy(); // Destruye la sesión por completo

// Redirige al usuario al login inmediatamente
header("Location: login.php");
exit();
?>
