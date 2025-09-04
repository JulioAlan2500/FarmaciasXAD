<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto - Farmacias XAD</title>
        <link rel="shortcut icon" href="../img/logos/FarmaciasXAD - FavIcon.jpg" type="image/x-icon" />
        <link rel="stylesheet" href="../vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/cssContacto.css">
        <script src="../vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
        <div class="contentPrincipal">
            <header class="header">
                <nav class="navbar navbar-expand-md custom-navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../../index.php">
                            <img src="../img/logos/FarmaciasXAD.jpg" width="200" alt="logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="../../index.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="productos.php">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="servicios.php">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="contacto.php">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <section class="contact-hero">
                <div class="container">
                    <h1 class="display-4">Contáctanos</h1>
                    <p class="lead">Estamos para servirte. Visítanos o contáctanos por teléfono o correo electrónico.</p>
                </div>
            </section>

            <main class="contact-section">
                <div class="container">
                    <h2 class="section-title">Envíanos un mensaje</h2>
                    <div class="contact-form">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre" class="form-label">Tu nombre</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre completo" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Tu correo</label>
                                        <input type="email" class="form-control" id="email" placeholder="correo@ejemplo.com" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="asunto" class="form-label">Asunto</label>
                                <input type="text" class="form-control" id="asunto" placeholder="Asunto del mensaje">
                            </div>
                            <div class="form-group mb-4">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..." style="resize: none;"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar mensaje
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>

            <section class="contact-section">
                <div class="container">
                    <h2 class="section-title">Información de contacto</h2>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="contact-card">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info">
                                    <h3>📍 Dirección</h3>
                                    <p>Av. Principal #123, Colonia Centro</p>
                                    <p>Ciudad, Estado, C.P. 12345</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-card">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <h3>📞 Teléfonos</h3>
                                    <p><strong>Ventas:</strong> (000) 123 4567</p>
                                    <p><strong>Servicios:</strong> (000) 765 4321</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-card">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <h3>✉️ Correo electrónico</h3>
                                    <p><strong>General:</strong> info@farmaciasxad.com</p>
                                    <p><strong>Ventas:</strong> ventas@farmaciasxad.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-card">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-info">
                                    <h3>🕒 Horario de atención</h3>
                                    <p><strong>Lunes a Viernes:</strong> 8:00 AM - 8:00 PM</p>
                                    <p><strong>Sábados y Domingos:</strong> 9:00 AM - 6:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <strong>Farmacias XAD</strong>
                            <p class="mb-0">
                                Rebótica, perfumería, genéricos, patente, naturista y homeopatía.
                            </p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <p class="mb-1"><strong>Tel:</strong> (000) 123 4567</p>
                            <p class="mb-0"><strong>Email:</strong> contacto@farmaciasxad.com</p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <p class="mb-0">© 2025 Farmacias XAD. Todos los derechos reservados.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>