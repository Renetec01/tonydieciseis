<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Credenciales institucionales del Equipo 16
    $mi_correo = "24160827@itoaxaca.edu.mx";
    $mi_pass = "24160827";

    if ($correo === $mi_correo && $password === $mi_pass) {
        // Guardamos el correo en 'usuario' para que admin.php lo reconozca
        $_SESSION['usuario'] = $correo;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Correo o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lobby - Papelería Tony</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card shadow p-4" style="width: 25rem;">
    <h3 class="text-center mb-4">Lobby de Acceso</h3>

    <?php if($error != ""): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label">Correo Institucional</label>
            <!-- CAMBIO: Se eliminó el atributo 'value' para que el campo esté vacío -->
            <input type="email" name="correo" class="form-control" placeholder="numero@itoaxaca.edu.mx" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Ingresa tu contraseña" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar al Sistema</button>
    </form>
</div>

</body>
</html>
