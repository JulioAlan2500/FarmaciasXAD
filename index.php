<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Farmacias XAD</title>
    <link rel="shortcut icon" href="view/img/logos/FarmaciasXAD - FavIcon.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="view/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/cssIndex.css">
    <script src="view/vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Estilos para el carrusel */
        .carousel-container {
            width: 100%;
            margin-bottom: 2rem;
        }
        
        .carousel-item {
            height: 70vh;
            min-height: 400px;
            background: no-repeat center center;
            background-size: cover;
            position: relative;
        }
        
        .carousel-caption {
            bottom: initial;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
        }
        
        .carousel-content {
            background-color: rgba(25, 65, 115, 0.85);
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
            max-width: 800px;
            margin: 0 auto;
        }
        
        .carousel-content h1 {
            font-weight: 700;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 1.5rem !important;
        }
        
        .carousel-content p {
            font-size: 1.5rem;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
            margin-bottom: 0;
        }
        
        .carousel-indicators button {
            width: 12px !important;
            height: 12px !important;
            border-radius: 50%;
            margin: 0 8px !important;
        }
        
        .carousel-control-prev, .carousel-control-next {
            width: 5% !important;
        }
        
        @media (max-width: 768px) {
            .carousel-item {
                height: 50vh;
            }
            
            .carousel-caption {
                padding-top: 30px;
            }
            
            .carousel-content {
                padding: 1.5rem;
            }
            
            .carousel-content h1 {
                font-size: 2.2rem;
            }
            
            .carousel-content p {
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>
    <div class="contentPrincipal">
        <header class="header">
            <nav class="navbar navbar-expand-md custom-navbar bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="view/img/logos/FarmaciasXAD.jpg" width="200" alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="" data-bs-target="#categoriesOffcanvas"
                                    href="view/pages/productos.php">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" target="" href="view/pages/servicios.php">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="view/pages/contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Carrusel de imágenes (nuevo) -->
        <div class="carousel-container">
            <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <!-- Indicadores -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
                </div>
                
                <!-- Imágenes del carrusel desde archivos locales -->
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url('view/img/Farmacias_XAD_Carrusel_1.jpg')">
                        <div class="carousel-caption">
                            <div class="carousel-content">
                                <h1 class="display-4 mb-4">Bienvenido a Farmacias XAD</h1>
                                <p class="lead">Tu salud es nuestra prioridad. Encuentra los mejores productos farmacéuticos y servicios de calidad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('view/img/Farmacias_XAD_Carrusel_2.jpg')">
                        <div class="carousel-caption">
                            <div class="carousel-content">
                                <h1 class="display-4 mb-4">Cuidamos de ti y tu familia</h1>
                                <p class="lead">Profesionales de la salud comprometidos con tu bienestar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('view/img/Farmacias_XAD_Carrusel_3.jpg')">
                        <div class="carousel-caption">
                            <div class="carousel-content">
                                <h1 class="display-4 mb-4">Servicio de excelencia</h1>
                                <p class="lead">Ofrecemos asesoramiento personalizado para tus necesidades de salud.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>

        <main class="main">
            <div class="main-container">
                <section class="section">

                    <div class="services-grid">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <h3>Rebótica</h3>
                            <p>Amplia variedad de medicamentos con y sin receta para todo tipo de necesidades médicas.
                            </p>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-spa"></i>
                            </div>
                            <h3>Perfumería</h3>
                            <p>Fragancias exclusivas y productos de belleza para el cuidado personal y realzar tu
                                estilo.</p>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-capsules"></i>
                            </div>
                            <h3>Genéricos</h3>
                            <p>Medicamentos de calidad con el mismo principio activo pero a precios más accesibles.</p>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-flask"></i>
                            </div>
                            <h3>Patente</h3>
                            <p>Medicamentos originales de laboratorios reconocidos con garantía de calidad y
                                efectividad.</p>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <footer>
            <div class="cols">
                <div>
                    <strong>Farmacias XAD</strong>
                    <p>
                        Rebótica, perfumería, genéricos, patente, naturista y homeopatía.
                    </p>
                </div>
                <div>
                    <p><strong>Tel:</strong> (000) 123 4567</p>
                    <p><strong>Email:</strong> contacto@farmaciasxad.com</p>
                </div>
                <div>
                    <p>© 2025 Farmacias XAD</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>