<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Papelería Tony - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #004a99;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Papelería Tony</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nosotros">Misión y Visión</a></li>
                    <li class="nav-item">
                        <!-- Este botón los lleva a tu Lobby -->
                        <a class="btn btn-outline-light ms-3" href="login.php">Acceso Empleados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección Inicio -->
    <section id="inicio" class="hero-section">
        <div class="container">
            <h1 class="display-4">Bienvenido a Papelería Tony</h1>
            <p class="lead">Tu mejor opción para surtir tu lista escolar y de oficina.</p>
        </div>
    </section>

    <!-- Sección Misión y Visión -->
    <section id="nosotros" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Nuestra Misión</h3>
                    <p>Proveer a estudiantes y profesionistas los mejores artículos de papelería con la más alta calidad y un excelente servicio al cliente, facilitando su desarrollo creativo y profesional.</p>
                </div>
                <div class="col-md-6">
                    <h3>Nuestra Visión</h3>
                    <p>Ser la cadena de papelerías líder a nivel nacional, reconocida por nuestra innovación, extenso catálogo de productos y compromiso con la educación.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Productos -->
    <section id="productos" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Nuestros Productos Destacados</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <h4>Escritura</h4>
                        <p>Bolígrafos, lápices, marcatextos y más de las mejores marcas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <h4>Cuadernos</h4>
                        <p>Libretas, blocks y papel para todas tus necesidades.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <h4>Arte y Diseño</h4>
                        <p>Pinturas, pinceles, y todo para dejar volar tu imaginación.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2026 Papelería Tony. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>