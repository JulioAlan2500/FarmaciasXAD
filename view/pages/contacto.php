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
        <style>
            /* ✅ Extra para el mapa */
            .map-container {
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }
        </style>
    </head>
    <body>
        <div class="contentPrincipal">
            <!-- 🔹 Header -->
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

            <!-- 🔹 Hero -->
            <section class="contact-hero">
                <div class="container">
                    <h1 class="display-4">Contáctanos</h1>
                    <p class="lead">Estamos para servirte. Visítanos o contáctanos por teléfono o correo electrónico.</p>
                </div>
            </section>

            <!-- 🔹 Contacto -->
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
                                    <p>Santa Cristina 226 #123, La Providencia Siglo XXI</p>
                                    <p>Mineral de la Reforma, Hidalgo, C.P. 42186</p>
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

                    <!-- 🔹 Google Maps -->
                    <div class="mt-5">
                        <h2 class="section-title">Ubicación en el mapa</h2>
                        <div class="map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5232574180586!2d-98.73194428509262!3d20.08430038651333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1c10e7a1f9c8d%3A0x123456789abcdef!2sSanta%20Cristina%20226%2C%20La%20Providencia%2C%20Mineral%20de%20la%20Reforma%2C%20Hgo.!5e0!3m2!1ses!2smx!4v1696870000000!5m2!1ses!2smx" 
                                width="100%" 
                                height="400" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 🔹 Footer -->
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
